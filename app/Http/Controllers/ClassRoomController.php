<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    // Show all classrooms
    public function index()
    {
        $classRooms = ClassRoom::with(['subject', 'student'])->get();
        return view('classrooms.index', compact('classRooms'));
    }

    // Show the form to create a new classroom
    public function create()
    {
        $subjects = Subject::all();
        $students = Student::all();
        return view('classrooms.create', compact('subjects', 'students'));
    }

    // Store a new classroom
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject_id' => 'required',
            'teacher_name' => 'required',
            'students' => 'required|array',
        ]);

        $class = ClassRoom::create([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'teacher_name' => $request->teacher_name,
        ]);

        $class->students()->attach($request->students);

        return redirect()->route('classes.index')->with('success', 'Tạo lớp học thành công');
    }

    // Show the form to edit an existing classroom
    public function edit(ClassRoom $class)
    {
        $subjects = Subject::all();
        $students = Student::all();
        $selectedStudents = $class->students->pluck('id')->toArray();

        return view('classes.edit', compact('class', 'subjects', 'students', 'selectedStudents'));
    }

    public function update(Request $request, ClassRoom $class)
    {
        $request->validate([
            'name' => 'required',
            'subject_id' => 'required',
            'teacher_name' => 'required',
            'students' => 'required|array',
        ]);
    
        $class->update([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'teacher_name' => $request->teacher_name,
        ]);
    
        $class->students()->sync($request->students);
    
        return redirect()->route('classes.index')->with('success', 'Cập nhật lớp học thành công');
    }
    // Delete a classroom
    public function destroy(ClassRoom $class)
    {
        $class->students()->detach();
        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Xóa lớp học thành công');
    }    
}
