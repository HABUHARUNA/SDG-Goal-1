@extends('layout.app')
@section('content')

<div class="overall">

<div style="text-align: center">
    <h3 style="padding-top:20px">Partner with us</h3>
    <img src="{{asset('img/donation.png')}}" alt="img2" width="50%" height="280px">
</div>
    
<div class="partner" style="text-align: center;">
    <br>
    <p>You can partner with us by donating into our account:</p>
    <p>First Bank: 3094719209</p>
<br>
    <p>Thank You!</p>
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