@extends('layout.app')
@section('content')

<div class="hero">

    <div class="text">
       
            <div class="maintext">

                <div class="container">
                    <div class="learn">
                        <p>Learn</p>
                    </div>

                    <div class="skills">
                        <span>with us</span>
                        <span>to grow</span>
                        <span>to code</span>
                        <span>to earn</span>
                        <span>today</span>
                    </div>
                </div> 
            </div>
        
            <div class="text1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipi<br> 
                    aem segum detolor sit amet sit amet.
                </p>
                <button>See courses we offer</button>
            </div>
   </div>

        <div class="imgslide">
            <img src="{{asset('img/img.png')}}" alt="img1" class="slides">
            <img src="{{asset('img/img2.png')}}" alt="img2" class="slides">
            <img src="{{asset('img/img4.png')}}" alt="img3" class="slides">
        </div>

        <div class="goingupdots">
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
      setTimeout(carousel, 5000); // Change image every 2 seconds
    }
    </script>

@endsection