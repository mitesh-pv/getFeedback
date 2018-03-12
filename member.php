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
    <style type="text/css">
    
    .list-group-item:hover{
    -webkit-transition: all 0.5s ease-in-out;
    -webkit-transform: scale(1.1);
    background: #337AFF;
}
 
  </style>
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
    <br>
    <br>
    <br>
    <br>
<!--    <a href="logout.php">Logout</a>-->
<div class="container">
  <div class="row">
  <div class="col-4"></div>
  <div class="col-4">
  <div class="card">
  <div class="list-group">
    
    <?php
           if($connection=mysqli_connect('localhost','root','','decoders')){
                                        
               $query="select name from candidate";
                    $result=mysqli_query($connection,$query);
                    $rowcount=mysqli_num_rows($result);
                    

                    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?>

      <a href="#" class="list-group-item list-group-item-action ">
      <?php
        echo  $row["name"];
        ?>

        </a>
        <?php
    }
                  /*  while($fieldinfo=mysqli_fetch_field($result))
                    {
                     echo $fieldinfo["name"];
                    
                    }*/
                                        

            }
          }

    ?>  
   
<!--  require the script files  -->
   <?php require_once './components/scripts.php'?>
   <div class="col-4"></div>
   </div>
   </div>
   </div>
   </div>
   </div>
    
</body>
</html>