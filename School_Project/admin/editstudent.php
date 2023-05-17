<?php require_once "template/header.php" ?>
<br><br><br><br>

<h1 style="text-align:center;color:purple;">Edit Old Student </h1>
<form class="col-12 g-3" action="student/update.php" method="post" enctype="multipart/form-data">
    
    <label for="id">Student ID</label>
    <input type="number" id="id" class="form-control" name="std_id">
    
    <label for="name">Student Name</label>
    <input type="text" id="name" class="form-control" name="std_name">
    
    <label for="std_image">Student Image</label>
    <input type="file" id="std_image" class="form-control" name="std_img">
    
    <label for="lname">Birth Date</label>
    <input type="date" id="lname" class="form-control" name="birth_date">
    
    <label for="std_status">Student Status</label>
    <div class="row">
        <input type="radio" name="std_status" id="available" value="Available">
        <label for="available">Available</label>
    </div>
    <div class="row">
        <input type="radio" name="std_status" id="notavailable" value="NotAvailable">
        <label for="notavailable">Not Available</label>
    </div>
    
    <label for="course" class="form-label">Course</label>
    <select id="course" class="form-control" name="course">
        <option value="Choose one" selected>Choose one</option>
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="PHP">PHP</option>
    </select>
    
    <br>
    <button type="submit" id="add">Edit</button>
    
</form>

<?php require_once "template/footer.php" ?>