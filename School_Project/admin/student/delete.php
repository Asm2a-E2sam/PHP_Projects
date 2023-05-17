<?php
session_start();
if (!empty($_SESSION['username']) && $_SESSION['username'] == "admin" ) {
if($_SERVER['REQUEST_METHOD']=='GET'&&!empty($_GET['std_id'])){
    require_once "connection.php";
    $delete=$connection->prepare('DELETE FROM student WHERE id=?');
    $delete->execute([$_GET['std_id']]);
    header("Location: ../index.php");
}
}
else
{
    echo "NOT VALID USER !!" ;
}
?>