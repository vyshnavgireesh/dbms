﻿<?php
  session_start();
?>

<!DOCTYPE html>
<head>
<title>CHRIST UNIVERSITY_LIBRARY</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/4/48/This_is_the_graphical_mascot_of_Christ_University,_Bangalore.png">
</head>
<style>
body
{
	background-color:#EEEEEE;
}
#heading
{
	#heading { color: #FFFFFF; }
}
span.highlight {
    background-color: white;
}
.top-bar {
    height: 35px;
    width: 100%;
    padding-top: 5px;
    background-color: #1111;
}
.search-container {
    max-width: 1000px;
    margin: auto;
    padding-right: 10px;
}
.search {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 7px;
    width: 90px;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    transition: all .5s ease;
    float: right;
}
.search:focus {
    width: 200px;
}
tab1{
	padding-left:2em;
	}
	
#left 
{
    background: none repeat scroll 0 0 #99a3a4 ;
    float: left;
    margin: 0 ;
	padding:0;
	border:none;
    width: 100%;
}
#center
{
    background: none repeat scroll 0 0 #99a3a4 ;
    text-align:center;
    

    width:100%;
    justify-content: center;
	display: flex;
}
.one1 {
    border-style: solid;
    border-color: #800000;
	
}
.one {
    border-style: solid;
    border-color: #800000;
	
	background-color:#a93226;
	
}

.two{
	box-shadow: 10px 10px 5px #454545;
}
.img-circle {
    border-radius: 50%;
	padding:10px;
	justify-content: center

}
.container1{
	border-radius: 47px 47px 47px 47px;
-moz-border-radius: 47px 47px 47px 47px;
-webkit-border-radius: 47px 47px 47px 47px;
border: 0px solid #000000;
background-color:#ecaa24  ;
width:500px;


text-align:center;

}
.c{
	background-color:#090659;
}

.flex-container {
    display: -webkit-flex;
    display: flex;
    width: 100%;
    height: 900px;
	text-align:left;
}

