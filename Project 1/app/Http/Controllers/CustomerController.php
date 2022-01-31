<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.customers')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.addnewcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->email = $request->email;
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->gender = $request->gender;
        $customer->birthDate = $request->birthDate;
        $customer->branch = $request->branch;
        $customer->mobileNumber = $request->mobileNumber;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->address = $request->address;
        $customer->postalCode = $request->postalCode;
        $customer->documentType = $request->documentType;
        $customer->docNumber = $request->docNumber;
        $customer->expireDate = $request->expireDate;
        $customer->nationalioty = $request->nationalioty;
        $customer->isuuingCountry = $request->isuuingCountry;
        $customer->others = $request->others;

        $customer->save();

        return redirect()->route('customer.index');
            
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
        $customer = Customer::find($id);
        return view('admin.customers.editcustomer')->with('customer', $customer);
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
        $customer = Customer::find($id);

        $customer->email = $request->email;
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->gender = $request->gender;
        $customer->birthDate = $request->birthDate;
        $customer->branch = $request->branch;
        $customer->mobileNumber = $request->mobileNumber;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->address = $request->address;
        $customer->postalCode = $request->postalCode;
        $customer->documentType = $request->documentType;
        $customer->docNumber = $request->docNumber;
        $customer->expireDate = $request->expireDate;
        $customer->nationalioty = $request->nationalioty;
        $customer->isuuingCountry = $request->isuuingCountry;
        $customer->others = $request->others;

        $customer->update();

        return redirect()->route('customer.index');
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
