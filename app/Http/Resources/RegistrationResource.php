<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "email" => $this->email,
            "picture" => $this->picture,
            "fathers_name" => $this->fathers_name,
            "mothers_name" => $this->mothers_name,
            "spouse_name" => $this->spouse_name,
            "blood_group" => $this->blood_group,
            "birth_date" => $this->birth_date,
            "nationality" => $this->nationality,
            "nid" => $this->nid,
            "ssc" => $this->ssc,
            "last_educational_qualification" => $this->last_educational_qualification,
            "last_educational_institution" => $this->last_educational_institution,
            "village_name" => $this->village_name,
            "post" => $this->post,
            "upazila" => $this->upazila,
            "district" => $this->district,
            "emergency_mobile" => $this->emergency_mobile,
            "whatsup" => $this->whatsup,
            "facebook" => $this->facebook,
            "guest" => $this->guest,
            "t_shirt" => $this->t_shirt,
            "own_fee" => $this->own_fee,
            "guest_fee" => $this->guest_fee,
            "total_fee" => $this->total_fee,
            "payment_details" => $this->payment_details,
            "transection_id" => $this->transection_id,
            "user" =>new UserResource($this->user),
            "status" => $this->status,
            "created_at" => $this->created_at->diffForHumans(),
            "updated_at" => $this->updated_at->diffForHumans(), 
        ];
    }
}
