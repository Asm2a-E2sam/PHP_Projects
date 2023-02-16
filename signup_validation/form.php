<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Form</title>
    <style>
        form{
            color : #563d7c;
            width: 400px;
            padding :20px;
            padding-right:0;
            background-color:lightgray;
        }
        input{
            color : #563d7c;
            width: 230px;
        }
        .btn{
            width: 70px;
            margin:10px;
        }
        .btns{
            display:flex;
            justify-content: center;
        }
    </style>
</head> 
<body>
    <?php 
        $action;    
        function valid(){
            global $action;
            if(!empty($_POST["name"])){ 
                $action = "validPage.php";
                $name = $_POST['name'];

            $email = $_POST['email'];
            $room_no = htmlspecialchars($_POST['room_no']);
            $ext = htmlspecialchars($_POST['ext']);
    
            $imageN= $_FILES['profile_pic']['name'];
            $tmpN= $_FILES['profile_pic']['tmp_name'];
            $size= $_FILES['profile_pic']['size'];
    
            $img_arr= explode('.','$imageN');
            $img_ex=end($img_arr);
            $en_name=md5($imageN);
            $img_src='images/'.$en_name.".".$img_ex;
            move_uploaded_file($tmpN, $img_src);
            
            session_start();
            $_SESSION['name']= $name ;
            $_SESSION['email']= $email ;
            $_SESSION['room_no']= $room_no ;
            $_SESSION['ext']= $ext ;
            $_SESSION['img_src']= $img_src ;
               
            header("Location: validPage.php");
            exit;
            }else{
                $action = $_SERVER["PHP_SELF"];    
            }
        }
        valid();
    ?>

    <form action="<?= $action;?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password</label>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Confirm Password</label>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Room No</label>
                </td>
                <td>
                    <input type="text" name="room_no" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Ext.</label>
                </td>
                <td>
                    <input type="text" name="ext" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Profile Picture</label>
                </td>
                <td>
                    <input type="file" name="profile_pic">
                </td>
            </tr>
        <br>
        </table>
        <br>
        <div class="btns">
        <input type="submit" value="Submit" class="btn">
        <input type="reset" value="Reset" class="btn">
        </div>
    </form>
    
</body>
</html>