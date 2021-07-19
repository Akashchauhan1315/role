<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Resources\User as UserResource;

use App\Http\Resources\UserCollection;

class HomepageController extends Controller
{

	public function __construct(User $user){

    	$this->user=$user;
    }


    public function index(Request $request,User $user){


    	//return new UserCollection($user->all());

    	 return response(['success' => 1, 'statuscode' => 200, 'message' => __('You signed-up successfully!'), 'item' => ($user->all())], 200);

    }
}
