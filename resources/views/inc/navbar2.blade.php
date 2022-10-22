    
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" 
    style="background-color: hsl(192, 100%, 9%);">
<div class="container-fluid">
<a class="navbar-brand mx-5" href="/dashboard"><h1>{{session('name')}} dashboard</h1></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse d-flex" id="navbarNavAltMarkup">

<div class=" d-flex p-2">
<ul class="navbar-nav">
<div class="dropdown " style="margin-left:65em;">
<p class="dropbtn" >{{session('name')}}</p>
<div class="dropdown-content">
    <a href="{{Route('student.logout')}}">Logout</a>
</div>
</div>
</ul>
</div>
</div>

</div>
</div>
</nav>