@extends('layouts.app')

@section('title', 'List Subject - Student Management')

@section('content')

<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">List of subject</h2>
        <a href="{{ route('subjects.create') }}" class="btn btn-primary mb-4">Add subject</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Detail</th>
                    <th>Type</th>
                    <th>Acction</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->detail }}</td>
                        <td>{{ $subject->type }}</td>
                        <td>
                            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this subject?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
