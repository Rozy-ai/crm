<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;


class AppController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd('index');
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
        // var_dump('test'.$request->first_name);die;
        dd($request);

        $this->validate($request, [
            // 'account_type' => 'required | max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            // 'email' => 'email | max:255',
            // 'postcode' => 'int | required|max:255'
        ]);

        $app = new App();
        $app->first_name = $request->first_name;
        $app->last_name = $request->last_name;

        if ($app->save()) {
            return back()->with('success', 'Data created successfully!');
        } else {
            return back()->with('error', 'Something is wrong!');
        }

        // $business = new Business;
        // $business->plan             = $request->plan;
        // $business->service_name     = $request->service_name;
        // $business->kt_ecommerce_add_product_tags = $request->kt_ecommerce_add_product_tags;
        // $business->email            = $request->email;
        // $business->website          = $request->website;
        // $business->adress           = $request->adress;
        // $business->city             = $request->city;
        // $business->state_province   = $request->state_province;
        // $business->postcode         = $request->postcode;
        // if ($business->save()) {
        //     return back()->with('success', 'Data created successfully!');
        // } else {
        //     return back()->with('error', 'Something is wrong!');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('show');
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        dd('edit');
        dd($id);

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
