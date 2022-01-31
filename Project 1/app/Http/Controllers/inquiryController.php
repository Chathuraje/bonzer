<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class inquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquiries = Inquiry::all();
        return view('admin.inquiry.inquiry')->with('inquiries', $inquiries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inquiry.addnewinquiry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inquiry = new Inquiry();

        $inquiry->customerId = $request->customerId;
        $inquiry->customerName = $request->customerName;
        $inquiry->email = $request->email;
        $inquiry->contactNo = $request->contactNo;
        $inquiry->inquiryTitle = $request->inquiryTitle;
        $inquiry->inquiryType = $request->inquiryType;
        $inquiry->inquirySource = $request->inquirySource;
        $inquiry->tripType = $request->tripType;
        $inquiry->bookkingForSource = $request->bookkingForSource;
        $inquiry->startDate = $request->startDate;
        $inquiry->followupDate = $request->followupDate;
        $inquiry->duration = $request->duration;
        $inquiry->adults = $request->adults;
        $inquiry->child = $request->child;
        $inquiry->infants = $request->infants;
        $inquiry->budget = $request->budget;
        $inquiry->status = $request->status;
        $inquiry->other = $request->other;

        $inquiry->save();

        return redirect()->route('inquiry.index');
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
        $inquiry = inquiry::find($id);
        return view('admin.inquiry.editinquiry')->with('inquiry', $inquiry);
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
        $inquiry = inquiry::find($id);

        $inquiry->customerId = $request->customerId;
        $inquiry->customerName = $request->customerName;
        $inquiry->email = $request->email;
        $inquiry->contactNo = $request->contactNo;
        $inquiry->inquiryTitle = $request->inquiryTitle;
        $inquiry->inquiryType = $request->inquiryType;
        $inquiry->inquirySource = $request->inquirySource;
        $inquiry->tripType = $request->tripType;
        $inquiry->bookkingForSource = $request->bookkingForSource;
        $inquiry->startDate = $request->startDate;
        $inquiry->followupDate = $request->followupDate;
        $inquiry->duration = $request->duration;
        $inquiry->adults = $request->adults;
        $inquiry->child = $request->child;
        $inquiry->infants = $request->infants;
        $inquiry->budget = $request->budget;
        $inquiry->status = $request->status;
        $inquiry->other = $request->other;

        $inquiry->update();

        return redirect()->route('inquiry.index');
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
