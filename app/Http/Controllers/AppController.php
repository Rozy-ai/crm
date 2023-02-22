<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AppController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return App::all();
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
            'account_type' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'email | max:255',
            'postcode' => 'int | required',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $app = new App();
        if($_POST['account_type'] == 'personal'){
            $app->account_type = 0;
        }
        if($_POST['account_type'] == 'corporate'){
            $app->account_type = 1;
        }
        $app->first_name = $_POST['first_name'];
        $app->last_name = $_POST['last_name'];
        $app->account_name = $_POST['account_type'];
        $app->mobile_phone = $_POST['mobile_phone'];
        $app->email = $_POST['email'];
        $app->business_name = $_POST['business_name'];
        $app->vat_id = $_POST['vat_id'];
        $app->business_phone = $_POST['business_phone'];
        $app->country = $_POST['country'];
        $app->address1 = $_POST['address1'];
        $app->city = $_POST['city'];
        $app->state = $_POST['state'];
        $app->postcode = $_POST['postcode'];
        $app->postcode = $_POST['first_name'];
        $app->card_name = $_POST['card_name'];
        $app->iban_number = $_POST['iban_number'];

        
        $logo_path = $request->file('logo')->store('app', 'public');
        $app->logo         = $logo_path;

        if ($app->save()) {
            return back()->withSuccess('Data created successfully!');
        } else {
            return back()->withFail('Something is wrong!');
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
