@extends('layout.app')
@section('content')
<div class="overall">

<div class="hero">

    <div class="bg">
        <img src="{{asset('img/yellowcircle.png')}}" alt="" width="600px" height="400px" class="bgimg">
        <img src="{{asset('img/blue-circle.png')}}" alt="" width="600px" height="400px" class="bgimg">
        <img src="{{asset('img/greencircle.png')}}" alt="" width="600px" height="400px" class="bgimg" style="display: none">
        <img src="{{asset('img/greencircle.png')}}" alt="" width="600px" height="400px" class="bgimg">
    </div>

    <div class="imgslide">
        <img src="{{asset('img/tailoring.png')}}" alt="" class="slides" height="400" width="600px">
        <img src="{{asset('img/bakers.png')}}" alt="" class="slides" height="400px" width="600px">
        <img src="{{asset('img/coding.png')}}" alt="" class="slides" height="400px" width="600px">
        <img src="{{asset('img/coding.png')}}" alt="" class="slides" height="400px" width="600px">
    </div>

    <div class="shapes">
        <img src="{{asset('img/yellowtriangle.png')}}" alt="bluecircle" height="50px" width="50px">
        <img src="{{asset('img/blue-circle.png')}}" alt="bluecircle" height="30px" width="30px">
        <img src="{{asset('img/whitedots.png')}}" alt="bluecircle" height="105px" width="75px">
        <img src="{{asset('img/greencircle.png')}}" alt="bluecircle" height="35px" width="35px">
    </div>

    <div class="text">
            <div class="maintext">
                    <div class="container">
                                <div class="learn">
                                    <p>Learn</p>
                                </div>

                                <div class="skills">
                                    <span>with us</span>
                                    <span>to grow</span>
                                    <span>for free</span>
                                    <span>to earn</span>
                                    <span>today</span>
                                </div>
                    </div>
                    
            </div>
        
            <div class="text1" style="padding-top:20px;">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipi<br> 
                    aem segum detolor sit amet sit amet.
                </p>
                <a href="/courses"><button class="offer">See courses we offer</button></a>
            </div>
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
</div>




<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("slides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 8000); // Change image every 8 seconds
        }
        </script>

 <script>
    var myIndex = 0;
    xcarousel();
    
    function xcarousel() {
      var i;
      var x = document.getElementsByClassName("bgimg");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(xcarousel, 8000); // Change image every 8 seconds
    }
    </script>

    

@endsection