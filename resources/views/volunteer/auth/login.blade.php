@extends('layout.volunteer')
@section('content')
<div id="container1-1" class="container01">
  <h2>Volunteer Login</h2>  
    <div class="container1-2">    
        <form action="" method="POST">
          @csrf
        @error('email')
          <div class="text">
            {{$message}}
          </div>      
        @enderror
          <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input name="email" type="email" id="" class="" />
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
          <div class="form-group">
            <button type="submit"
              class="">Login</button>
              <p class="">New to Skills for wealth? <a href=""class=""><u>Register here</u></a></p>
            </div>
        </form>
    </div>
</div>
@endsection