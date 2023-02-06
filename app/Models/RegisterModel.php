<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Notifications\Notifiable;

class RegisterModel extends Model
{
    use HasFactory, Notifiable;
    protected $fillable=[
        'name','email','password','mobile','address'
    ];
    protected $table="registers";
}
