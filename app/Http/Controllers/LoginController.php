<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;

use Session;

use Validator;

use Auth;

use App\Http\Requests\Loginvalidation;

class LoginController extends Controller
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

        try{

            $validator = Validator::make($request->all(), [ 

                'email' => 'required|email',

                'password' => 'required',
            ]);

            if ($validator->fails()) {


                return response(array('success' => 0, 'statuscode' => 400, 'message' =>
                    $validator->errors()), 400);
            }


            if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){

                $user=Auth::user();

                $user['token'] =  $user->createToken('angular')->accessToken;

                return response(array('success' => 1,'statuscode' => 200, 'data' => $user,'message' => 'login successfully !'),200);
            }else
            {

                return response(array('success' =>0,'statuscode' => 400,'message' => 'Email and Password wrong'),400);

            }
            

        }catch(Expection $e){

            return response(array('success' =>0,'statuscode' => 400,'message' => $e->getMessage()),400);
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

    public function makePayment(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        \Stripe\Charge::create ([
                "amount" => 120 * 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Make payment and chill." 
        ]);
  
        Session::flash('success', 'Payment successfully made.');
          
        return back();
    }
}
