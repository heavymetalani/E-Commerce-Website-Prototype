<?php
    include('cart.php');
    $dbc = mysqli_connect('localhost','root','','products');
     if(isset($_POST['1'])){
        $q1 = "INSERT INTO kart VALUES('Roland Digital Piano','424789')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Keyboards.html';
          </script>";
     }
    else if(isset($_POST['2'])){
        $q1 = "INSERT INTO kart VALUES('Casio CTK-860IN','11000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Keyboards.html';
          </script>";
    }
    else if(isset($_POST['3'])){
        $q1 = "INSERT INTO kart VALUES('Korg KRONOS','258419')" ;
        $r = mysqli_query($dbc,$q1);
         echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Keyboards.html';
          </script>";
    }
   else if(isset($_POST['4'])){
        $q1 = "INSERT INTO kart VALUES('Yamaha PSR-E253','8199')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Keyboards.html';
          </script>";
    }
   else if(isset($_POST['5'])){
        $q1 = "INSERT INTO kart VALUES('Ritmuller grand piano','532000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Keyboards.html';
          </script>";
    }
    else if(isset($_POST['6'])){
        $q1 = "INSERT INTO kart VALUES('Cort X Custom','258419')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Guitars.html';
          </script>";
    }
    else if(isset($_POST['7'])){
        $q1 = "INSERT INTO kart VALUES('Fender CD-60','50000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Guitars.html';
          </script>";
    }
     else if(isset($_POST['8'])){
        $q1 = "INSERT INTO kart VALUES('Washburn WD10CEB','19600')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Guitars.html';
          </script>";
    }
     else if(isset($_POST['9'])){
        $q1 = "INSERT INTO kart VALUES('Ibanez GSR320','17000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Guitars.html';
          </script>";
    }
     else if(isset($_POST['10'])){
        $q1 = "INSERT INTO kart VALUES('Epiphone Les Paul','32000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Guitars.html';
          </script>";
    }
     else if(isset($_POST['11'])){
        $q1 = "INSERT INTO kart VALUES('Mapex Voyager VR5254','36599')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Percussions.html';
          </script>";
    }
     else if(isset($_POST['12'])){
        $q1 = "INSERT INTO kart VALUES('Tama Drumset','25000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Percussions.html';
          </script>";
    }
     else if(isset($_POST['13'])){
        $q1 = "INSERT INTO kart VALUES('Student Tabla','8419')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Percussions.html';
          </script>";
    }
     else if(isset($_POST['14'])){
        $q1 = "INSERT INTO kart VALUES('Roland TD-4KP Electronic Drumkit','50175')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Percussions.html';
          </script>";
    }
     else if(isset($_POST['15'])){
        $q1 = "INSERT INTO kart VALUES('Pearl Bongo','12470')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Percussions.html';
          </script>";
    }
         else if(isset($_POST['16'])){
        $q1 = "INSERT INTO kart VALUES('Zoom G3','15299')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
           window.location.href='http://localhost/wtproject/logout/Sounds.html';
          </script>";
    }
     else if(isset($_POST['17'])){
        $q1 = "INSERT INTO kart VALUES('LINE 6 POD HD500','45429')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Sounds.html';
          </script>";
    }
     else if(isset($_POST['18'])){
        $q1 = "INSERT INTO kart VALUES('VOX TONELAB EX','36875')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Sounds.html';
          </script>";
    }
     else if(isset($_POST['19'])){
        $q1 = "INSERT INTO kart VALUES('Boss DS-1X Distortion Pedal','10649')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Sounds.html';
          </script>";
    }
     else if(isset($_POST['20'])){
        $q1 = "INSERT INTO kart VALUES('DIGITECH RP360','10764')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Sounds.html';
          </script>";
    }
     else if(isset($_POST['21'])){
        $q1 = "INSERT INTO kart VALUES('Boss GT-100','36999')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Sounds.html';
          </script>";
    }
    else if(isset($_POST['22'])){
        $q1 = "INSERT INTO kart VALUES('VOX MINI5','11500')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Amps.html';
          </script>";
    }
     else if(isset($_POST['23'])){
        $q1 = "INSERT INTO kart VALUES('Roland Micro Cube','10000')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Amps.html';
          </script>";
    }
     else if(isset($_POST['24'])){
        $q1 = "INSERT INTO kart VALUES('Hartke 115BXL','28209')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Amps.html';
          </script>";
    }
     else if(isset($_POST['25'])){
        $q1 = "INSERT INTO kart VALUES('LANEY LX20R','9549')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Amps.html';
          </script>";
    }
     else if(isset($_POST['26'])){
        $q1 = "INSERT INTO kart VALUES('Peavey 6505 Plus 112','50246')" ;
        $r = mysqli_query($dbc,$q1);
        echo "<script>alert('Added to cart successfully');
          window.location.href='http://localhost/wtproject/logout/Amps.html';
          </script>";
    }
    
        
?>