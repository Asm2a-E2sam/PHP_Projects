
    <?php require_once "template/header.php" ?>

    <?php require_once "template/courses.php" ?>

    <div class="our-faculty" id="faculty">
        <div class="overlay">
            <div class="container">
                <div class="row text-center row_width">
                    <div class="p_width">
                        <h1 class="hadding_pt"><span class="hadding_bt">FACULTY LIST </span></h1>
                    
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo.
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <?php require_once "connection.php";
                    require_once "Student.php";
                    $select = $connection->prepare('SELECT * FROM student');
                    $select->execute();
                    $students = $select->fetchAll(PDO::FETCH_CLASS, 'Student');
                    foreach($students as $student){ 
                        ?>
                <div class="col-sm-4">
                    <img src="admin/images/<?= $student->std_img ?>" class="img-rounded img_border_double" width="50%"/>
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
                </div>
               
            </div>
        </div>
    </div>

    <div class="container my-5" id="course">
        <div class="row text-center row_width">
            <div class="p_width">
        <h1 align="center"class="hadding_pt"><span class="hadding_bt">ABOUT US </span></h1>
        <p align="center">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.
        </p>
    </div>
</div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="https://thekalyanischool.com/wp-content/uploads/2021/05/DSC09652-min-min-2-scaled.jpg" width="100%" />
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="bg_gray1"><strong>350+</strong> Mangers </div>
                        <div class="bg_gray"><strong>250+</strong> TEACHERS </div>
                        <div class="bg_blue">
                            <h1><strong> 2500 + </strong></h1>
                            <hr />
                            <h1>Students</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "template/footer.php" ?>