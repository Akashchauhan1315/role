<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{

    public $statusCode;

    public function __construct($resource, $statusCode = 401)
    {
        parent::__construct($resource);

        $this->statusCode = $statusCode;
    }

    //public static $wrap = 'item';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'book' => $this->book,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

    }

    public function toResponse($request)
    {
        return parent::toResponse($request)->setStatusCode($this->statusCode);
    }

    public function with($request)
    {
        return ['success' => 1,'statuscode' => $this->statusCode,'message'=> 'You signed-up successfully!'];
    }
}
