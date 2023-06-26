<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\contacts;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact.index');
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
            empty($request->input('phone')) ||
            empty($request->input('email')) ||
            empty($request->input('message'))
        ){
            return redirect()->back()->with('msg_danger', 'Sorry, please check your inputs and try again!');
        }else {
              
            $contact = new contacts();
            $contact->name = $request->input('name');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $contact->save();

            $adminEmail = "hello@lvlcleaning.com";
            Mail::to($adminEmail)->send(new ContactMail($contact));

            return redirect()->back()->with('msg_success', 'Message received successfully, thank you');

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
