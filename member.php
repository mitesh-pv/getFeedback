<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DeCoders</title>
    
    <link rel="icon" href="./resources/images/title.png">    
    <link rel="stylesheet" href="./css/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="./css/css/custom.css">	
</head>
<body>
  
  <header>
      
      <?php require_once './components/navbar.php'?>
  </header>
   
   <?php
        if($_SESSION["username"]==true)
            $user=$_SESSION["username"];
        else
            header('location: index.php');
      
        
      
    ?>
    
<!--    <a href="logout.php">Logout</a>-->

   
<!--  require the script files  -->
   <?php require_once './components/scripts.php'?>
    
</body>
</html>