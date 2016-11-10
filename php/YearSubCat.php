<?php

require 'core/init.php';

$user = new User();
if($user->isLoggedIn()){
  echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:#123">&nbsp&nbsp&nbsp Logged in as'.'<font color="#1a75ff"> <a href="profile.php">'.' '.esc($user->data()->f_name).'</a></font>'.'</p>';
  echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:black"><a href="logout.php">&nbsp&nbsp&nbsp Log out</a></p>';
}
?>
<html>
    <head>


        <title></title>


        <link rel="stylesheet" href="css/a_first.css">

        <link rel="stylesheet" href="css/second.css">

     <style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.2s ease-in-out;
    transition: width 0.2s ;

}

input[type=text]:focus {
    width: 100%;
}
</style>
    </head>
    <body>

        <div class="wrapper-blue">
            <div class="site-header">
                <div class="logo">



			<!--	<img src="C:\Users\U Computers\Desktop\NSBMweb\ATN-RSH-000107\images\NSBM_Light_Blue_WPU_7e09c.png">  -->


                    <h1><a href="C:\Users\U Computers\Desktop\NSBMweb\ATN-RSH-000107\index.html" style="text-decoration:none">NATIONAL SCHOOL OF BUSINESS MANAGEMENT</a></span></h1>
					<div align="right"> <h3 style="color:white">
					SEARCH: <input type="text" name="search" placeholder="Search.."> </h3> </div>

					<h3 style="color:white"> <marquee>the learning management system of national school of business management</marquee>
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
                        </div>
                    </div>
                    </div>



			<div align="center">
            <h1> sub categories </h1> <br>
            <h3><a href="#" > year-0  </a></h3> <br>
            <h3><a href="computerContent.php" > year-1 </a></h3> <br>
            <h3><a href="" > year-2 </a></h3> <br>
            <h3><a href="#" > year-3 </a></h3> <br>
            <h3><a href="#" > year-4 </a></h3> <br>
            </div>







                            <div class="row-fluid">
                                <div class="featured-image">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

       <script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>






    </body>
</html>
