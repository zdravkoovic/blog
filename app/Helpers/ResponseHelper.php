<?php

namespace App\Helpers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ResponseHelper
{
    public static function success($data = [], $message = 'Success', $status = 200)
    {
        
        if ($data instanceof ResourceCollection || $data instanceof JsonResource) {
            $responseArray = $data->toResponse(request())->getData(true);
        }

        return response()->json([
            'status' => $status,
            'success' => true,
            'message' => $message,
            'meta' => $responseArray['meta'] ?? null,
            'links' => $responseArray['links'] ?? null,
            'data' => $data,
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