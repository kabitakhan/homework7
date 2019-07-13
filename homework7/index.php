<?php 
include("batch40/controller/session.php");

?>
<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <title>home</title>
    
<style>
    #logo{
         top: 0px;
        left: 0px;
        height: 150px;
        width: 20%;
        background-color : aqua;
        position: absolute;
        border: blue solid 2px;
    }
    #banner{
         top: 0px;
        right: 0px;
        height: 150px;
        width: 80%;
        background-color : gold;
        position: absolute;
        border: blue solid 2px;
    }
    #manubar{
         top: 150px;
        left: 0px;
        height: 100px;
        width: 100%;
        background-color : palevioletred;
        position: absolute;
        border: blue solid 2px;
    }
    
     #leftbar{
         top: 250px;
        left: 0px;
        height: 300px;
        width: 20%;
        background-color : pink;
        position: absolute;
        border: blue solid 2px;
    }
     #cont{
         top: 250px;
        left:  20%;
        height: 300px;
        width: 60%;
        background-color : green;
        position: absolute;
        border: blue solid 2px;
    }
    #rightbar{
         top: 250px;
        left: 80%;
        height: 300px;
        width: 20%;
        background-color : pink;
        position: absolute;
        border: blue solid 2px;
        
    }
    #cont img{ height:200px; width:100%;}
    #footer{
         top: 550px;
        left: 0px;
        height: 100px;
        width: 100%;
        background-color : palegreen;
        position: absolute;
        border: blue solid 2px;
    }
    #topleft{
        top:0px;
        left:0px;
        height: 150px;
        width: 50%;
        background-color: aqua;
        position: absolute;
        border: blue solid 2px;
    }
     #topright{
        top:0px;
        right:0px;
        height: 150px;
        width: 50%;
        background-color: aqua;
        position: absolute;
        border: blue solid 2px;
    }
     #downleft{
        top:150px;
        left:0px;
        height: 150px;
        width: 50%;
        background-color: aqua;
        position: absolute;
        border: blue solid 2px;
    }
     #downright{
        top:150px;
        right:0px;
        height: 150px;
        width: 50%;
        background-color: aqua;
        position: absolute;
        border: blue solid 2px;
    }
    #footercont{
	height:100px;width:70%;background-color: paleturquoise;
	left:0px;top:0px;position:absolute;
	border: #0FF solid 2px; color:#F00;
}
    #icon{
	height:100px;width:30%;background-color: peachpuff;
	right:0px;top:0px;position:absolute;
	border: #0FF solid 2px; color:#F00;
}
#icon img{ height:50px; width:32%;	border-radius:70%;
}
    </style>
    </head>
<body>
<div id = "logo"><img src="img/img3.jpg" alt="" height="150px" width="100%"></div>
    
<div id = "banner"><img src="img/img00.jpg" alt="koala" height="150px" width="100%"></div>
<div id = "manubar"><marquee><P>WELL COME OUR FASHION HOUSE</P></marquee></div>
<div id = "leftbar"> <a href="index1.html"><p> Home </p><a href="index.html"><p> Contact </p></a><a href="index2.html"><p> About </p></a></a>
    <a href="model/stdform.php"><p>Signup</p></a> 
<p> <a href="view/signup.php">User Signup</a> </p>
<p> <a href="view/login.php">User Login</a> </p>


<p> <a href="model/alluserindex.php"> All user</a></p>
</div>
<div id = "cont">
    <div id = "topleft"><img src="img/baby5.jpg"></div>
    <div id = "topright"><img src="img/baby7.jpeg"></div>
    <div id = "downleft"><img src="img/baby8.jpg"></div>
    <div id = "downright"><img src="img/baby6.jpg"></div>
</div>
<div id = "rightbar"> </div>
<div id = "footer">
    <div id="footercont"><p> designe by KABITA </p>  </div>
    <div id="icon"><a href="index.html"><img src="img/Tulips.jpg" /></a>
    <img src="img/Tulips.jpg" />
    <img src="img/Tulips.jpg" /></div>
    
    </div>

        


</body>
</html>