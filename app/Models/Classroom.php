<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Classroom extends Model
{
    use HasFactory;
    //names from database
    protected $fillable = [
        'name',
        'age',
        'time',
        'capacity',
        'cost',
        'image',
        'published',
        'teacher_id',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
