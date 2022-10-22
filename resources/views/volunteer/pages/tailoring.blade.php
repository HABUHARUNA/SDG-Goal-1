@extends('layout.volunteer')
@section('content')
<div class="container1-1" id="activity-box" >
  <h2> activity post</h2>
  <div class="container1-2" id="">
    <form action="" method="POST">
      <div class="form-group">
        <label for="title" class="form-label">Activity Title</label>
        <input type="text" name="title"  >
      </div>
      <div class="form-group">
        <label>Upload Activity File</label>
        <input type="file" name="file">
      </div>
      <div class="form-group">
        <label for="description" >Details of Activity</label>
        <textarea name="description" id="" cols="100" rows="10"></textarea>
      </div>
       
      <div class="form-group">
        <button type="submit"
          class="">Submit</button>
        </div>
  </form>
   
  </div>
 
</div>
@endsection