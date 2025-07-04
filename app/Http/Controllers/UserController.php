<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Services\UserService;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $data = $this->userService->getAll();
        return ResponseHelper::success($data);
    }

    public function show(int $id)
    {
        $data = $this->userService->findById($id);
        return $data ? ResponseHelper::success($data) : ResponseHelper::error("User not found", 404);
    }

    /**
     * 
     *@authenticated
     */
    public function me(Request $requset){

        $user = $requset->user();

        return ResponseHelper::success($user);
    }
}