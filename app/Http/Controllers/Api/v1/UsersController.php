<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Exception;

/**
 * Traits
 */

use App\Traits\OutputTrait;
use App\Traits\ValidationTrait;

/**
 * Models
 * */

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    use OutputTrait, ValidationTrait;

    /**
     * signup
     *
     * @param  Request $request
     * @param  User $user
     * @return void
     */
    public function signUp(Request $request, User $user)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, [
                'email'          => 'required|email|unique:users',
                'device_type'          => 'required',
                'device_token'          => 'required',
                'password'               => 'required',
                'user_type'              => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(['statusCode' => 422, 'message' => getErrorAsString($validator->errors()), 'data' => null], 422);
            } else {
            $user = new User();
            $user->company_name =$request->company_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->bio = $request->bio;
            $user->user_type = $request->user_type;
            $user->username = $request->username;
            $user->address = $request->address;
            $user->device_token = $request->device_token;
            $user->device_type = $request->device_type;
            if (!empty($request->profilepic)) {
                $file = upload_file($request->profilepic, 'profile');
                $user->profilepic = $file;
            }
            $user->save();
            $this->sendSuccessResponse(trans("Messages.SignupSuccessful"), $user->toArray());
        }
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

    public function loginUser(User $user): User
    {
        $request = request();
        $userDetails = User::getUserDetails($user->id);
        $userDetails->token = $user->createToken(env("AUTH_TOKEN_NAME"))->plainTextToken;
        return $userDetails;
    }

    /**
     * login
     *
     * @param  Request $request
     * @param  User $user
     * @return void
     */
    public function logIn(Request $request, User $user)
    {
        try {
            $this->validateRequest($request->all(), ['email' => 'required', 'password' => 'required', 'device_token' => 'required','device_type'=>'required']);
            $userDetails = $user->where(['email' => $request->email])->first();
            if (!$userDetails) {
                throw new Exception(trans("Messages.UserDoesNotExists"));
            }
            $password = $request->input("password");
            if (!Hash::check($password, $userDetails->password)) {
                throw new Exception(trans("Messages.InvalidCredentials"));
            }
            $userDetails = $this->loginUser($userDetails);
            $this->sendSuccessResponse(trans("Messages.Success"), $userDetails->toArray());
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

    /**
     * forgotPassword
     *
     * @param  Request $request
     * @param  User $user
     * @return void
     */
    public function forgotPassword(Request $request, User $user)
    {
        try {
            $this->validateRequest($request->all(), ['email' => 'required']);
            $user = $user->where(['email' => $request->email])->first();
            if (!$user) {
                throw new Exception(trans("Messages.UserDoesNotExists"));
            }
            $status = Password::sendResetLink(
                $request->only('email')
            );
            $token = Password::getRepository()->create($user);
            // echo $token;
            $user->sendPasswordResetNotification($token);
            //sent email link to user
            // $userDetails = $this->loginUser($userDetails);
            // $this->sendSuccessResponse(trans("Messages.Success"), $user->toArray());
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }


    /**
     * userDetail
     *
     * @param  mixed $request
     * @param  mixed $user
     * @return void
     */
    public function userDetail(User $user)
    {
        try {
            $id = Auth::id();
            $getResponse = User::getUserDetails($id);
            if (!$getResponse) {
                throw new Exception(trans("Messages.InvalidUser"));
            }
            $this->sendSuccessResponse(trans("Messages.ListedSuccessfully"), $getResponse->toArray());
        } catch (Exception $exception) {
            $this->sendErrorOutput($exception);
        }
    }

    /**
     * updateProfile
     *
     * @param  Request $request
     * @param  User $user
     * @return void
     */
    public function updateProfile(Request $request, User $user)
    {
        try {
            $arrayData = $request->all();
            if ($request->hasFile('profile_pic')) {
                $file = upload_file($request->profilepic, 'profile');
                $arrayData['profile_pic'] = $file;
            }
            $user->where('id', Auth::user()->id)->update($arrayData);
            $this->sendSuccessResponse(trans("Messages.UpdatedSuccessfully"));
        } catch (Exception $exception) {
            $this->sendErrorOutput($exception);
        }
    }

    /**
     * changePassword
     *
     * @param  Request $request
     * @param  User $user
     * @return void
     */
    public function changePassword(Request $request, User $user)
    {
        try {
            $this->validateRequest($request->all(), ['current_password' => 'required', 'new_password' => 'min:8|required_with:confirm_password|same:confirm_password', 'confirm_password' => 'required|min:8']);
            $userDetails = $user->where('id', Auth::user()->id)->first();
            if (!Hash::check($request->old_password, $userDetails->password == false)) {
                throw new Exception(trans("Messages.InvalidPassword"));
            }
            $user->where('id', Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);
            $this->sendSuccessResponse(trans("Messages.Success"));
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }

    public function logout(Request $request)
    {
        $id = Auth::user()->id;
        if (Auth::check()) {
            User::where('id', $id)->update(['device_token' => NULL]);
            Auth::user()->tokens()->delete();
            return response()->json(['statusCode' => 200, 'message' => 'User logout successfully.'], 200);
        } else {
            return response()->json(['statusCode' => 400, 'message' => 'Already logout'], 400);
        }
    }
}
