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
            $arrayData = $request->all();
            $this->validateRequest($request->all(), $this->validateSignUp($arrayData));
            $arrayData['password'] = Hash::make($arrayData['password']);
            $arrayData['profile_pic'] = $this->uploadFile($arrayData['profile_pic'], config('foldertype.profile'));
            $user->fill($arrayData)->save();
            $userDetail = $this->loginUser($user);
            // $userDetail->sendEmailVerificationNotification();
            $this->sendSuccessResponse(trans("Messages.SignupSuccessful"), $userDetail->toArray());
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
            $this->validateRequest($request->all(), ['email' => 'required', 'password' => 'required', 'user_type' => 'required']);
            $userDetails = $user->where(['email' => $request->email, 'user_type' => $request->user_type])->first();
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
    public function userDetail($id, User $user)
    {
        try {
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
                $arrayData['profile_pic'] = $this->uploadFile($request->hasFile('profile_pic'), config('foldertype.profile'));
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
            if (!Hash::check($request->old_password, $userDetails->password)) {
                throw new Exception(trans("Messages.InvalidPassword"));
            }
            $user->where('id', Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);
            $this->sendSuccessResponse(trans("Messages.Success"));
        } catch (Exception $ex) {
            $this->sendErrorOutput($ex);
        }
    }
}