<?php

namespace App\Http\Controllers\farmart\vendor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

Use App\Models\Product;

use App\Models\Category;

use Illuminate\Http\Response;


class ProductController extends Controller
{
    public function __construct(Category $category){

        $this->category=$category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('farmart.vendor.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=$this->category::all();

        return view('farmart.vendor.product.create',compact('category'));
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

            $minutes = 1;
            $response = new Response('Hello World');
            $response->withCookie(cookie('name', 'virat', $minutes));

            //dd($response);

            $value = $request->cookie('name');
            dd($value);

            //Cookie::make($name, $value, $minutes, $path, $domain,$secure, $httpOnly);
            
        } catch (\Exception $e) {

            dd('akash');

            return back()->with('error','Product not added.Pls try again. ');
            
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
