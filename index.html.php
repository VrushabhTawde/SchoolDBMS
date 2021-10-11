<!DOCTYPE html>
<html lang="en">
          <head>
          <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <title> Login Page</title>
                     
                    
                    
          </head>
          <body>
          <link rel="stylesheet" href="style.css">
          <!--img class='sch' src='sch.jpg' alt=''-->
                <center>
            
               <h3>SCHOOL LOGIN PAGE</h3><br> 
               <form method="POST" action="">
            

               <input type="submit" name="admin_login" value="Admin Login" required>
		       <input type="submit" name="student_login" value="Student Login" required>
                 
             </form>
            <?php
               

                    if(isset($_POST['admin_login'])){
                        header("Location: admin_login.php");
                    }
                    if(isset($_POST['student_login'])){
                        header("Location: student_login.php");
                    }  
            ?>
                   
                     </center>
              
            
            
                    
    </body>
</html>

