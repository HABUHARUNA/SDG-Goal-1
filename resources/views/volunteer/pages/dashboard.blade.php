@extends('layout.volunteer')
<div class="hero3"> 
@section('content')
<<<<<<< HEAD
<div class="form-group">
    <h3>Add course</h3>
    <form action="{{Route('add.course')}}" method="POST">
        @csrf
        <input type="text" name='course' placeholder="Course name">
        <input type="submit" value="Add course">
`   </form>
</div>
=======



>>>>>>> f4f6261bab23964db96370af4d8ffc9fabfa400e
    <div class="sidebar">
        <div class="sidebar_container">
            <div class="sidebar_item">
                <i class="fas fa-th-large"></i>
                <p>Dashboard</p>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-book"></i>
                <p>Courses</p>
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
