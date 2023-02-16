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
        header("location : form.php");
        $action ;
        function valid(){
            global $action;
            $action=$_SERVER["PHP_SELF"];
            if(!empty($_POST["name"])){ 
                $action = "validPage.php";
            }
        }

        // echo $action;
    ?>

    <form action="<?php valid(); echo $action; ?>" method="post" enctype="multipart/form-data">
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
