<?php
session_start();
require_once "connection.php";
    if($_SERVER['REQUEST_METHOD']=='POST'&& $_SESSION['username'] == "admin" ){

        
      $std_name = $_POST['std_name'];     
      $std_status = $_POST['std_status'];     
      $std_img = $_FILES['std_img'];     
      $birth_date = $_POST['birth_date'];
      $course = $_POST['course'];
      if(isset($std_name,$std_status,$birth_date)){
        if(!empty($std_img)){
            var_dump($std_img);
            $fileName = $std_img['name'];
            $fileTemp = $std_img['tmp_name'];
            $explode = explode('.', $fileName);
            $fileExt = end($explode);
            $allowedExt = ['jpg', 'png', 'jpeg'];
            if(in_array($fileExt, $allowedExt)){
                move_uploaded_file($fileTemp, '../images/'.$fileName);

                $insert = $connection->prepare('INSERT INTO student (std_name,std_img,birth_date,std_status,course) VALUES (?,?,?,?,?)');
                $insert->execute([$std_name,$fileName,$birth_date,$std_status,$course]);
                echo "connection done!";

                header("Location: ../index.php");
            }else{
                echo "Sorry! Not allowed to upload that file!";
            }
        }
      }else{
        header("location: index.php");
      } 
    }
else
{
    echo "NOT VALIED !!" ;
}
?>
