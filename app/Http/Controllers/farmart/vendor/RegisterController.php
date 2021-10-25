<?php

namespace App\Http\Controllers\farmart\vendor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;

use App\Models\User;

use App\Models\Shop;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmart.vendor.register');
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
        $this->validate($request,[

            'first_name' => 'required',

            'last_name' => 'required',

            'email' => 'required|unique:users',

            'password' => 'required',

            'confirm_password' => 'required|same:password',

            'shop_name' => 'required',

            'url' => 'required',

            'country' => 'required',

            'address' => 'required',

            'phone' => 'required',

        ]);



        try {

            $user=User::SignupProcess($request);

            $request['user_id']=$user->id;

            Shop::CreateAccount($request);

            Auth::login($user);

            return  redirect()->route('index')->with('message','Registration has been completed Successfully!');
            
        } catch (\Exception $e) {

            return  back()->with('error','Registration has not completed');
            
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
}
