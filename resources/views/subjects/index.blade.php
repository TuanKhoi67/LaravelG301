@extends('layouts.app')

@section('title', 'List Subject - Student Management')

@section('content')

<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Danh sách Môn Học</h2>
        <a href="{{ route('subjects.create') }}" class="btn btn-primary mb-4">Thêm Mới</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Môn Học</th>
                    <th>Chi Tiết</th>
                    <th>Loại</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->detail }}</td>
                        <td>{{ $subject->type }}</td>
                        <td>
                            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
