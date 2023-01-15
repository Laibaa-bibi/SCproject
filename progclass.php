<!DOCTYPE html>
<html>
<body>
    <head>
        <link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>


<?php
 require_once 'header.php';
 require_once 'faccade.php';

class progress_report
   {
     public $semester;
     public $gpa;
     public $course;
     public $attendence;
     public $program;
     public $reg_id;

     function set_semester($p) {
$this->program = $p;
}

function get_semester() {
return $this->program ;
}


function dbFaccade($p)
{
    $objfaccade = new faccade();
    $result = $objfaccade->get_report($p);
    return $result;
}

function view()
{

}
function add()
{

}
function update()
{
    
}


}

    $pr1=new progress_report();
    $pr1->set_semester($_POST['prog']);
    echo $pr1->dbFaccade($_POST['prog']);

require_once 'footer.php';
?>



</body>
</html>