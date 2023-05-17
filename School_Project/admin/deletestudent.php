<?php require_once "template/header.php" ?>
<br><br><br><br>

<h1 style="text-align:center;color:purple;">Delete Student </h1>
<form class="col-12 g-3" action="student/delete.php" method="get" enctype="multipart/form-data">
    
    <label for="id">Student ID</label>
    <input type="number" id="id" class="form-control" name="std_id">

    <br>
    <button type="submit" id="add">Delete</button>
    
</form>

<?php require_once "template/footer.php" ?>