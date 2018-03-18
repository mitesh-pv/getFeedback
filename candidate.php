<?php     
session_start();
//

$user=$_SESSION["username"];
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
        <?php require_once './components/navbar.php';?>
    </header>
    
    <?php
        $canName=$_GET["candidateName"];
        
         
        if($connection=mysqli_connect('localhost','root','','decoders')){
                 
                    $query="select * from candidate where   name='$canName'";
                    $select_row=mysqli_query($connection,$query);
            
                    while($row=mysqli_fetch_assoc($select_row)){
                        
                        $canUsn=$row['usn'];
                        $canEmail=$row['email'];
                        $canPhone=$row['phone'];
                        $canYear=$row['year'];
                        $canBranch=$row['branch'];
                        $canCGPA=$row['cgpa'];
                        $canImage=$row['image'];
                        $canResume=$row['resume'];
                    }
            
            
        }else{
            
            die('Query Failed'.mysqli_error());
        }
    
    ?>
        
    
    <!-- main section -->
    <main>    
       <secion >
            <div class="container can_main_section">
                   <h3>Candidate Profile</h3>    
                   <hr style="width: 100% left-padding: 20%">
                    <div class="row">                    
                        <div class="col-sm-8">
                            <div class="jumbotron">
                                
                                <table>
                                    <tr>
                                        <td class="text-bold">NAME: </td>
                                        <td><?php echo $canName?></td>                                        
                                    </tr>
                                    <tr>
                                        <td>USN: </td>
                                        <td><?php echo $canUsn?></td>                                        
                                    </tr>
                                   
                                    
                                </table>
                            
                            
                            </div>                            
                        </div>                                
                        <div class="col-sm-4" id="picId">
                           <div class="row"><h6>Candidate Picture</h6></div>
                           <div class="row canPic"><img class="img-responsive pic"  src="./resources/images/dp/<?php echo $canImage;?>" alt="mitesh" ></div>
                           <br>
                           <div class="row"><a class="btn btn-primary" href="./resources/resumes/<?php echo $canResume;?>" download>Download Resume</a></div>
                           
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