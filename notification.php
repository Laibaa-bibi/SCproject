
<?php
include_once ("notifclass.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<title>Latest Notices</title>
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

table {
  width: 80%;
  border: 1px solid black;
  position: relative;
  left: 10%;
}

tr:nth-child(even) {
  background-color: #abdae68f;
}
th{
color: black;
background-color: #3cb6d4;
}

th, td {
	padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
 
  text-align: left;
  border-bottom: 1px solid #DDD;
  border: 1px solid black;
}


.b5{
  position: relative;
  left: 50%;
  font-size: 90%;
}

h3 {
	margin: 0;
	border: 0;
}


#navbar img {
            display: block;
            width: 300px;
           height: 200px;
            margin: auto;
  
        }
        #navbar {
            width: 100%;
            height: 50%;
            border: 3px solid white;
            border-radius: 15px;
        }
  
  .footer {
      position: fixed;
      left: 0;
      top: 75%;
      width: 100%;
      height: 200px;
      background-color: #3cb6d4;
      color: white;
      text-align: center;
    }
</style>

</head>

<body>
 <!-- <nav id="navbar">
	<div class="logoim">
            <img src="qau2.png">
        </div>
      </nav> -->
 
	<h3 style="color:white; background-color:#3cb6d4; padding:8px; text-align:center; font-family:sans-serif; font-weight:bold;">
		DEPARTMENT OF COMPUTER SCIENCES, QAU.
	 </h3>
<br>
<br>

<table id="view_labrecord">
      <tr>
          <th>Notif_id</th>
          <th>Subject</th>
          <th>Action</th>
        </tr>

        <?php
        $notification= new notification;
        $result = $notification->getdata();
        if($result)
        {
          // echo "hii";
        foreach($result as $row)
          {
            ?>
            
            <tr>
            <td><?= $row['notif_id'] ?></td>
            <td><?= $row['subject'] ?></td>
              <td><button onclick="document.location='notifimage.php'" style="font-size: 15px; background-color: white; color: blue;padding: 10px 15px;  border-color:#3cb6d4 ;border-radius: 6px; ">view</button></td> 
          </tr> 


          <?php 
          }
       }
       
        else
        {
          echo "no records";
        }
       
        ?>
       
        </table>

<div class="footer">
    <p
      style="color:white; background-color:#3cb6d4; padding:8px; margin-top: 2px; text-align:left; font-family:sans-serif; font-weight:bold;">
      View more here</p>
      <img src="qau icon.PNG" style="height:120px; border-radius:50%; float:right; margin-right: 50px;"/> 
    <div style="text-align: left; margin-top: 10px; padding-left: 15px;">
      <a href="http://qau.edu.pk/" style="color: white;">Quaid-i-Azam University Official Website</a>
      <br><br>
      <a href="https://www.facebook.com/QAUIslamabadofficial/" style="color:white;">QAU Official Facebook Page</a>
    </div>
</body>