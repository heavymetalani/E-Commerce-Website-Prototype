<?php
     $dbc = mysqli_connect('localhost','root','','products');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="cartcss.css">
</head>
<body bgcolor=cyan>
    <div class="container">
        <h3 align="center">Shopping cart</h3><br><br>
        <?php
            $q = "SELECT * FROM kart";
            $r = mysqli_query($dbc,$q);
            $tot=0;
            if(mysqli_num_rows($r)>0)
            {
                while($row=mysqli_fetch_array($r))
                { 
                    
                    $tot=$tot+$row['price'];
                    ?>
        <div class="naam"><?php echo $row['prod']; ?></div>
        <div class="amount"><?php echo $row['price']; ?></div>
        <br>
                   <?php
                }
            }
        ?><br>
        <div class="total"><h3>Total</h3></div><br>
        <div class="totalamount"><?php echo $tot; ?></div><br><br><br><br><br>
        <h3 align="center"><div class="order"><form method="post" action="cart.php"><input type="submit" value="Confirm order" name="order"></form></div></h3>
    </div>
    <?php
        if(isset($_POST['order'])){
        echo "<script>alert('Your order has been placed.');
        window.location.href='http://localhost/wtproject/logout/DivTag2.html';
          </script>";
    }
    ?>
</body>
</html>