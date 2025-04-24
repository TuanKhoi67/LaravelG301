@extends('layouts.app')

@section('title', 'Add Subject - Student Management')

@section('content')

<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Thêm Môn Học Mới</h2>
        <form action="{{ route('subjects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên Môn Học</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Chi Tiết</label>
                <textarea class="form-control" id="detail" name="detail" required></textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Loại</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="Khoa học">Khoa học</option>
                    <option value="Tự nhiên">Tự nhiên</option>
                    <option value="Xã hội">Xã hội</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
</body>
@endsection
