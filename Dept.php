<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Department Website</title>
    
    <style>
    body, html {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .bgimg {
    /* The image used */
    background-image: "bglogin.jpg";
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
.topnav {
    margin: 0;
    border:0;
}
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: gainsboro;
  color: #333;
}

.active {
  background-color: #3196af;
}

/* Style The Dropdown Button */
.dropbtn {
  background-color: #333;
  color: white;
  padding: 14px 16px;
  text-align: center;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: fixed;
  background-color: #333;
  min-width: 160px;
  z-index: 99;
}

.dropdown-content a {
  color: white;
  font-size: 14px;
  padding: 8px 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px white;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color:gainsboro;
  color: black;
}
    </style>
</head>
<body>
        <h3 style="color:#3cb6d4; text-align:center; font-family:sans-serif; font-weight:bold; margin-bottom: 1px; border-bottom: 0;">
            QUAID - I - AZAM UNIVERSITY, ISLAMABAD.
         </h3>

        <h1 style="background-color:#3cb6d4; color:white; text-align:center; font-weight:bold; padding:15px; border-bottom:0;margin-bottom: 3px;">
            DEPARTMENT OF COMPUTER SCIENCES
         </h1> 
    <div class="topnav">
        <ul>
            <li><a class="active" href="#">About us</a></li>
            <li class="dropdown"><a class="dropbtn">Faculty</a>
                <div class="dropdown-content">
                    <a href="#">Dr.Rabeeh Ayaz Abbasi</a>
                    <a href="tprofile.php">Dr.Onaiza Maqbool</a>
                    <a href="#">Dr.Khalid Saleem</a>
                    <a href="#">Dr.Shuaib Kareem</a>
                    <a href="#">Dr.Ayyaz Hussain</a>
                    <a href="#">Dr.Muazzam Khattak</a>
                  </div>
            </li>
            <li><a href="notices.html">Latest Notices</a></li>
            <li><a href="#">Contact us</a></li>
            <li style="float:right"><a href="login1.php">Login</a></li>
          </ul>
     </div>
        <div style="float:left;">
            <img src="bglogin.jpg" height="250px" width="1330px"/>
         </div>

         <div>
           <h4 style="color:black; text-align:center; font-weight:bold; font-size:36px;margin-top:15px;margin-bottom: 0;">
               Why Computer Science?
            </h4>
            <p style="margin-left:15px; font-size:24px;color:rgb(94, 93, 93);">
                The most important aspect of computer science is problem solving, an essential skill for life. Students study the design, development and analysis of software and hardware used to solve problems in a variety of business, scientific and social contexts. Because computers solve problems to serve people, there is a significant human side to computer science as well.</p>
            
         </div>
        
</body>
</html>