<?php require_once "template/header.php" ?>
<br><br><br><br>

<div class="row text-center">
    <?php require_once "student/connection.php";
         require_once "../Student.php";
         $select = $connection->prepare('SELECT * FROM student');
         $select->execute();
         $students = $select->fetchAll(PDO::FETCH_CLASS, 'Student');
         foreach($students as $student){ 
             ?>
      <div class="col-sm-4">
        <img src="images/<?= $student->std_img ?>" class="img-rounded img_border_double" width="50%"/>
        <h3><?= $student->std_name ?></h3>
        <hr class="hr_5" />
        <h4>
            Student ID: <?= $student->id ?>  <br />
            Birth Date: <?= $student->birth_date ?><br/>
            Status   : <?= $student->std_status ?><br/>
            Course   : <?= $student->course ?>
        </h4>
    </div>
    <?php } ?>

    <!-- <div class="col-sm-4">
        <img src="https://i.pinimg.com/originals/52/b2/aa/52b2aaf2ac84b40b384dddb36efbb65a.jpg" class="img-rounded img_border_double" width="50%"/>
        <h3>ROXI CHI LUENA</h3>
        <hr class="hr_5" />
        <h4>
            Student ID: 1002002  <br />
            Birth Date: 1/1/2009<br/>
            Std Status: Available<br/>
            Std Course: HTML
        </h4>
    </div>
    <div class="col-sm-4">
        <img src="https://i.pinimg.com/originals/52/b2/aa/52b2aaf2ac84b40b384dddb36efbb65a.jpg" class="img-rounded img_border_double" width="50%"/>
        <h3>ROXI CHI LUENA</h3>
        <hr class="hr_5" />
        <h4>
            Student ID: 1002002  <br />
            Birth Date: 1/1/2009<br/>
            Status   : Available<br/>
            Course   : HTML
        </h4>
    </div> -->
</div>
               

<?php require_once "template/footer.php" ?>