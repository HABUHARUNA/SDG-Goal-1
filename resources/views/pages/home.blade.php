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
                    Skills4Wealth is an organization that<br> 
                    is in pursuance of SDG Goal 1-(No Poverty).
                </p>
                <a href="/courses"><button class="offer">See courses we offer</button></a>
            </div>
   </div>
    </div>

<div class="facto">
    <div class="fact">
        <h2 style="padding:10px 0px 20px 60px; text-align:left">Poverty facts</h2>
        <div class="section2" id="fact">

            <div class="centre">
                <img src="{{asset('img/povfact1.jpg')}}" alt="" height="400vh" width="100%">
            </div>

            <div class="percent" style="text-align: center">
                <h1 style="font-size:120px; margin-top:15px;">26%</h1>
                    <p style="margin: 30px; text-align:justify; padding-top:30px; width: 70%">
                        "One prevailing cause of poverty is unemployment. For Plateau State, according <br> 
                        to the National Bureau of Statistics labour data for 4th Quarter 2020, the State  <br> 
                        has a total working-age population of 2,690,344 with less than half in the labour  <br> 
                        force. Of these, 26.59% are unemployed while 26.15% are under-employed. 
                    </p>
            </div>
            </div>
    </div>
</div>

        <div class="section3" style="text-align: center">
            <h3 style="padding-top: 50px">Necesary Actions</h3>
            <div class="inside">
                <img src="{{asset('img/action.png')}}" alt="img">
                <div class="actionplan">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore.</p>
                </div>
            
             </div>
        </div>

        <div class="goal">
            <h3>Our Goal</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatibus non 
                ducimus soluta ullam unde voluptatum error et voluptate reiciendis dolor sequi, 
                quo, cumque, quidem esse eum! Nostrum, quos voluptas?
            </p>
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