<html>
<body>
	<head>
		<style type="text/css">
			body,
    html {
      height: 100%;
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .bgimg {
      background-image: "bglogin.jpg";
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    /* Add styles to the form container */
    .container {
      position: absolute;
      right: 0;
      margin-top: 3%;
      margin-right: 55px;
      max-width: 300px;
      padding: 15px;
      background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

   
    .btn {
      background-color: #3cb6d4;
      color: white;
      size: 20x;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .btn:hover {
      opacity: 1;
    }

    h3:hover {
      cursor: pointer;
    }

		</style>
	</head>
	<div>
    <h3 style="color:#3cb6d4; text-align:center; font-family:sans-serif; font-weight:bold;" href="https://qau.edu.pk/">
      QUAID E AZAM UNIVERSITY, ISLAMABAD.
    </h3>

    <h1 style="background-color:#3cb6d4; color:white; text-align:center; font-weight:bold; padding:15px;">
      DEPARTMENT OF COMPUTER SCIENCES
    </h1>
  </div>

   <div>
    <div style="float:left;">
      <img src="bglogin.jpg" height="450px" width="1330px" />
    </div>


	<div>
    			<form class="container" action="" method="post">
      <h2>Login</h2>

      <label for="email"><b>Email</b></label>
      <input id="email_address" type="text" onchange="validateE()" placeholder="Enter Email / Reg.No." name="email_address" autocomplete="off"
        maxlength="50" required>
      <label id="errorEmail"></label>
      <br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter your password" name="password" id="password" required>


      <input type="submit" value="Submit" name="submit" id="submit" style="font-size: 15px; background-color: #3cb6d4; color: white;padding: 9px 20px;  border-radius: 6px; border: none;">
    </form>


	</div>

	<?php
		session_start();
		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "software";

		$connection = mysqli_connect($host, $user, $password, $db);

		if (!$connection) {
  			die("Connection failed: " . mysqli_connect_error());
		}

		if(isset($_POST['submit'])){

    			$email_address = mysqli_real_escape_string($connection, $_POST['email_address']);
    			$password = mysqli_real_escape_string($connection, $_POST['password']);


    			if ($email_address != "" && $password != ""){

				
        			$query = "select count(*) as cntUser from student where email_address='".$email_address."' and password='".$password."'";


        			$result = mysqli_query($connection, $query);
        			$row = mysqli_fetch_array($result);
        			$count = $row['cntUser'];
        			if($count > 0){

            				$_SESSION['uname'] = $email_address;

					header('location:sprofile.php');
	    				//echo "You are logged in!";
	    				
        			}


            



        			 else 
               {
            				
$query = "select count(*) as cntUser from admin where email_address='".$email_address."' and password='".$password."'";

        			$result = mysqli_query($connection, $query);

        			$row = mysqli_fetch_array($result);

				
        			$count = $row['cntUser'];

        			if($count > 0){

            				$_SESSION['uname'] = $email_address;

					header('location:aprofile.php');
	    				//echo "You are logged in!";
	    				
              }
              
        			}


        			}

        			
    			}

		
	?>


	<script>

    function validEmail(email_address) {
      let atTheRateIndex = email_address.indexOf('@');
      let dotIndex = email_address.lastIndexOf('.');

      if (atTheRateIndex < 1 || (dotIndex - atTheRateIndex) < 2) {
        return false;
      }
      return true;
    }

    function validateE() {
      let email_address = document.getElementById("email_address").value;

      if (email_address.length == 0 || !validEmail(email_address)) {
        let errorEmail = document.getElementById("errorEmail");
        errorEmail.innerHTML = "Please enter valid E-mail";
        errorEmail.style.color = "red";
      }
      else {
        let errorEmail = document.getElementById("errorEmail");
        errorEmail.innerHTML = "";
        errorEmail.style.color = "";
      }
    }

  </script>
</body>
</html>