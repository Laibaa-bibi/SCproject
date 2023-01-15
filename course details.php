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
    
h3 {
   border: 0px;
   margin: 0px;
}
    .Parent {
        display: flex;
        flex-direction: row;
    }

    .child1 {
        width: 70%;
        height: 100vh;
        text-align: center;
    }

    .child2 {
        width: 30%;
        padding: 30px;
            height: 100vh;
            margin: 30px 50px;
         
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
      
<nav>
   <h3 style="color:white; background-color:#3cb6d4; padding:8px; text-align:center; font-family:sans-serif; font-weight:bold;">
      DEPARTMENT OF COMPUTER SCIENCES, QAU.
   </h3>

<div class="Parent">
    <div class="child1">
        <br>
        <br>
        <div id="d1">
            <form style="text-align: center;" action="cclass.php" method="post">
               <p id="pp1">
         <h class="head" style="font-size: 25px;"><b>View other course's information</b></h>
         <br>
         <br>
         <br>
         <h class="head2" style="font-size: 20px;">Select the program</h>
         <br>
         
            <input type="radio" name="prog" value=1  checked><label><b>BS</b></label>
            <br>
            <input type="radio" name="prog" value=2 ><label><b>MS</b></label>
            <br>
            <input type="radio" name="prog" value=3 ><label><b>PHD</b></label>
            <br>
            <br>
         
             <br>
         
         <div id="list">
         
         </div>
          <input type="submit" style="font-size: 15px; background-color: #3cb6d4; color: white;padding: 10px 15px;  border-radius: 6px; border: none;">
         <br>
         <br>
         <br>
        <!-- <input type="button" id="btn" onclick="show()" value="View details">  -->
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