
<?php 
session_start();
if (!empty($_SESSION['username']) && $_SESSION['username'] == "admin") {
require_once "template/header.php"; ?>

<br><br><br><br>

<div>
<div class="row">
        
    </div>
    <div class="row">
        <h1 class="display-1 text-center">
            Wecome Admin
        </h1>
    </div>
</div>

<?php
    require_once "template/footer.php" ;
    }else {
        header("Location: login.php");
    }?>