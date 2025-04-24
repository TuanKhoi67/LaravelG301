@extends('layouts.app')

@section('title', 'About - Student Management')

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .section-title {
        color: #343a40;
    }

    .info-box {
        background-color: #f8f9fa;
        border-left: 5px solid #6610f2;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
    }
</style>
@endpush

@section('content')
<header class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold">About Our Student Management System</h1>
        <p class="lead">Empowering education through technology and simplicity</p>
    </div>
</header>

<main class="container py-5">
    <div class="text-center mb-5">
        <h2 class="section-title">Why Choose Our Platform?</h2>
        <p class="text-muted">We designed our system to make student data management seamless, insightful, and accessible to everyone in education.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="info-box">
                <h4>Comprehensive Student Profiles</h4>
                <p>Maintain detailed student records including personal info, academic achievements, attendance, and more.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <h4>Track Academic Progress</h4>
                <p>View real-time progress reports, grades, and performance analytics to help students and instructors stay on the same page.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <h4>Class & Subject Management</h4>
                <p>Assign students to classes, manage timetables, and organize subjects effortlessly with intuitive tools.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <h4>Boost Communication</h4>
                <p>Enable smooth communication between students, teachers, and administrators through built-in notifications and messaging.</p>
            </div>
        </div>
    </div>
</main>
@endsection
