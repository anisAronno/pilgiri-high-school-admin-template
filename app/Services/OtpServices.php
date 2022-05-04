<?php
namespace App\services;
use App\Models\Otp;

class OtpServices{

    protected $request;

    public function __construct()
    {
        $this->request = app('request');
    }

    public function otpGenerate($user)
    {
        $randomNumber = rand(1000, 9999);
        $result = Otp::updateOrCreate(
            [
                'phone' => $user->phone,
            ],
            [
                'phone' =>$user->phone,
                'email' =>$user->email,
                'otp' => $randomNumber,
            ]
        );

        return $result;
    }

}
