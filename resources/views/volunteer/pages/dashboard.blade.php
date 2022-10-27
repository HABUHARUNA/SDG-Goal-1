@extends('layout.volunteer')
<div class="hero3"> 
@section('content')
<div class="voldashboard">



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

    <div class="form-group">
        <h3>Add course</h3>
        <form action="{{Route('add.course')}}" method="POST">
            @csrf
            <input type="text" name='course' placeholder="Course name">
            <input type="submit" value="Add course">
    `   </form>


    <div class="volposts">
        <h2>My Previous Posts</h2>
        <table>
            <tr>
            <th>Course</th>
            <th>Title</th>
            <th>Activity</th>
            <th>File</th>
            <th>Action</th>
            </tr>
    
            {{-- @foreach( ) --}}
            <tr>
                <td> x</td> 
                <td> x</td> 
                <td> x</td>
                <td> x </td>
            
                <td>
                    <a href="" class="actionbtn">Edit</a>
                    <a href="" class="actionbtn" id="actionbtn">Delete</a>
                </td>
           </tr>
    
            {{-- @endforeach --}}
        </table>
    </div>

</div>


</div>

  
    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
