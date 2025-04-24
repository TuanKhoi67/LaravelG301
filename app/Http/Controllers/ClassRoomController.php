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
        $classrooms = ClassRoom::with(['subject', 'students'])->get();

        return view('Classrooms.index', compact('classrooms'));
    }

    // Show the form to create a new classroom
    public function create()
    {
        $subjects = Subject::all();
        $students = Student::all();
        return view('Classrooms.create', compact('subjects', 'students'));
    }

    // Store a new classroom
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject_id' => 'required|exists:subjects,id',
            'teacher_name' => 'required',
            'student_ids' => 'array|nullable',
            'student_ids.*' => 'exists:students,id',
        ]);

        $classroom = ClassRoom::create([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'teacher_name' => $request->teacher_name,
        ]);

        if ($request->has('student_ids')) {
            $classroom->students()->attach($request->student_ids);
        }

        return redirect()->route('Classrooms.index')->with('success', 'Lớp học đã được tạo.');
    }


    // Show the form to edit an existing classroom
    public function edit(ClassRoom $class)
    {
        $subjects = Subject::all();
        $students = Student::all();
        $selectedStudents = $class->students->pluck('id')->toArray();

        return view('Classrooms.edit', compact('class', 'subjects', 'students'));
    }

    public function update(Request $request, ClassRoom $class)
    {
        $request->validate([
            'name' => 'required',
            'subject_id' => 'required',
            'teacher_name' => 'required',
            'student_ids' => 'required|array', // sửa lại từ 'students'
        ]);
    
        // Cập nhật thông tin lớp
        $class->update([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'teacher_name' => $request->teacher_name,
        ]);
    
        // Gắn học sinh vào lớp - Lúc này class đã có ID
        $class->students()->sync($request->student_ids);
    
        return redirect()->route('Classrooms.index')->with('success', 'Cập nhật lớp học thành công');
    }
    
    public function destroy(ClassRoom $class)
    {
        $class->students()->detach();

        $class->delete();

        return redirect()->route('Classrooms.index')->with('success', 'Lớp học đã được xóa thành công.');
    }
       
}