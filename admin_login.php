<!DOCTYPE html>
<html lang="en">
          <head>
          <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <title> Admin Login Page</title>
                    <link rel="stylesheet" href="style.css">
          </head>
          <body>
                
          <div class="container">
          <center>
               
                 <h2>ADMIN LOGIN</h2><br>
               <form  action="" method="post">
                     
        Email Address:<input  type="text" name="email" required placeholder="Write email"><br>
                <br>
        Password:<input type="password" name="password" required placeholder="Write Password">
                  <br><br>
                <input type="submit" name="submit">
                  
             </form>
             </center>
            </div>
            
             <?php
               session_start();
             if(isset($_POST['submit']))
             {            
                           $connection = mysqli_connect("localhost","root","");
                           $db= mysqli_select_db($connection,'adminlogin1');
                           $query = " select * from adminlogin_id where email='$_POST[email]' ";
                           $query_run=mysqli_query($connection,$query);
                    
                           while($row = mysqli_fetch_assoc($query_run))

                          {
                              
                            if ($row['email']==$_POST['email']){
                                      if($row['password']==$_POST['password']){
                                        $_SESSION['name']=$row['name'];
                                        $_SESSION['email']=$row['email'];
                                              header ("Location: admin_dashboard.php");
                                                
                                      }
                                      else {
                                        echo "wrong password";
                                      }
                            }
                              
                    }         
               }
             ?>
             

            
            
             
            </body>
                                        
            

</html>