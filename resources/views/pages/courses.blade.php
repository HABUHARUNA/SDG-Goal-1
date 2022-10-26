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
            We offer free tutorials on web development,  and easy access to mentorship, courses and learning materials to help you gain new digital skills because we understand the importance of having digital skills in this 21st century. Also take advantage of our free periodic tech bootcamps in rural areas so we can help jumpstart your career in tech. We firmly believe that living in a rural community should not be a barrier to learning technological skills.
        </p>
        <a href=""><button class="bttn">Register</button></a>
    </div>

    <div class="baking">
        <img src="{{asset('img/bakke.jpg')}}" alt="baking" height="180px" width="320px">
        <h3>Baking</h3>
        <p>
            The idea to use baked goods to fight poverty not only helps people living in under-resourced communities such as in Nigeria find jobs or start up a food business but also restores their self-confidence. Additionally, knowing our love for cooking in this part of the world, Skills4wealth provides access to new baking courses via our e-learning platform including courses on baking techniques, food startup guide, cooking seminars and lots more .
        </p>
       <a href=""><button class="bttn">Register</button></a>
    </div>
    <div class="fashion">
        <img src="{{asset('img/fashdesign.jpg')}}" alt="fashiondesign" height="180px" width="320px">
        <h3>Tailoring</h3>
        <p>
            Our platform provides supportive solutions to bring the fashion design industry closer to low income communities by training them on how to scale up and make fashion profitable. Additionally we offer courses on tailoring, textile production and recycling, thrift business e.t.c. 
        </p>
        <a href=""><button class="bttn">Register</button></a>
    </div>

</div>







<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

@endsection