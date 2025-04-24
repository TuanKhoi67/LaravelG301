@extends('layouts.app')

@section('title', 'Update Subject - Student Management')

@section('content')

<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Edit Subject</h2>
        <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Subject Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $subject->name }}" required>
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <textarea class="form-control" id="detail" name="detail" required>{{ $subject->detail }}</textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="Khoa học" {{ $subject->type == 'Khoa học' ? 'selected' : '' }}>Khoa học</option>
                    <option value="Tự nhiên" {{ $subject->type == 'Tự nhiên' ? 'selected' : '' }}>Tự nhiên</option>
                    <option value="Xã hội" {{ $subject->type == 'Xã hội' ? 'selected' : '' }}>Xã hội</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection