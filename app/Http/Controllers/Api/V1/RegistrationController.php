<?php

 namespace App\Http\Controllers\Api\V1;

 use App\Http\Requests\StoreRegistrationRequest;
 use App\Http\Requests\UpdateRegistrationRequest;
 use App\Models\Registration;
 use App\Http\Controllers\BaseController;
 use App\Http\Resources\RegistrationResource;
 use Symfony\Component\HttpFoundation\Response;

 class RegistrationController extends BaseController
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         try {
             return $result = auth()->user()->with('registrations')->get();
             return $this->successResponse(new RegistrationResource($result), 'All Registration data of this user ', Response::HTTP_OK);
         } catch (\Throwable $th) {
             return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
         }
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \App\Http\Requests\StoreRegistrationRequest  $request
      * @return \Illuminate\Http\Response
      */
     public function store(StoreRegistrationRequest $request)
     {
         try {
             $result = auth()->user()->registrations()->create($request->all());
             return $this->successResponse(new RegistrationResource($result), 'Registration completed successfully', Response::HTTP_CREATED);
         } catch (\Throwable $th) {
             return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
         }
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Registration  $registration
      * @return \Illuminate\Http\Response
      */
     public function show(Registration $registration)
     {
        $reg =  auth()
        ->user()
        ->registrations()
        ->where('id', $registration->id)
        ->firstOrFail();
         try {
             return $this->successResponse(new RegistrationResource($reg), "User's registered data", Response::HTTP_OK);
         } catch (\Throwable $th) {
             return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
         }
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
         $reg =  auth()
         ->user()
         ->registrations()
         ->where('id', $registration->id)
         ->firstOrFail();

         $reg->update($request->all());

         return (new RegistrationResource($reg))->additional([
            'message' => 'Registration updated successfully '
         ]);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Registration  $registration
      * @return \Illuminate\Http\Response
      */
     public function destroy(Registration $registration)
     {
        $reg =  auth()
        ->user()
        ->registrations()
        ->where('id', $registration->id)
        ->firstOrFail();

         try {
             return $this->successResponse($reg->delete(), 'Registration Deleted Successfully ', Response::HTTP_OK);
         } catch (\Throwable $th) {
             return $this->errorResponse('error', $th->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
         }
     }
 }
