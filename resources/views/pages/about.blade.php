@extends('layout.app')
@section('content')
<div class="overall">

<div class="section1">

<div class="centre">
    <img src="{{asset('img/Centre.jpg')}}" alt="" height="400vh" width="100%">
</div>
<div class="about" style="text-align: center">
        <h2>Who We Are</h2>
        <p >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
            aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
            ndae et possimus sed repellendus dolorem veritatis.
        </p>
</div>
</div>

<div class="vision" style="text-align: center">
    <h2 style="padding-top: 20px;">Our Vision</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in doloremque consectetur,  <br> 
        aliquid illo quisquam numquam perspiciatis molestias reiciendis fugiat iure quam, eligendi recusa <br>
        ndae et possimus sed repellendus dolorem veritatis.
    </p>
    <ul>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
    </ul>
</div>


<h2 style="text-align: center; padding-top:50px; padding-bottom:50px;">Our Team</h2>
<div class="team">
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
</div>
<div class="team2">
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
</div>
<div class="team3">
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
    <div class="person">
        <img src="{{asset('img/img.png')}}" alt="jude">
        <p>Name: Jude</p>
    </div>
</div>


<div class="mainfooter">
    <div class="footer">
        <div class="line1"> 
            <img src={{asset('img/icon-location.svg')}} alt="location">
            <span>Rayfield</span> <br> <br>
            <img src={{asset('img/icon-phone.svg')}} alt="phone"><a href="tel:+1234-813-123-4557">+234-813-123-4557</a><br> <br>
            <img src={{asset('img/icon-email.svg')}} alt="email"><a href="mailto:info@skillsforwealth.org">info@skillsforwealth.org</a><br>
        </div>

        <div class="line2"  style="line-height: 2.5;">
            <a href="/about">About Us</a><br>
            <a href="#">What We Do</a><br> 
            <a href="/contact">Contact Us</a>
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