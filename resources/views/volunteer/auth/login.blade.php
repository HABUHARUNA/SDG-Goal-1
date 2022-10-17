@extends('layout.volunteer')
@section('content')
<div class="container mask d-flex">
  <div class="card-body mx-auto shadow p-3 mb-5 bg-body" style="margin-top: 100px">
      <form action="" method="POST">
          <div class="mb-md-5 mt-md-4 pb-5">

            <h2 class="text-uppercase text-center mb-5 bg-success p-2 text-white bg-opacity-75">Login</h2>
            <p class="text-white-50 mb-5 text-center">Please enter your login and password!</p>

            @error('email')
              <div class="text-danger">
                {{$message}}
              </div>    
            @enderror
            <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>
              <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
            </div>
            @error('password')
              <div class="text-danger">
                {{$message}}
              </div>    
            @enderror
            <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
              <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

            <div class="d-flex justify-content-center">
              <button type="submit"
                class="btn btn-outline-dark btn-lg px-5">Login</button>
            </div>

          </div>

          <div>
            <p class="mb-0">Don't have an account? <a href="" class="text-white-50 fw-bold">Sign Up</a>
            </p>
          </div>
        </form>
  </div>
</div>    
@endsection