<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use Validator;

class RegisterControoler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',

                'email' => 'required|string|email|unique:users',

                'phone' => 'required',

                'password' => 'required',
            ]);
            if ($validator->fails()) {

                return response(array('success' => 0, 'statuscode' => 400, 'message' =>
                    $validator->errors()), 400);
            }

            $user=User::SignupProcess($request);

            return response(array('success'=>1,'statuscode' =>200,'data' => $user,'message' =>'register Successfully'),200);
            

        }catch (\Exception $e) {
            return response(['success' => 0, 'statuscode' => 400, 'message' => $e->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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


    protected function Registervalidate(Request $request){

        try {

            // $validation=Validator::make($request->all(),[

            //     'name' => 'required|string',

            //     'email' => 'required|email'
            // ]);

            // $validation=$this->validate($request,[

            //     'name' => 'required|string',

            //     'email' => 'required|email'
            // ]);

            // if($validation->fails()){

            //     return response(array('success' => 0,'statuscode' => 400, 'message' =>  $validation->getMessageBag()->first()),400);
            // }
            
        } catch (Exception $e) {

            return response(['success' => 0,'statuscode' => 400,'message' => $e->getMessage()],400);
            
        }
    }
    
}
