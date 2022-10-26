@extends('layout.student')
@if ($students)
    @foreach ($students as $student)
    <div class="profile_pic">
        <img src="{{URL::asset('public/user/'.$student->profile_pic)}}" alt="pic" style="height:250px;width:250px; border-radius:50%;">
        <h3 style="color: rgb(255, 81, 0);">profile_pic</h3>
        <div class="studentData">
            <p style="color: rgb(255, 81, 0);"> <strong> NO#: </strong>{{$student->id}}</p> <br>
            <p style="color: rgb(255, 81, 0);"> <strong> First Name:</strong>  {{$student->firstname}}</p> <br>
            <p style="color: rgb(255, 81, 0);"> <strong> Last Name: </strong>{{$student->lastname}}</p> <br>
            <p style="color: rgb(255, 81, 0);"> <strong> Email: </strong>{{$student->email}}</p> <br>
            <p style="color: rgb(255, 81, 0);"> <strong> Address: </strong>{{$student->address}}</p> <br>
          </div>
      </div>
    @endforeach 

  
  @endif