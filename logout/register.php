<?php
 session_start();
 
 $db=mysqli_connect("localhost","root","","register");
  if(isset($_POST['register']))
  {  
      $fname=mysql_real_escape_string($_POST['fname']);
      $lname=mysql_real_escape_string($_POST['lname']);
      $mnum=mysql_real_escape_string($_POST['mnum']);
      $ruser=mysql_real_escape_string($_POST['ruser']);
      $rpass=mysql_real_escape_string($_POST['rpass']);
      $repass=mysql_real_escape_string($_POST['repass']);
      
      if($rpass == $repass)
      {
          $sql="INSERT INTO reg(fname,lname,mnum,ruser,rpass) VALUES('$fname','$lname','$mnum','$ruser','$rpass')";
          mysqli_query($db,$sql);
          echo "<script>
          alert('Thank you for joining us.');
          window.location.href='http://localhost/wtproject/Divtag2.html';
          </script>";
          
      }
      else
      {
          echo "<script>alert('Password do not match');window.location.href='http://localhost/wtproject/login.html';</script>";
          
          
      }
  }
?>