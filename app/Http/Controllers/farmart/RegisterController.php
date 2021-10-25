<?php

namespace App\Http\Controllers\farmart;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;

use App\Models\User;

use App\Traits\Google;

class RegisterController extends Controller
{
    use Google;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmart.register');
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

        ]);

        //$this->LoginwithGoogle($request);

        try {

            $user=User::SignupProcess($request);

            if($user){
                
                Auth::login($user);

                return redirect()->route('index')->with('message','Registration Successfully !');
                
            }else
            {
                return back()->with('error','Account can not Created!');
            }
            
        } catch (\Exception $e) {
            
            return back()->with('error','Some Went Wrong!');
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
