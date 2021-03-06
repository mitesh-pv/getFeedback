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

</head>
<body class="body1">
  
   <!-- header of the page  -->
   <header>   
       <?php /*require_once './components/navbar.php';*/    ?>
   </header>
   <!-- header of the page  -->
   
   
   
  <!-- main section of the page  -->
    <main class="bckg">
       
           <section class="main_section container">            

                <div class="container">
                    
                    <div class="login-form col-sm-4 offset-sm-4">
                                                                
                        <img src="./resources/images/title_2.jpg" alt="decoders_logo" class="scr" id="logo" style="width: 30%; height:70%; border-radius:10px cursor: pointer;" >
                         <hr> 
                        
                        <?php
                        
                            if(isset($_POST['submit'])){
                                
                                $username=$_POST['username'];
                                $password=$_POST['password'];  
                                
                                if(!($username && $password))
                                    echo '<div class="alert alert-dismissible alert-danger fade show" role="alert">enter username and password
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></div>';
                                else{
                                    
                                    if($connection=mysqli_connect('localhost','root','','decoders')){
                                        
                                        //escape the string escape sequence
                                        $username=mysqli_real_escape_string($connection,$username);
                                        $password=mysqli_real_escape_string($connection,$password);
                                        
                                        $hashFormat="$2y$10$";
                                        $salt="KLMNOPCBARQPZYXPOIUYRT";
                                        $hash_and_salt=$hashFormat . $salt;
                                            
                                        $encriptPass=crypt($password,$hash_and_salt);
                                        
                                        
                                        $query="select * from users where username='$username' && password='$encriptPass'";
                                        $result=mysqli_query($connection,$query);
                                        $rowcount=mysqli_num_rows($result);
                                        
                                        if($rowcount){
                                            $_SESSION["username"]=$username;
                                            header('location: member.php');
                                        }else{
                                            echo '<div class="alert alert-dismissible alert-danger fade show" role="alert">username or password incorrect
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></div>';
                                        }                                            
                                        
                                    }                                  
                                    
                                }
                            }
                        
                   
                            
                        ?>                    
                        
                         <form action="index.php" method="post">
                            
                            <div class="form-group">
                                <label for="username" class="text-muted">User name</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter username">                            
                            </div>       
                            
                              
                            <div class="form-group">
                                <label for="password" class="text-muted">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">  
                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>                          
                            </div>
                            
                             <div class="form-group">
                                <input type="checkbox" name="rem"/> <small for="rem" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Remember Me</small> 
                             </div>
                            
                            <div class="form-group wrapper">
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login"/>                            
                            </div>
                        </form>
                        
                        <a href="admin.php" class="badge badge-secondary">Admin</a>
                        
                        
                    </div>                    
                </div>                    
             </section>            
                     
                       
                           
    </main>
   <!-- main section of the page  -->
   
   <!-- footer of the page  -->
   <footer>
       <?php /*require_once './components/footer.php';*/?>
   </footer>
   <!-- footer of the page  -->
   

<!--script files-->
<?php require_once './components/scripts.php'?>
        
</body>
</html>