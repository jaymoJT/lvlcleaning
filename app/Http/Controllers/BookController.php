<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;
use App\Models\bookings;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        
        return view('booking.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         if(
            empty($request->input('name')) ||
            empty($request->input('email')) ||
            empty($request->input('phone')) ||
            empty($request->input('address')) ||
            empty($request->input('service')) ||
            empty($request->input('pref_date')) ||
            empty($request->input('pref_time')) ||
            empty($request->input('message'))
         ){
            return redirect()->back()->with('msg_danger', 'Sorry, please check your inputs and try again!');
        }else {

              $bookings = new bookings();
              $bookings->name = $request->input('name');
              $bookings->email = $request->input('email');
              $bookings->phone = $request->input('phone');
              $bookings->address = $request->input('address');
              $bookings->service = $request->input('service');
              $bookings->pref_date = $request->input('pref_date');
              $bookings->pref_time = $request->input('pref_time');
              $bookings->message = $request->input('message');

              $bookings->save();
              
              $adminEmail = "hello@lvlcleaning.com";
              Mail::to($adminEmail)->send(new BookingMail($bookings));

              return redirect()->back()->with('msg_success', 'Your booking has been received successfully! please allow us to get back to you shortly through your provided contact details');
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
