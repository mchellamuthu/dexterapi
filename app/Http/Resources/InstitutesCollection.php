<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class InstitutesCollection extends ResourceCollection
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
              '_id'=>$item->id,
              'name'=>$item->name,
              'address'=>$item->address,
              'city'=>$item->city,
              'state'=>$item->state,
              'country'=>$item->country,
              'users'=> new UsersCollection($item->users),

            ];
        });
    }


}
