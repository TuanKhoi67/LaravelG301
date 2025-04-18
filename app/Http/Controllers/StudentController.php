<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Hiển thị danh sách sinh viên
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Hiển thị form tạo sinh viên
    public function create()
    {
        return view('students.create');
    }

    // Lưu thông tin sinh viên mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gmail' => 'required|email',
            'student_code' => 'required|string|unique:students,student_code',
            'age' => 'required|integer|min:1',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Thêm sinh viên thành công!');
    }

    // Hiển thị form chỉnh sửa thông tin sinh viên
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Cập nhật thông tin sinh viên
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gmail' => 'required|email',
            'student_code' => 'required|string|unique:students,student_code,' . $student->id,
            'age' => 'required|integer|min:1',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Cập nhật sinh viên thành công!');
    }

    // Xóa sinh viên
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Xóa sinh viên thành công!');
    }
}
