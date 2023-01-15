<style type="text/css">
    .h1f{
        font-size: 95%;
        text-align: center;
    }
    .p1f{
        padding: 50px;
        font-size: 170%;
        text-align: center;
    }
</style>


<?php

 
    include "dbConnect.php";
class faccade {

    public function get_report($p) {
$reg_id=$p;
        //include "dbConnect.php";
        $con = mysqli_connect("localhost", "root", "", "software",3306);
       $my_query="SELECT * FROM progressreport where reg_id='$reg_id' ";

$result = mysqli_query($con, $my_query);
      echo "<table>";
    echo "<tr>";
       echo '<th>'.'Subject'.'</th>';
    echo '<th>'.'GPA'.'</th>';
    echo '<th>'.'Attendence'.'</th>';
echo "</tr>";

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>";

echo '<td>'.$row['course'].'</td>';
echo '<td>'.$row['gpa'].'</td>';
echo '<td>'.$row['attendence'].'</td>';
echo "</tr>";

}
echo "</table>";
        
}


public function get_program_details($p)
{
$prog_id=$p;
        $con = mysqli_connect("localhost", "root", "", "software",3306);
       $my_query="SELECT * FROM program where prog_id='$prog_id' ";
      
        
$result = mysqli_query($con, $my_query);

echo "<p class='p1f'>";
while($row=mysqli_fetch_assoc($result))
{

echo '<h class="h1f"><b>Program Name:</b></h>';
echo '<br>'.$row['prog_name'].'</br>';
echo '<h class="h1f"><b>Program Duration:</b></h>';
echo '<br>'.$row['prog_duration'].' years</br>';
echo '<h class="h1f"><b>Age limit:</b></h>';
echo '<br>'.$row['age_limit'].'</br>';
}
echo "</p>";
}

}


?>

