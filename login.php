<?php
 session_start();
 
 $db=mysqli_connect("localhost","root","","register");
  if(isset($_POST['login']))
  {   
      $ruser=mysql_real_escape_string($_POST['ruser']);
      $rpass=mysql_real_escape_string($_POST['rpass']);
      
      //$rpass=md5($rpass);//hash password for security
      $sql="SELECT * FROM reg WHERE ruser='$ruser' AND rpass='$rpass'";
      $result=mysqli_query($db,$sql);
    
       if(mysqli_num_rows($result)==1)
       {  
        echo "<script>;
          window.location.href='http://localhost/wtproject/logout/DivTag2.html';
          </script>";
       }   
       else
       {
          echo "<script>alert('Invalid userID or password');
          window.location.href='http://localhost/wtproject/login.html';
          </script>";
       }
  }
?>