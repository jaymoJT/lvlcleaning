<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\EstimateFormMail;



class EstimateController extends Controller
{
    public function sendestimate(Request $request){
         $estimatedata = [
            'name' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' =>"Please give me a cleaning estimate for: ZIP: $request->input('zip'), ROOMS: $request->input('rooms'), BATHS: $request->input('baths'), DATE: $request->input('date'), TIME: $request->input('')"   
         
         ];

            Mail::to('hello@lvlcleaning.com')->send(new EstimateFormMail($data));
            return redirect()->back()->with('success', 'Estimate Request successful!');
    
    
    }
}
