<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;


class BusinessController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business;
        $business->plan             = $request->plan;
        $business->service_name     = $request->service_name;
        $business->kt_ecommerce_add_product_tags = $request->kt_ecommerce_add_product_tags;
        $business->email             = $request->email;
        $business->website             = $request->website;
        $business->adress             = $request->adress;
        $business->city             = $request->city;
        $business->state_province             = $request->state_province;
        $business->postcode             = $request->postcode;
        $business->save();
        return back();
        
        
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
   public function edit(Request $request, $id)
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
