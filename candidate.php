<?php     
//session_start();
//
//$user=$_SESSION["username"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Member</title>
    
    <link rel="stylesheet" href="./css/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="./css/css/custom.css">	
</head>
<body>
    
     <header>
        <?php require_once './components/navbar.php'?>
    </header>
    
    
    
    <!-- main section -->
    <main>    
       <secion >
            <div class="container can_main_section">
                
                   <h3>Candidate Profile</h3>    
                   <hr style="width: 100% left-padding: 20%">
                    <div class="row">                    
                            <div class="col-sm-8">
                                <div class="jumbotron"><h>hello</h></div>                            
                            </div>                                
                            <div class="col-sm-4" id="picId">
                                <div class="row"><h6>Candidate Picture</h6></div>
                               <div class="row"><img class="img-responsive pic" src="./resources/images/mitesh.jpg" alt="mitesh"></div>
                            </div>            
                              
                    </div>

            </div>
        </secion>
    </main>
    <!-- main section -->
      
           
                     
    <!-- footer -->
    <footer>      
       
       <?php /*require_once './components/footer.php';*/?>
        
    </footer>
    <!-- footer   -->
    
<!--scripts-->
<?php require_once './components/scripts.php'?>
<!--scripts-->
</body>
</html>