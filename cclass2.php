<!DOCTYPE html>
<html>
<head>
   <style type="text/css">
       .h1{
        text-align: center;
    font-size: 23px;
       }
   </style>
</head>
<body>
<?php
$course_id=1;
 include ("dbConnect.php"); 
 $con = mysqli_connect("localhost", "root", "", "software",3306);
 $my_query="SELECT * FROM course where course_id='$course_id' ";
      
        
$result = mysqli_query($con, $my_query);
while($row=mysqli_fetch_assoc($result))
{
    echo "<h class='h1'>";
    echo "Course Code: <br>";
    echo $row['course_code'];
    echo "<br>Pre requisite course: <br>";
    echo $row['pre_req'];
    echo "<br>No. of students taking that course: <br>";
    echo $row['no_of_students'];
    echo "<br>Teacher's name: <br>";
    echo $row['Teacher'];
echo "</h>";
}


 ?>

</body>
</html>