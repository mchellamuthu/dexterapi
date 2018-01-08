<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;


class ClassRoomsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $collection  = $this->collection->map(function ($item){
          return [
            '_id'=>$item->id,
            'name'=>$item->name,
            'section'=>$item->section,
            'institute'=>new InstituteResource($item->institute),
            
          ];
        });
    }
}
