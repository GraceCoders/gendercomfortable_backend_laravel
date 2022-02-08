<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;
use \Illuminate\Support\Facades\File;
use Illuminate\Contracts\Validation\Validator as ValidationErrors;


trait ValidationTrait
{
    /**
     * validateSignUp
     *
     * @param  array $arrayData
     * @return void
     */
    public function validateSignUp($arrayData)
    {
        if ($arrayData['user_type'] == config('usertype.admin')) {
            return ['email' => 'required|unique:users,email',
             'password' => 'required|min:8',
             'first_name' => 'required|min:4',
              'last_name' => 'required|min:4',
              'bio' => 'required',
               'user_type' => 'required',
                'profile_pic' => 'required',
                'device_type' => 'required',
                'device_token'=>   'required'
            ];
        }
        if ($arrayData['user_type'] == config('usertype.employee')) {
            return ['email' => 'required|unique:users,email', 'password' => 'required|min:8', 'first_name' => 'required|min:4', 'last_name' => 'required|min:4', 'voucher_code' => 'required', 'user_type' => 'required', 'profile_pic' => 'required',
            'device_type' => 'required',
            'device_token'=>   'required'];
        }
        if ($arrayData['user_type'] == config('usertype.company')) {
            return ['email' => 'required|unique:users,email', 'password' => 'required|min:8', 'username' => 'required', 'bio' => 'required', 'user_type' => 'required', 'profile_pic' => 'required', 'address' => 'required', 'latitude' => 'required', 'longitude' => 'required',
            'device_type' => 'required',
            'device_token'=>   'required'];
        }
    }
}
