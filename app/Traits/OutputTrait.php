<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;
use \Illuminate\Support\Facades\File;
use Illuminate\Contracts\Validation\Validator as ValidationErrors;


trait OutputTrait
{
    protected $validations = [];

    /**
     * sendSuccessResponse
     *
     * @param  string $message
     * @param  array $data
     * @return void
     */
    public function sendSuccessResponse(string $message, array $data = [], int $code = 200)
    {
        // $code = config("HttpCodes.success");

        $response = [
            'message' => $message,
            'statusCode' => $code,
            'data' => $data
        ];
        return (new Response($response, $code))->header('Content-type', 'application/json')->send();
    }

    /**
     * sendErrorOutput
     *
     * @param  mixed $messageOrException
     * @param  array $data
     * @param  int $code
     * @return void
     */
    public function sendErrorOutput($messageOrException, array $data = null, int $code = 400)
    {
        // $code = config("HttpCodes.fail");
        $message = $messageOrException;
        if (!is_string($messageOrException)) {
            $message = $messageOrException->getMessage();
        }

        if (isset($this->validations) && count($this->validations)) {
            $data = $this->validations;
        }
        $response = [
            'message' => $message ?? $data[0],
            'statusCode' => $code,
            'data' => $data ?? null
        ];
        return (new Response($response, $code))->header('Content-type', 'application/json')->send();
    }

    /**
     * validateRequest
     *
     * @param  array $requestData
     * @param  array $validationRules
     * @return bool
     */
    public function validateRequest(array $requestData, array $validationRules): bool
    {
        $validator = Validator::make($requestData, $validationRules);

        if ($validator->fails()) {
            $this->validations = $this->getErrorsForApi($validator);
            throw new Exception(trans("Messages.ValidationErrors"));
        }
        return true;
    }

    /**
     * getErrorsForApi
     *
     * @param  ValidationErrors $validator
     * @return array
     */
    public function getErrorsForApi(ValidationErrors $validator): array
    {
        $errors = $validator->errors()->toArray();
        $msgs = [];
        if (count($errors)) {
            foreach ($errors as $error) {
                if (count($error)) {
                    foreach ($error as $msg) {
                        $msgs[] = $msg;
                    }
                }
            }
        }
        return $msgs;
    }

    /**
     * uploadFile
     *
     * @param  mixed $profile_pic
     * @return void
     */
    public function uploadFile($profile_pic, $path)
    {
        Storage::makeDirectory($path);
        $path = Storage::disk('public')->put($path, $profile_pic);
        $filePath =  url('storage/' . $path);
        return $filePath;
    }
}
