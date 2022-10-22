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