<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
        <div class="container ">
            <a class="navbar-brand" href="#">DeCoders</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropdown1">
                         <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php /*echo ucfirst($_SESSION["username"])*/?>Log</a> 
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="logout.php">logout</a>
                              <a class="dropdown-item disable" href="#">More</a>
                         </div>                                       
                    </li>
                </ul> 
            </div>
    </div>
</nav>


 