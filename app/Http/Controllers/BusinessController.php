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
        $this->validate($request, [
            'plan' => 'required | max:255',
            'service_name' => 'required|max:255',
            'email' => 'email | max:255',
            'postcode' => 'int | required',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'front' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        

        $business = new Business;
        $business->plan             = $request->plan;
        $business->service_name     = $request->service_name;
        $business->kt_ecommerce_add_product_tags = $request->kt_ecommerce_add_product_tags;
        $business->email            = $request->email;
        $business->website          = $request->website;
        $business->adress           = $request->adress;
        $business->city             = $request->city;
        $business->state_province   = $request->state_province;
        $business->postcode         = $request->postcode;

        $logo_path = $request->file('logo')->store('business', 'public');
        $business->logo         = $logo_path;

        $front_path = $request->file('front')->store('business', 'public');
        $business->front         = $front_path;

        if ($business->save()) {
            return back()->with('success', 'Data created successfully!');
        } else {
            return back()->with('error', 'Something is wrong!');
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
