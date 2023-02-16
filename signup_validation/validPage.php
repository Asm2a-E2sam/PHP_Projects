<?php
    $rexe="/[a-zA-Z]{3,20}/";
    session_start();
    $name=$_SESSION['name'] ;
    $email=$_SESSION['email'];
    $room_no=$_SESSION['room_no'];
    $ext=$_SESSION['ext'];
    $img_src=$_SESSION['img_src'];            
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        img{
            border-radius:50%;
        }
        .btn{
            color:white !important;
            margin:20px;
        }
    </style>
  </head>
  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="<?=$img_src;?>" width="30" height="30" class="d-inline-block align-top" alt="">
    <?php if(preg_match($rexe,$name)){
        echo "Welcome ".$name;
    }else{
        echo "You Enter Invalid Name";
    }
    ?>
    </a>
    </nav>
    
    <?php 
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email : ".$email."<br>";   
            echo "------------------------"."<br>";
        }else{
            echo "You Enter Invalid Email <br>";
            echo "------------------------"."<br>";
        }

        echo "Room No : ".$room_no."<br>";  
        echo "------------------------"."<br>";

        echo "Ext : ".$ext."<br>";  
        echo "------------------------"."<br>";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
