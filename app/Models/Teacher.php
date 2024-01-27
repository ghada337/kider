<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Classroom;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    //names from database
    protected $fillable = [
        'name',
        'designation',
        'facebook',
        'twitter',
        'instgram',
        'image',
        'published',
    ];

    public function classroom(){
        return $this->hasMany(Classroom::class);
    }
}