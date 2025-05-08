<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *      title="API For Blog",
 *      version="1.0.0",
 * ),
 * @AO\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      in="header",
 *      name="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 *   ),
 */

abstract class Controller
{
    // protected function successResponse($data)
    // {
    //     return response()->json(['data' => $data]);
    // }
}