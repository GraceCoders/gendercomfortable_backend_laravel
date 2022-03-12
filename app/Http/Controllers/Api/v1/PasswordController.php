<?php
// only password manger all password mange here
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class PasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        $input = $request->all();
        $userid = Auth::user()->id;
        $data = $request->all();
        $validator = Validator::make($data, [
            'password'               => 'required',
            'new_password'           => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);
        if($validator->fails()) {
            return response()->json(['statusCode' => 422, 'message' => $this->getErrorAsString($validator->errors()), 'data' => null], 422);
        } else {
            try {
                if ((Hash::check(request('password'), Auth::user()->password)) == false) {
                    return response()->json(['statusCode' => 400, 'message' => 'Check your old password.'], 400);
                } else if ((Hash::check(request('new_password'), Auth::user()->password)) == true) {
                    return response()->json(['statusCode' => 400, 'message' => 'Please enter a password which is not similar then current password.'], 400);
                } else {
                    User::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                    return response()->json(['statusCode' => 200, 'message' => 'Password updated successfully.'], 200);
                }
            } catch (Exception $exception) {
                return response()->json(['statusCode' => 400, 'message' => $exception->getMessage()], 400);
            }
        }
    }
    public function send_email(Request $request)
    {
        $messages = [
            'email.required'        =>      'Email is required',
        ];
        $validator = Validator::make($request->all(), [
            'email'         =>          ['required', 'exists:users,email'],
        ], $messages);
        if ($validator->fails())
            return response()->json(['statusCode' => 422, 'message' => getErrorAsString($validator->errors()), 'data' => null], 422);
        try {
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' =>  Str::random(60),
                'created_at' => Carbon::now()
            ]);
            $tokenData = DB::table('password_resets')
                ->where('email', $request->email)->first();
             $link = "http://127.0.0.1:8000/";
            // $link = "74.208.82.197/gendercomfortable/public/";

            $link = $link . 'password/reset/' . $tokenData->token;
            $user = User::where('email', $request->email)->first();

            $name = $user->first_name . ' ' . $user->last_name;

            $email = $user->email;

            Mail::to($request->email)->send(new ForgotPassword($link, $email));

            return response()->json(['statusCode' => 200, 'message' => 'Reset password link sent on your email id.', 'data' => null], 200);
        } catch (Exception $exception) {
            return response()->json(['statusCode' => 400, 'message' => $exception->getMessage()], 400);
        }
    }

    public function reset_password(Request $request)
    {
        $messages = [
            'token.required'                =>      "Password reset token mismatch!",
            'password.required'             =>      'Password is required',
        ];

        $validator = Validator::make($request->all(), [
            'token'         =>          ['required'],
            'password'      =>          ['required'],
        ], $messages);

        if ($validator->fails())
            return redirect()->url('reset-password/')
                ->with('info', 'please check your password');
          $tokenData = DB::table('password_resets')
            ->where('token', $request->token)->first();
        if (!$tokenData) return response()->json(['statusCode' => 422, 'message' => 'Token not found', 'data' => null], 422);
        $user = User::where('email', $tokenData->email)->first();
        if (!$user) return response()->json(['statusCode' => 402, 'message' => 'Email not found', 'data' => null], 402);
        $user->password = Hash::make($request->password);
        $user->update();
        DB::table('password_resets')->where('email', $user->email)
            ->delete();
        return view('welcome');
    }
    public function resetpassword($token)
    {
        return view('reset-password', compact('token'));
    }
}
