<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    //names from database
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'flag',
    ];
}
