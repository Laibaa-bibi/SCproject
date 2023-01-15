<!DOCTYPE html>
<html>
<head>
    <style>
    .s1{
        position: relative;
        left: 1%;
        border-radius: 78px;
      width: 20%;
      padding: 10px;  
      font-size: 17px;
    }
</style>
</head>
<body>


<?php
 
    include "dbConnect.php";
    // $my_query = 'SELECT * FROM course';
    // $result = mysqli_query($con, $my_query);

   class course
   {
     private $course_id;
     private $prog_id;
     private $course_title;
     private $credit_hrs;
     private $semester;
     private $program;


     function set_course($p) {
$this->program = $p;
}

function get_course() {
return $this->program ;
}


function dbFaccade($p)
{
    
        $prog_id=$p;
        //include "dbConnect.php";
        $con = mysqli_connect("localhost", "root", "", "software",3306);
       $my_query="SELECT * FROM course where prog_id='$prog_id' ";
      
        
$result = mysqli_query($con, $my_query);

echo "<select class='s1'>";
while($row=mysqli_fetch_assoc($result))
{
echo '<option>'.$row['course_title'].'</option>';

}
echo '</select>';
   
}

   function view()
{

}
function add_courses()
{

}
function update_courses()
{
    
} 

}


    $c1=new course();
    $c1->set_course($_POST['prog']);
    $c1->dbFaccade($_POST['prog']);

?>


<br>
<br>
<br>
<form action="cclass2.php" method="post">
 <input type="submit" style="font-size: 15px; background-color: #3cb6d4; color: white;padding: 10px 15px;  border-radius: 6px; border: none; position:relative; left:5%;">
</form>
</body>
</html>