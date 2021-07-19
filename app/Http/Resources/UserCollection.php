<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public static $wrap = 'item';


    public function toArray($request)
    {
        return parent::toArray($request);
    }


    public function with($request)
    {
        return ['success' => 1,'statuscode' => 200,'message'=> 'You signed-up successfully!'];
    }
}
