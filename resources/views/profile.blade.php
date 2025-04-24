@extends('layouts.app')

@section('title', 'Personal page - Student Management')

@section('content')

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h3>Personal information</h3>
                    </div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            @if(Auth::user()->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="150">
                            @else
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Avatar"
                                     class="rounded-circle shadow" width="120" height="120">
                            @endif
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Username:</strong> {{ Auth::user()->username }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
                            <li class="list-group-item"><strong>Phone number:</strong> {{ Auth::user()->phone ?? 'Chưa có' }}</li>
                            <li class="list-group-item"><strong>Date created:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</li>
                        </ul>

                        <div class="text-center mt-4">
                            <a href="/profile/edit" class="btn btn-success px-4">Update profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
