@extends('layout.app')
@section('content')
<div class="overall">
    <br>
    <br>


<h2 style="text-align: center">Courses We Offer</h2>
<br>
<div class="courses">

    <div class="webdev">
        <img src="{{asset('img/webdev.jpg')}}" alt="webdev" height="180px" width="320px">
        <h3>Web Development</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
        <a href=""><button class="bttn">Register</button></a>
    </div>

    <div class="baking">
        <img src="{{asset('img/bakke.jpg')}}" alt="baking" height="180px" width="320px">
        <h3>Baking</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
       <a href=""><button class="bttn">Register</button></a>
    </div>
    <div class="fashion">
        <img src="{{asset('img/fashdesign.jpg')}}" alt="fashiondesign" height="180px" width="320px">
        <h3>Fashion Designing</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
        <a href=""><button class="bttn">Register</button></a>
    </div>

</div>







<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

@endsection