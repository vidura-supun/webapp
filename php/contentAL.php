<?php

require 'core/init.php';

$user = new User();
if($user->isLoggedIn()){
  echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:#123">&nbsp&nbsp&nbsp Logged in as'.'<font color="#1a75ff"> <a href="profile.php">'.' '.esc($user->data()->f_name).'<a></font>'.'</p>';
  echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:black"><a href="logout.php">&nbsp&nbsp&nbsp Log out</a></p>';
}
?><html>
    <head>


        <title></title>



        <link rel="stylesheet" href="css/a_first.css">

        <link rel="stylesheet" href="css/second.css">


    </head>
    <body bgcolor="wrapper-blue">
<div align="right" style="color:white"> you are logged in as  </div>

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
                                        <li><a href="#">Login</a></li>
                                        <li><a href="# ">support</a></li>
                                        <li><a href="# ">Contact</a></li>
										<li><a href="#">Sign In</a></li>

									</ul>
								</div>
							</div
				</div>
							<br>


								<div align="left" style="color:white"> <br>
								<h2 style="text-decoration:underline">choose your catagories <h2>

								<div align="ceter">
								<p>
								<ol>
								<li> <h3><a href="YearSubCat.php"> school of computing </a> </h3></li> <br>
								<li> <h3> <a href="#">school of management </a> </h3> </li><br>
								<li> <h3> <a href="#">school of engineering </a> </h3></li>
								</ol>
								</p>
								</div>

									</body>
									</html>
