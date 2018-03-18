<?php
    session_start();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
   <link rel="icon" href="./resources/images/title.png">  
    
   <title>DeCoders</title>   

   <link rel="stylesheet" href="./css/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="./css/css/custom.css">	
    
     <title>DeCoders Admin</title>
</head>
<body class="body1">
    
    <!-- main section  -->
       
        <main class="bckg">
       
           <section class="main_section container">            

                <div class="container">
                    
                    <div class="signup-form col-sm-4 offset-sm-4">
                         
                          
                         <img src="./resources/images/title_2.jpg" alt="decoders_logo" class="scr" id="logo" style="width: 30%; height:70%; border-radius:10px;" >    
                         <hr>                         
                         <h4 class="signup text-muted">Sign Up</h4>         
                         <hr>
                          <?php                        
                        
                            if(isset($_POST['submit'])){
                                
                                $username=$_POST['username'];
                                $password=$_POST['password'];  
                                
                                
                                /*if(!preg_match('/[\/s\'^£$%&*()}{@#~?><>,|=+]/',$username)){*/
                                                                
                                
                                    if(!($username && $password))
                                        echo '<div class="alert alert-dismissible alert-danger fade show" role="alert">enter name and password
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></div>';
                                    else{
                                        
                                        if($connection=mysqli_connect('localhost','root','','decoders')){
                                            
                                            //escape the string escape sequence
                                            $username=mysqli_real_escape_string($connection,$username);
                                            $password=mysqli_real_escape_string($connection,$password);
                                            
                                            //here 10 indicates no. of times crypt function is to sun
                                            $hashFormat="$2y$10$";
                                            $salt="KLMNOPCBARQPZYXPOIUYRT";
                                            $hash_and_salt=$hashFormat . $salt;
                                            
                                            $encriptPass=crypt($password,$hash_and_salt);
                                            
                                            $query="insert into users values(null,'$username','$encriptPass')";
                                            
                                            $result=mysqli_query($connection,$query);   
                                            
                                            
                                        
                                            if(!$result){
                                                die('Query Failed'.mysqli_error());
                                            }else{
                                                echo '<div class="alert alert-dismissible alert-success fade show" role="alert">sign up success
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </div>';
                                                
                                                $_SESSION["username"]=$username;
                                                
                                                header("Refresh: 1.5; url=candidate.php");
                                            }
                                        }                                                                    
                                    }
                               // }else{
                                    
                                    //echo '<div class="alert alert-dismissible alert-danger fade show" role="alert">enter valid name(avoid special character)
                                      //        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></div>';    
                                    //echo $username;
                                    
                                                                   
                                    
                                }
                                                     
                             
                        ?>      
                         
                         <form action="admin.php" method="post">                                 
                            
                            <div class="form-group">
                                <label for="username" class="text-muted">Enter Name</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter username">                            
                            </div>       
                            
                              
                            <div class="form-group">
                                <label for="password" class="text-muted">Choose a password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">  
                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>                          
                            </div>
                            
                             <div class="form-group">
                                <input type="checkbox" name="rem"/> <small for="rem" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Remember Me</small> 
                             </div>
                            
                            <div class="form-group wrapper">
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="SignUp"/>                            
                            </div>
                        </form>
                    </div>                    
                </div>                    
             </section>                                            
    </main>
    <!-- main section   -->
    
    <!-- footer   -->
    <!-- footer   -->
    
    
    <?php require_once './components/scripts.php';?>
</body>
</html>