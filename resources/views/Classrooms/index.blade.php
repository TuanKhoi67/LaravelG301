@extends('layouts.app')

@section('title', 'Class list - Student Management')

@section('content')
<body>
    <div class="container py-4">
        <h2>Class list</h2>
        <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Create new class</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Class name</th>
                    <th>Course</th>
                    <th>Teacher</th>
                    <th>Student</th>
                    <th>Act</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $class)
                    <tr>
                        <td>{{ $class->name }}</td>
                        <td>{{ $class->subject->name }}</td>
                        <td>{{ $class->teacher_name }}</td>
                        <td>
                            <ul>
                                @foreach ($class->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">update</a>
                            <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chứ?')">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
