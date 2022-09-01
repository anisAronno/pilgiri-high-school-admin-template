<?php

 namespace App\Http\Controllers\Api\V1;

 use App\Http\Requests\StoreRegistrationRequest;

 use App\Http\Requests\UpdateRegistrationRequest;

 use App\Models\Registration;

 use App\Http\Controllers\BaseController;

 use App\Models\User;

 class RegistrationController extends BaseController
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Registration $registration, User $user)
     {
         return $user->registrations;
     }



     /**
      * Store a newly created resource in storage.
      *
      * @param  \App\Http\Requests\StoreRegistrationRequest  $request
      * @return \Illuminate\Http\Response
      */
     public function store(StoreRegistrationRequest $request, User $user)
     {
         return $user->registrations;
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Registration  $registration
      * @return \Illuminate\Http\Response
      */
     public function show(Registration $registration)
     {
        //
     }


     /**
      * Update the specified resource in storage.
      *
      * @param  \App\Http\Requests\UpdateRegistrationRequest  $request
      * @param  \App\Models\Registration  $registration
      * @return \Illuminate\Http\Response
      */
     public function update(UpdateRegistrationRequest $request, Registration $registration)
     {
        //
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Registration  $registration
      * @return \Illuminate\Http\Response
      */
     public function destroy(Registration $registration)
     {
        //
     }
 }
