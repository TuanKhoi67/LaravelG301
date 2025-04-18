<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Allow mass-assignment for these fields
    protected $fillable = [
        'name',
        'gmail',
        'student_code',
        'age',
    ];
    public function classRooms()
{
    return $this->belongsToMany(ClassRoom::class, 'class_room_student');
}


}
