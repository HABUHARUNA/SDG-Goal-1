@extends('layout.volunteer')
@section('content')
<div class="container">
  <div class="card-body mx-auto shadow p-3 mb-5 bg-body" style="margin-top: 100px">
      <h2 class="text-uppercase text-center mb-5 bg-success p-2 text-white bg-opacity-75">Create an account</h2>
            
      <form action="" method="POST">
        @csrf
      @error('firstname')
          <p class="text-danger">{{$message}}</p>    
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example1cg">Firstname</label>
          <input name="firstname" type="text" id="form3Example1cg" class="form-control form-control-lg" />
        </div>
        
      @error('lastname')
        <div class="text-danger">
          {{$message}}
        </div>      
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3cg">Lastname</label>
          <input name="lastname" type="text" id="form3Example3cg" class="form-control form-control-lg" />
        </div>
        
      @error('email')
        <div class="text">
          {{$message}}
        </div>      
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example4cg">Email</label>
          <input name="email" type="email" id="form3Example4cg" class="form-control form-control-lg" />
        </div>
        
      @error('phone')
        <div class="text-danger">
         {{$message}}
        </div>     
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example4cdg">Phone Number</label>
          <input name="phone" type="number" id="form3Example4cdg" class="form-control form-control-lg" />
        </div>
      @error('password')
        <div class="text-danger">
         {{$message}}
        </div>     
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example4cdg">Password</label>
          <input name="password" type="password" id="form3Example4cdg" class="form-control form-control-lg" />
        </div>

      @error('address')
        <div class="text-danger">
         {{$message}}
        </div>     
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example4cdg">Address</label>
          <input name="address" type="text" id="form3Example4cdg" class="form-control form-control-lg" />
        </div>

      @error('profile_photo')
        <div class="text-danger">
         {{$message}}
        </div>     
      @enderror
        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example4cdg">Profile Photo</label>
          <input name="profile_photo" type="file" id="form3Example4cdg" class="form-control form-control-lg" />
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit"
            class="btn btn-outline-dark btn-lg px-5">Register</button>
        </div>
      

        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
            class="fw-bold text-body"><u>Login here</u></a></p>

      </form>
  </div>
</div>
    
@endsection