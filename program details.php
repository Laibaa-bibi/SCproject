<!DOCTYPE html>
<html>
<head>
<title>Qau</title>
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    .container {
  display: block;
  position: relative;
  padding-left: 50 10px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 45%;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
 }

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
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

<div class="Parent">
    <div class="child1">
        <br>
        <br>
        <div id="d1">
            <form style="text-align: center;" action="pclass.php" method="post">
               <p id="pp1">
         <h class="head" style="font-size: 25px;"><b>View Programs' information</b></h>
         <br>
         <br>
         <br>
         <h class="head2" style="font-size: 22px;">Select the program</h>
         <br>
         <br>
         
         
         <label class="container">BS
  <input type="radio" checked="checked" name="prog" value="1">
  <span class="checkmark"></span>
</label>
<label class="container">MS
  <input type="radio" name="prog" value="2">
  <span class="checkmark"></span>
</label>
<label class="container">PHD
  <input type="radio" name="prog" value="3">
  <span class="checkmark"></span>
</label>

             <br>
         <input type="submit" style="font-size: 15px; background-color: #3cb6d4; color: white;padding: 10px 15px;  border-radius: 6px; border: none;">
         </p>
         </form>
         </div>
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
</html>