<?php

namespace App\Http\Controllers\Farmart\Vendor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;

use App\Traits\AuthLogin;

class LoginController extends Controller
{
    use AuthLogin;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('farmart.vendor.login');
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
    // public function store(Request $request)
    // {
        
    //     $this->loginvalidate($request);

    //     try {

            

    //     } catch (\Exception $e) {

    //         return redirect()->back()->with(['message' => 'Something went wrong.Pls try again!']);
            
    //     }     
        
    // }

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

    protected function loginvalidate(Request $request)
    {
        $request->validate([

            'email' => 'required|email',

            'password' => 'required',
        ]);
    }

    public function is_email_verify(Request $request){

        return view('farmart.template.is_email');
    }
}