.flex-item {

    width:50%;
    height: 600px;
	
}
tab1{
	padding-left:11.5em;
}
tab2{
	padding-left:10em;
}
 .slideInLeft {
  -webkit-animation-name: slideInLeft;
  animation-name: slideInLeft;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInLeft {
  0% {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  }
  }
  @keyframes slideInLeft {
  0% {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  }
  } 
   .slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInRight {
  0% {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  }
  }
  @keyframes slideInRight {
  0% {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  }
  } 
  .slideInUp {
  -webkit-animation-name: slideInUp;
  animation-name: slideInUp;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInUp {
  0% {
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  }
  @keyframes slideInUp {
  0% {
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  } 
  .containerbottom
  {
	  background-color:black;
	  height:20px;
  }

</style>
<body>
<body bgcolor="#E6E6FA">
<div class="wrapper col0">
  <div id="topbar">
    
    
    <br class="clear" />
	<div id="slidepanel">
      <div class="topbox">
        <h2>LOG IN </h2>
        <p>Christ University Library</p>
		<p>Use the login form to login as student or staff</p>
      </div>
  


     <!--- Shiju no need of login here 
     insert log out here--> 



    
      <div class="topbox last">
        <h2>Login to your account:</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Login Form</legend>
            <label for="name">Username:
              <input type="text" name="name" id="name" value="" />
            </label>
            <label for="password">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="remember">
              <input class="checkbox" type="checkbox" name="remember" id="remember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="login" id="login" value="Login" />
              &nbsp;
              <input type="reset" name="reset" id="reset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
	  
    </div>
  </div>
  
</div><div id="loginpanel">
	
      <ul>
        <li class="left">&raquo;</li>
        <li class="right" id="toggle"><a href="login.php"><font color="white">Log out</font></a><a style="display: none;" href="#slidepanel"><font color="red">Close Panel</font></a></li>
      </ul>
    </div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="ChristUniversity_library.php"><img src="images/logo.png"width="200" height="70" ></a></h1>
      <font color="white"><p>EXCELLENCE AND SERVICE</p></font>
    </div>
	<br></br>
	<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)">
    <div class="fl_right">
      <ul>
		<div class="top-bar">
		<div class="search-container">
		
			<input class="search" type="search" placeholder="&#128270;Search....">
		</div>
		</div>
        
      </ul>
     
    </div>
	</form>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
  
    <ul>
      <li><a style="color:#FFFFFF;" href="ChristUniversity_library.php">Home</a>
      </li>
      <li class="dropdown"><a style="color:#FFFFFF;" href="PL.php">Physical Library</a>
        
	   </li>
      <li><a style="color:#FFFFFF;" href="OL.php">Online Library</a>
        
      </li>
      <li><a style="color:#FFFFFF;" href="OAM.php">Open Access Material</a>
	  
	  </li>
     
	  <li><a style="color:#FFFFFF;" href="Rep.php">Repository</a>
       
	  <li><a style="color:#FFFFFF;" href="RRM.php">Research/Reference Manager</a>
        
      </li>
	  <li><a style="color:#FFFFFF;" href="Physl.php">Physical Links</a>
      </li>
	  
    <li><a style="color:#FFFFFF;" href="AU.php">About Us</a>
      </li>
    </ul>
	
  </div></font>
</div>
<!-- ####################################################################################################### -->
<b></br></br>
<center>
<h1>

<?php 
  echo "Admin Panel<br>Welcome ".$_SESSION['admin_id'];
 ?>
</h1><center>
<div class="flex-container">
	<div class="flex-item">
	<div class="slideInLeft">
	<b>
		<h2><tab1></tab1>ADMIN</h2>
		<div class="container1">
		</br>
		<a href="admin/add admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD ADMIN</a><br></br>
		<a href="admin/remove admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE ADMIN</a><br></br>
		<a href="admin/edit admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/edit admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">EDIT ADMIN</a><br></br>
		<a href="admin/display all admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all admins.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL ADMINS</a><br></br>
		</br>
		</div>

	


		<h2><tab1></tab1>STUDENT</h2>
		<div class="container1">
		</br>
		<a href="admin/add student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD STUDENT</a><br></br>
		<a href="admin/remove student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE STUDENT</a><br></br>
		<a href="admin/edit student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/edit student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">EDIT STUDENT</a><br></br>
		<a href="admin/display all student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all students .php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL STUDENTS</a><br></br>
		</br>
		</div>

	
	
	

	
		<h2><tab1></tab1>STAFF</h2>
		<div class="container1">
		</br>
		<a href="admin/add staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD STAFF</a><br></br>
		<a href="admin/remove staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE STAFF</a><br></br>
		<a href="admin/edit staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/edit staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">EDIT STAFF</a><br></br>
		<a href="admin/display all staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL STAFF</a><br></br>
		</br>
		</div>
		</div>
	</div>
	</b>

	
	<div class="flex-item">
	<div class="slideInUp">
			<h2><tab1></tab1>BOOKS</h2>
			<div class="container1">
			</br>
			<b><a href="admin/add isbn.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add isbn.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD ISBN</a><br></br>
			<a href="admin/remove isbn.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove isbn.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE ISBN</a><br></br>
			<a href="admin/add barcode.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add barcode.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD BARCODE</a><br></br>
			<a href="admin/remove barcode.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove barcode.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE BARCODE</a><br></br>
			<a href="admin/display all isbn.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all isbn.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL BOOKS</a><br></br>
			<a href="admin/display all barcode.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all barcode.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY SUB BOOKS</a><br></br>
			<a href="admin/add publisher.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add publisher.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD PUBLISHER</a><br></br>
			<a href="admin/remove publisher.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove publisher.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE PUBLISHER</a><br></br>
			<a href="admin/display all publisher.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all publisher.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL PUBLISHER</a><br></br>

			</br>
		
		</div>
	

	
		<h2><tab1></tab1>CD's</h2>
		<div class="container1">
			</br>
			<b><a href="admin/add cd.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add cd.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD CD</a><br></br>
			<a href="admin/remove cd.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove cd.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE CD</a><br></br>
			<a href="admin/display all cd.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all cd.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL CD's</a><br></br>
			</br>
		
		</div>
	</div>
	</div>

	<div class="flex-item">
	<div class="slideInRight">
		<h2><tab2></tab2>MAGAZINE</h2>
		<div class="container1">
			</br></br>
			<b><a href="admin/add magazine.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add magazine.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD MAGAZINE</a><br></br>
			<a href="admin/remove magazine.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove magazine.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE MAGAZINE</a><br></br>
			<a href="admin/display all magazine.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all magazine.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL MAGAZINE</a><br></br>
			</br></br>
		</div>
		
	

	
		<h2><tab2></tab2>NEWSPAPER</h2>
		<div class="container1">
			</br></br>
			<b><a href="admin/add newspaper.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add newspaper.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD NEWSPAPER</a><br></br>
			<a href="admin/remove newspaper.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove newspaper.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE NEWSPAPER</a><br></br>
			<a href="admin/display all newspaper.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all newspaper.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL NEWSPAPER</a><br></br>
			</br></br>
		
		</div>
	

	

		<h2><tab2></tab2>QUESTION <tab1></tab1>PAPERS</h2>
		<div class="container1">
			</br></br>
			<b><a href="admin/add exampaper.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add exampaper.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD EXAMPAPER</a><br></br>
			<a href="admin/remove exampaper.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove exampaper.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE EXAMPAPER</a><br></br>
			<a href="admin/display all exampaper.php"target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all exampaper.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL EXAMPAPER</a><br></br>
			</br></br>
		</div>
		</div>
	</div>
		
</div>
<div class="containerbottom">
</div>
</body>
</html>