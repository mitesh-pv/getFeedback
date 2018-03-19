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
                          <form>
                            <div class="jumbotron box1" style="border-radius: 0px;">
                                  
                                  <div class="form-group row">
                                      <label for="staticEmail" class="text-muted col-sm-2 col-form-label"><h5 class="lead"><strong>USN&nbsp&nbsp:</strong></h5></label>
                                    <div class="col-sm-10">
                                        <h4 class="lead"><input type="text" readonly class=" form-control-plaintext" id="staticEmail" value="<?php echo $canUsn;?>"></h4>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="text-muted col-sm-2 col-form-label"><h5 class="lead"><strong>Year&nbsp&nbsp:</strong></h5></label>
                                    <div class="col-sm-10">
                                        <h4 class="lead"><input type="text" readonly class=" form-control-plaintext" id="staticEmail" value="<?php echo $canYear;?>"></h4>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="text-muted col-sm-2 col-form-label"><h5 class="lead"><strong>branch&nbsp&nbsp:</strong></h5></label>
                                    <div class="col-sm-10">
                                        <h4 class="lead"><input type="text" readonly class=" form-control-plaintext" id="staticEmail" value="<?php echo $canBranch;?>"></h4>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="text-muted col-sm-2 col-form-label"><h5 class="lead"><strong>CGPA&nbsp&nbsp:</strong></h5></label>
                                    <div class="col-sm-10">
                                        <h4 class="lead"><input type="text" readonly class=" form-control-plaintext" id="staticEmail" value="<?php echo $canCGPA;?>"></h4>
                                    </div>
                                  </div>                          
                            </div>   
                               <hr style="width: 100% left-padding: 20%">
                                  
                            </form>                           
                        </div>
                                          
<!--
                        <div class="col-sm-4" id="picId">
                           <div class="row"><h6>Candidate Picture</h6></div>
                           <div class="row canPic"><img class="img-responsive pic"  src="./resources/images/dp/<?php echo $canImage;?>" alt="mitesh" ></div>
                           <br>
                           <div class="row"><a class="btn btn-primary" href="./resources/resumes/<?php echo $canResume;?>" download>Download Resume</a></div> 
                            <span ><i class="icon-envelope icon-search"></i></span><a class="u-email" href="mailto:<?php echo $canEmail?>"><?php echo $canEmail?></a>
                           <svg class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z"></path></svg>
                        </div>                                         
-->
                   
                   <div class="card col-sm-4 box2">
                      
                       <div class="canPic"><img class="card-img-top" src="./resources/images/dp/<?php echo $canImage;?>" alt="<?php echo $canName;?>" style="padding-left: 10%; padding-top: 30px;"></div>
                      <div class="card-body">
                      
                        <hr>
                        <h5 class="card-title"><?php echo $canName;?></h5>
                        <span ><i class="icon-envelope icon-search"></i></span><a class="u-email" ></a>
                           <svg  for="mail" class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z"></path></svg>
                        <a class="card-text " id="mail" href="mailto: <?php echo $canEmail;?>">&nbsp&nbsp<?php echo $canEmail;?></a>
                        <div>
                            <a href="./resources/resumes/<?php echo $canResume;?>" download class="btn btn-primary" style="margin-top: 10px;">Download Resume</a>
                        </div>
                      </div>
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