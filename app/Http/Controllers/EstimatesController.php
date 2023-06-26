<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\EstimateFormMail;
use App\Models\estimates;

class EstimatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('includes.estimate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('includes.estimate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         if (empty($request->input('time')) ||
             empty($request->input('phone')) ||
             empty($request->input('email')) ||
             empty($request->input('zip')) ||
             empty($request->input('rooms')) ||
             empty($request->input('baths')) ||
             empty($request->input('date'))

           ) {
            return redirect()->back()->with('msg_danger', 'Sorry! please check your inputs and try again!' );
         } else {

            //    $estimatedata = [

            //       'zip' => $request->input('zip'),
            //       'rooms' => $request->input('rooms'),
            //       'baths' => $request->input('baths'),
            //       'prop_date' => $request->input('date'),
            //       'prop_time' => $request->input('time'),
            //       'phone' => $request->input('phone'),
            //       'email' => $request->input('email'),
               
            //    ];



               $estimate = new estimates();
               $estimate->zip_code = $request->input('zip');
               $estimate->rooms = $request->input('rooms');
               $estimate->baths = $request->input('baths');
               $estimate->proposed_date = $request->input('date');
               $estimate->proposed_time = $request->input('time');
               $estimate->phone_number = $request->input('phone');
               $estimate->email_address = $request->input('email');
               $estimate->save();

               $adminEmail = "hello@lvlcleaning.com";
               Mail::to($adminEmail)->send(new EstimateFormMail($estimate));

               return redirect()->back()->with('msg_success', 'Request received, please allow us get back shortly through your provided contact details!');
         
         }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
