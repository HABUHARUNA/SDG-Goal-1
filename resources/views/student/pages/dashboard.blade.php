@extends('layout.student')
<div class="hero3">
@section('content')


    <div class="sidebar">
        <div class="sidebar_container">
        <div class="sidebar_item">
                <i class="fas fa-th-large" id="dash"></i>
                <p>Dashboard</p>
            </div>

        <div class="sidebar_item">
            <i class="fas fa-book"></i>
            <p>Courses</p>
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


</div>
=======
</div>
<div class="studentDetails">
    <div class="pic">
        <p>
            <img src="{{URL::asset('public/user/'.Auth::user()->profile_pic)  }}" alt="pic" style="height:250px;width:250px; border-radius:50%;">
        </p>
    </div>
    <div class="content">
        <p> <strong>Firstname:</strong> {{Auth::user()->firstname}}  </p>
        <p> <strong>Lastname:</strong> {{Auth::user()->lastname}}   </p>
        <p> <strong>Email:</strong> {{Auth::user()->email}}</p>
        <p> <strong>Address:</strong> {{Auth::user()->address}}  </p>
    </div>
</div>
>>>>>>> 7a12a0956347e853254456d0cedb9d08ed7b9f30

    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
