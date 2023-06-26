<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\EstimateFormMail;

class estimates extends Model
{
    use HasFactory;

    public $fillable = ['zip_code', 'rooms', 'baths', 'proposed_date', 'proposed_time', 'phone', 'phone_number', 'email_address'];


}
