<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use App\Http\Requests\StoreOtpRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends BaseController
{
    public function registration(UserStoreRequest $request, User $user)
    {
        $result= $user->create($request->only('name', 'phone', 'password'));
        return $this->successResponse($result, 'Registration Successfull', Response::HTTP_CREATED);
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('phone', 'password');

        if (Auth::attempt($credentials)) {
            return $this->successResponse(Auth::user(), 'Login Successfull', Response::HTTP_CREATED);
        }

        return $this->errorResponse('error', 'User Does not exist', Response::HTTP_UNPROCESSABLE_ENTITY);
    }


    public function logout(LogoutRequest $request)
    {
        $result= $request->user()->token()->revoke();

        if (!$result) {
            return $this->errorResponse('error', 'User not found', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(['success' => true, 'message' => 'Logout successfully']);
    }

    public function getLoggedUserDetails()
    {
        $user = Auth::user();
        if (!$user) {
            return $this->errorResponse('error', 'user not found', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $this->successResponse($user, 'User Updated', Response::HTTP_OK);
    }
}
