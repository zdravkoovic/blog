<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function success($data = [], $message = 'Success', $status = 200){
        return response()->json([
            'status' => $status,
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    public static function error($message = 'Something went wrong', $status = 400, $errors = [])
    {
        return response()->json([
            'status' => $status,
            'success' => false,
            'message' => $message,
            'errors' => $errors
        ], $status);
    }
}