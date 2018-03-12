<section class="main_section container">
      
<!--
      <div class="row">
      
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
-->
       <div class="jumbotron vertical-center">
           <div class="row">
            <div class="col-sm-6">
             <img src="./resources/images/title_2.jpg" alt="decoders_logo" class="scr" id="logo" style="width: 50%; height:100%; border-radius:10px;" >
            </div>
           </div>                  
           <br>
            <?php
    
            if(isset($_POST['submit'])){
            
               
               
                if($connection=mysqli_connect('localhost','root','','decoders')){
                    echo "<h1>we are connected</h1>";
                }else{
                    die("database connection failed ");
                }
            }

            ?>
     
           
           
            <form action="index.php" method="post">
              <div class="form-group">
                <label for="username">User name</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username"/>
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password">
              </div>
              <br>
              
              <button type="submit" class="btn btn-primary" style="width: 50%">Login</button>
            </form>           
       </div>
       
         
       
<!--
       </div>
       <div class="col-sm-4"></div>
       </div>
  
-->
         
          
  
</section