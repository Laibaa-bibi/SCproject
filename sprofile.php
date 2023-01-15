<!DOCTYPE html>
<html>
<head>
<title>Qau</title>
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .body {
        padding: 0;
        margin: 0;
    }

    .Parent {
        display: flex;
        flex-direction: row;
    }

    .child1 {
        width: 70%;
        height: 100vh;
        position: relative;
        left: 5%;
    }

    .child2 {
            margin: 7px;
            position: relative;
        left: 7%;
            
        }

        h3 {
            margin:0;
            border:0;
        }


        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  height: 100%;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #3cb6d4;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
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
      </nav>  -->
	<h3 style="color:white; background-color:#3cb6d4; padding:8px; text-align:center; font-family:sans-serif; font-weight:bold;">
		DEPARTMENT OF COMPUTER SCIENCES, QAU.
	 </h3>

<img src="s.png" style="height: 150%; width: 30%; float: left; margin-right: 20px;">

<div class="Parent">

    <div class="child1">
        <p><h3>Name:</h3>XYZ</p>
        <p><h3>Reg No :</h3>04072013016</p>
    	<p><h3>Program :</h3>XYZ</p>
<p><h3>Semester :</h3>1</p>
<p><h3>cgpa :</h3>3.3</p>
<p><h3>Registered courses:</h3>
1. PSP <br>
2. DSA<br>
3. ADSS<br>
4. SC <br>
</p>
     </div>


<div class="child2" id="c2">
<ul>
  <li><a class="active">Profile</a></li>
  <li><a href="prog.php">View progress report</a></li>
  <li><a href="course details.php">View course details</a></li>
  <li><a href="program details.php">View program's information</a></li>
  <li><a href="notification.php">View notifications</a></li>
  <li><a href="notices.php">View general notices</a></li>
</ul>
</div>


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

