<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'name', 
        'subject_id',
        'teacher_name',
    ];

    // Define the relationship with the Subject model
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Define the relationship with the Student model
    public function students()
{
    return $this->belongsToMany(Student::class, 'class_room_student');
}
}
