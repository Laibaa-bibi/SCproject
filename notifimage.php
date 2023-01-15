<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$notif_id=1;
 include ("dbConnect.php"); 
 $con = mysqli_connect("localhost", "root", "", "software",3306);
 $my_query="SELECT * FROM notification where notif_id='$notif_id' ";
      
        
$result = mysqli_query($con, $my_query);
while($row=mysqli_fetch_assoc($result))
{
	//echo $row['image'];
	echo '<img id="mydp" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width="95%" height="1%" />';
}


 ?>

</body>
</html>