@extends('layout.app')
@section('content')
<br>
<br>

<h2 style="text-align: center">Courses We Offer</h2>
<br>
<div class="courses">

    <div class="webdev">
        <img src="{{asset('img/img.png')}}" alt="webdev">
        <h3>Web Development</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
        <a href=""><button class="bttn">Register</button></a>
    </div>

    <div class="baking">
        <img src="{{asset('img/img.png')}}" alt="baking">
        <h3>Baking</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
       <a href=""><button class="bttn">Register</button></a>
    </div>
    <div class="fashion">
        <img src="{{asset('img/img.png')}}" alt="fashiondesign">
        <h3>Fashion Designing</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
        <a href=""><button class="bttn">Register</button></a>
    </div>

</div>



<div class="mainfooter">
    <div class="footer">
        <div class="line1"> 
            <img src={{asset('img/icon-location.svg')}} alt="location">
            <span>Rayfield</span> <br> <br>
            <img src={{asset('img/icon-phone.svg')}} alt="phone"><a href="tel:+1-543-123-4567">+1-543-123-4567</a><br> <br>
            <img src={{asset('img/icon-email.svg')}} alt="email"><a href="mailto:example@huddle.com">example@huddle.com</a><br>
        </div>

        <div class="line2"  style="line-height: 2.5;">
            <a href="#">About Us</a><br>
            <a href="#">What We Do</a><br> 
            <a href="#">FAQ</a>
        </div>

        <div class="line3" style="line-height: 2.5;">
            <a href="#">Career</a><br>
            <a href="#">Blog</a><br>
            <a href="#">Contact Us</a>
        </div>
       
        <div class="line4">
            <div class="socials">
                <a href="www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="www.youtube.com"><ion-icon name="logo-youtube"></ion-icon></a>
            </div>
        <p style="padding-top: 150px; font-size: 12px;">Copyright 2022 Skills for Wealth. All rights reserved.</p>
        </div>
</div>
</div>




<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

@endsection