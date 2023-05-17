<?php
session_start();
require_once "template/header.php";
?>
<br><br><br><br>
<?php if (empty($_SESSION['username'])){
?>
    <div class="my-form" style="background-color:lightgray;">
        <h1 style="color:purple;">Login Form</h1>
        <form  method="post">

            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control fc" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-light mt-3 mb-3 btn1">LOGIN</button>
        </form>
<?php
        if (!empty($_POST['username']) && !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == 'admin' && $password == '123456') {
                $_SESSION['username'] = $username;
                echo "<script>window.location.href='index.php';</script>";
            }elseif ($username == 'user' && $password == '123456') {
                $_SESSION['username'] = $username;
                echo "<script>window.location.href='../index.php';</script>";
            }
            else {
                echo "<p style='color:red;'> wrong user name or password </p>";
            }
        }
    }?>
</div>

<?php require_once "template/footer.php";
?>