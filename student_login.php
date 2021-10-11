<!DOCTYPE html>
<html lang="en">
          <head>
          <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <title> STUDENT Login Page</title>
                    <link rel="stylesheet" href="style.css">
          </head>
          <body>
                
          <div class="container">
          <center>
               
                 <h2>STUDENT LOGIN</h2><br>
                 
               <form method="post" action="">
                     
                  Email Address:<input  type="text" name="email" required placeholder="Write email"><br><br>
                  Password:<input  type="text" name="password" required placeholder="Write Password">
                  <br><br>
                  <input type="submit" name="submit" value="Login">
                  <br>
                  </div>
             </form>
             
             <?php

                session_start();
               if(isset($_POST['submit'])){
                         
                           $connection = mysqli_connect("localhost","root","");
                           $db=mysqli_select_db($connection,"adminlogin1");
                           $query = "select * from students where email='$_POST[email]'";
                           $query_run=mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                            if ($row['email']==$_POST['email'])
                            {
                                      if($row['password']==$_POST['password'])
                                      {        
                                        $_SESSION['name'] =  $row['name'];
						                           	$_SESSION['email'] =  $row['email'];
							                             header("Location: student_dashboard.php");
                                                
                                      }
                                      else {
                                        echo "wrong password";
                                      }
                            }
                            else
                            {
                                      echo "wrong  email";
                              }       
                    }         
               }
             ?>
          </center>
                    
             
          </body>
</html>