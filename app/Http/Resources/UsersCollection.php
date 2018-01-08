<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return $this->collection->map(function ($item){
          return [
            '_id'=>(string)$item->id,
            'first_name'=>(string)$item->first_name,
            'last_name'=>(string)$item->last_name,
            'email'=>(string)$item->email,
            'role'=>(string)$item->role,
            'activated'=>(string)$item->activated_at,
            'joined'=>(string)$item->created_at,
          ];
      });
    }
}
