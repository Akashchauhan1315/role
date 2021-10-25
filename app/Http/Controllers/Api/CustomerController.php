<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Resources\User as UserResource;

use App\Http\Resources\UserCollection;

class CustomerController extends Controller
{
    public $id;

    public function __construct(User $user){

        $this->user=$user;

        $this->users=$user->all();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/projects",
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */
    public function index()
    {
        $user=User::updateOrCreate( 
            [
               'id'   => 1,
            ],
            [
               'name'     => encrypt('ggakash'),
               'email'     => encrypt('akash@gmail.com'),
               
            ],
        );

        return new UserCollection($this->users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
        
        return new UserResource($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {

        $customer->update(['name' => 'akash']);

        return (new UserResource($customer,200));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    protected function WhereClause($id){

        return User::find($id);
    }

    public function logout(Request $request){
        
        $request->user()->token()->revoke();

        return response(array('status' => 1,'statuscode' => 200,'message' => 'logout Successfully','data' =>[]),200);
    }
}
