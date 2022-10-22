@extends('layout.app')
@section('content')
<div class="container1-1">
  <h2>volunteer Registration</h2>  
    <div class="container1-2">    
        <form action="{{Route('volunteer.create')}}" method="POST"  enctype="multipart/form-data">
          @csrf
        @error('firstname')
            <p class="text-danger">{{$message}}</p>    
        @enderror

          <div class="form-group">
            <label class="" >Firstname</label>
            <input name="firstname" type="text" class="" value="{{old('firstname')}}"/>
          </div>
          
        @error('lastname')
          <div class="text-danger">
            {{$message}}
          </div>      
        @enderror

          <div class="form-group">
            <label class="" for="">Lastname</label>
            <input name="lastname" type="text" id="" class=""  value="{{old('lastname')}}"/>
          </div>
          
        @error('email')
          <div class="text">
            {{$message}}
          </div>      
        @enderror
          <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input name="email" type="email" id="" class=""  value="{{old('email')}}"/>
          </div>
          
        @error('phone')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Phone Number</label>
            <input name="phone" type="number" id="" class=""  value="{{old('phone')}}"/>
          </div>
        

        @error('address')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Address</label>
            <input name="address" type="text" id="" class=""  value="{{old('address')}}"/>
          </div>

        @error('profile_photo')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror
          <div class="form-group">
            <label class="" for="">Profile Photo</label>
            <input name="profile_photo" type="file" id="" class="" />
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
              <p class="">Have already an account? <a href="/volunteer/login"
                class=""><u>Login here</u></a></p>
            </div>
        </form>
    </div>
</div>
    
@endsection