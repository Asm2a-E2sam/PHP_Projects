<?php
class Student
{
    public $std_name;
    public $std_status;
    public $std_img;
    public $birth_date;
    public $course;
    public $status = true;

    public function notFound () {
        $this->status = false;
    }
}
?>
