@extends('layout.app')
@section('content')
<div class="container1-1">
  <h2>Student Registration</h2>  
    <div class="container1-2">    
        <form action="{{Route('student.create')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="results">
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            @if (Session::get('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
        </div>
          <div class="form-group">
            <label class="" >Firstname</label>
            <input name="firstname" type="text" class="" value="{{old('firstname')}}"/>
            {{-- <span class="text-danger">@error('firstname') {{ $message }} @enderror</span> --}}
          </div>
          

          <div class="form-group">
            <label class="" for="">Lastname</label>
            <input name="lastname" type="text" id="" class="" value="{{old('lastname')}}"/>
            {{-- <span class="text-danger">@error('lastname') {{ $message }} @enderror</span> --}}
          </div>
          
          <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input name="email" type="email" id="" class="" value="{{old('email')}}"/>
            {{-- <span class="text-danger">@error('email') {{ $message }} @enderror</span> --}}
          </div>
          
          <div class="form-group">
            <label class="" for="">Phone Number</label>
            <input name="phone" type="number" id="" class="" value="{{old('phone')}}"/>
            {{-- <span class="text-danger">@error('phone') {{ $message }} @enderror</span> --}}
          </div>
          <div class="form-group">
            <label class="" for="">Address</label>
            <input name="address" type="text" id="" class="" value="{{old('address')}}"/>
            {{-- <span class="text-danger">@error('address') {{ $message }} @enderror</span> --}}
          </div>

        {{-- @error('profile_photo')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          <div class="form-group">
            <label class="" for="">Profile Photo</label>
            <input name="profile_photo" type="file" id="" class="" />
          </div>
          {{-- @error('password')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          <div class="form-group">
            <label class="" for="">Password</label>
            <input name="password" type="password" id="" class="" />
          </div>
          {{-- @error('password_confirmation')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          <div class="form-group">
            <label class="" for="">Confirm Password</label>
            <input name="password_confirmation" type="password" id="" class="" />
          </div>

          <div class="form-group">
            <button type="submit"
              class="">Register</button>
          
          
              <p class="">Have already an account? <a href="/student/login"
                class=""><u>Login here</u></a></p>
  
            </div>
        

         
        </form>
    </div>
</div>
    
@endsection