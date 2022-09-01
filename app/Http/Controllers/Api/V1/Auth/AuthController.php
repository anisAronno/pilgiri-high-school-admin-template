<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends BaseController
{
    public function signin(UserStoreRequest $request, User $user)
    {
        try {
            $user= $user->create($request->only('name', 'email', 'password', 'phone'));
            $data['token'] =  $user->createToken('pkhsaa')-> accessToken;
            $data['user'] =  new UserResource($user);
            return $this->successResponse($data, 'Registration Successfull', Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('phone', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $data['token'] =  $user->createToken('pkhsaa')-> accessToken;
            $data['user'] =  new UserResource($user);
            return $this->successResponse($data, 'Login Successfull', Response::HTTP_OK);
        }

        return $this->errorResponse('error', 'Wrong password', Response::HTTP_UNAUTHORIZED);
    }


    public function logout(LogoutRequest $request)
    {
        $result= $request->user()->token()->revoke();

        if (!$result) {
            return $this->errorResponse('error', 'User not found', Response::HTTP_UNAUTHORIZED);
        }
        return response()->json(['success' => true, 'message' => 'Logout successfully']);
    }

    public function profile()
    {
        $user = Auth::user();
        if (!$user) {
            return $this->errorResponse('error', 'User not found', Response::HTTP_UNAUTHORIZED);
        }
        return (new UserResource($user))->additional([
            'message' => 'User profile'
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        try {
            $user->update($request->only('name', 'email', 'phone'));
            return (new UserResource($user))->additional([
                'message' => 'Profile updated successfully '
             ]);
        } catch (\Throwable $th) {
            return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNAUTHORIZED);
        }
    }

   /**
    * Password Update
    *
    * @param UserUpdateRequest $request
    * @param User $user
    * @return void
    */
    public function passwordUpdate(PasswordUpdateRequest $request, User $user)
    {
        try {
            if (Hash::check($request->Input('oldPassword'), $user->password)) {
                $user->update($request->only('password'));
                return $this->successResponse($user, 'User Updated', Response::HTTP_OK);
            } else {
                return $this->errorResponse('error', 'Old password is wrong', Response::HTTP_UNAUTHORIZED);
            }
        } catch (\Throwable $th) {
            return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNAUTHORIZED);
        }
    }
}
