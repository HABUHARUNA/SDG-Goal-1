@extends('layout.app')
@section('content')
<div class="container1-1">
  <h2>Student Registration</h2>  
    <div class="container1-2">    
        <form action="{{Route('student.create')}}" method="POST">
          @csrf
        @error('firstname')
            <p class="text-danger">{{$message}}</p>    
        @enderror

          <div class="form-group">
            <label class="" >Firstname</label>
            <input name="firstname" type="text" class=""/>
          </div>
          
        @error('lastname')
          <div class="text-danger">
            {{$message}}
          </div>      
        @enderror

          <div class="form-group">
            <label class="" for="">Lastname</label>
            <input name="lastname" type="text" id="" class=""/>
          </div>
          
        @error('email')
          <div class="text">
            {{$message}}
          </div>      
        @enderror
          <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input name="email" type="email" id="" class="" />
          </div>
          
        @error('phone')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Phone Number</label>
            <input name="phone" type="number" id="" class="" />
          </div>
        

        @error('address')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Address</label>
            <input name="address" type="text" id="" class="" />
          </div>

        @error('profile_photo')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Profile Photo</label>
            <input name="" type="file" id="" class="" />
          </div>
          @error('password')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Password</label>
            <input name="password" type="password" id="" class="" />
          </div>
          @error('password_confirmation')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Confirm Password</label>
            <input name="password_confirmation" type="password" id="" class="" />
          </div>

          <div class="form-group">
            <button type="submit"
              class="">Register</button>
          
          
              <p class="">Have already an account? <a href=""
                class=""><u>Login here</u></a></p>
  
            </div>
        

         
        </form>
    </div>
</div>
    
@endsection