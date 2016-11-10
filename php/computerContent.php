<?php

require 'core/init.php';

$user = new User();
if($user->isLoggedIn()){
  echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:#123">&nbsp&nbsp&nbsp Logged in as'.'<font color="#1a75ff"> <a href="profile.php">'.' '.esc($user->data()->f_name).'</a></font></p>';
?>
    <p style="font-family: Times New Roman, Times, serif; font-size:20px; color:black"><a href="logout.php">&nbsp&nbsp&nbsp Log out</a></p>

<?php
}else{
  header("Location: index1.php");
}
?>



  <html>
    <head>


        <title></title>



        <link rel="stylesheet" href="css/a_first.css">

        <link rel="stylesheet" href="css/second.css">



    </head>
    <body bgcolor="wrapper-blue">

        <div class="wrapper-blue">
            <div class="site-header">
                <div class="logo">

                     <h1><a href="C:\Users\U Computers\Desktop\NSBMweb\ATN-RSH-000107\index.html" style="text-decoration:none">NATIONAL SCHOOL OF BUSINESS MANAGEMENT</a></span></h1>
                </div>
                <div class="container">
                <div class="menu">

				 <div class="navbar">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <i class="fw-icon-th-list"></i> NAVIGATION
                                </a>
                                <div class="nav-collapse collapse">
                                    <ul class="nav">



                                        <li class="active"><a href="http://nsbm.lk/">Home</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="# ">support</a></li>
                                        <li><a href="contact.html">Contact</a></li>
										<li><a href="#">Sign In</a></li>




				<br> <br> <br >
				<!-- add the php -->

				<h2 style="color:white">School of computing </h2>
				<div align="left" >


				<a href=" " ><br><h3 style="color:white">01.programming with c language </h3> <br>
				<a href=" " ><h3 style="color:white">02.internet technonlogy </h3></a><br>
				<a href=" " ><h3 style="color:white">03.programming with java </h3></a><br>
				<a href=" " ><h3 style="color:white">04.database management system </h3></a><br>
				<a href=" " ><h3 style="color:white">05.proffesional development </h3></a><br>

				</div>
                            </div>
                        </div>

                    </div>
                </div>










				</form>
			</div>
</div>
<body>
</html>
