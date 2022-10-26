@extends('layout.student')
<div class="hero3">
@section('content')


    <div class="sidebar">
        <div class="sidebar_container">
             <a href="{{route('student_profile')}}">
        <div class="sidebar_item">
                <i class="fas fa-th-large"></i>
                <p>Dashboard</p>
            </div>
        </a>

            <div class="sidebar_item">
                <i class="fas fa-book"></i>
                <a href="/student/web"  type="button" >Course</a>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-eye"></i>
                <p>Activities</p>
            </div>
            <div class="sidebar_item">
                <i class="far fa-calendar"></i>
                <p>Events</p>
            </div>
            <div class="sidebar_item">
                <i class="fas fa-users"></i>
                <p>Community</p>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-exclamation-circle"></i>
                <p>Help</p>
            </div>
            <div class="sidebar_item">
                <i class="fas fa-id-card"></i>
                <p>Profile</p>
            </div>
        </div>
    </div>

<<<<<<< HEAD
=======
</div>
>>>>>>> f4f6261bab23964db96370af4d8ffc9fabfa400e
    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
