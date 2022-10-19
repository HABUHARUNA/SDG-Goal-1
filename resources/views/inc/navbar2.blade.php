    
    <nav class="navbar navbar-expand-lg bg-dark sticky-top navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand mx-5" href="/dashboard"><h1>[{{session('name')}}] dashboard</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex" id="navbarNavAltMarkup">
            
             <div class="nav-item mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="/student/web">Web Dev</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/student/baking">Baking</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/student/tailoring">Tailoring</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#">Edit Details</a>
                    </li>
                </ul>
            </div>
            <div class=" d-flex p-2">
                <ul class="navbar-nav">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                         [{{ session('name') }}]
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="/logout">logout</a></li>
                        </ul>
                      </div> 
                    
               </ul>
            </div>
              
          </div>
        </div>
      </nav>