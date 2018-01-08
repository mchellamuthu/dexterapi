<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class InstituteResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

          return [
            '_id'=>$this->id,
            'name'=>$this->name,
            'address'=>$this->address,
            'city'=>$this->city,
            'state'=>$this->state,
            'country'=>$this->country,
            'users'=> new UsersCollection($this->users),
          ];

    }
}
