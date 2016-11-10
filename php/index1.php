
<?php
require_once 'core/init.php';

if(session::exists('home')){
  echo '<p>'.session::fla('home').'</p>';
}
$user = new User();
if($user->isLoggedIn()){
  echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:#123">&nbsp&nbsp&nbsp Logged in as'.'<font color="#1a75ff">'.'<a href=profile.php>'.' '.esc($user->data()->f_name).'</a>'.'</font>'.'</p>';
?>
    <p style="font-family: Times New Roman, Times, serif; font-size:20px; color:black"><a href="logout.php">&nbsp&nbsp&nbsp Log out</a></p>

<?php
}else{
  echo '<p>Please <a href="login.php"> Log IN </a> or <a href = "signup.php">Register</a>';
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
         .mySlides{
             display:none;
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



            <!--    <img src="C:\Users\U Computers\Desktop\NSBMweb\ATN-RSH-000107\images\NSBM_Light_Blue_WPU_7e09c.png">  -->


                    <h1><a href="C:\Users\U Computers\Desktop\NSBMweb\ATN-RSH-000107\index.html" style="text-decoration:none">NATIONAL SCHOOL OF BUSINESS MANAGEMENT</a></span></h1>
                    <div align="right"> <h3 style="color:white">
                    SEARCH: <input type="text" name="search" placeholder="Search.."> </h3> </div>s

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



                                        <li class="active"><a href="index1.php">Home</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="">support</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="signup.php">Sign In</a></li>
                                        <li><a href="contentAL.php">More</a></li>



                                    </ul>
                                </div>
                        </div>
                    </div>
                    </div>



<div align="center">
<div align="center" class="w3-content w3-section" style="max-width:500px">

  <img class="mySlides" src="http://www.nsbm.lk/img/news/w9CDRxbDbwfF1JcYXO7hOIvYkqViT2jX.jpeg" style="width:100%">
  <img class="mySlides" src="http://www.nsbm.lk/img/news/lRzxviN8CkwTbZgnMWUWdbONoz12giqb.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>



                <div class="featured-content">
                    <div class="container">
                        <div class="block-content">
                            <div class="row-fluid">
                                <div class="span5 offset1">
                                    <h1>JOIN WITH US</h1>
                                    <p>National School of Business Management has been home for many <br>  distinguished personalities throughout the ages,  <br> producing many visionary men and women </p>
                                </div>
                                <div class="span5">
                                    <h1>DISCOVER MORE</h1>
                                    <p>The NSBM Green University Town is scheduled to be declared open <br>by His Excellency the president Maithripala Sirisena,<br> along with Hon Prime Minister Ra...

</p>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="featured-image">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>







    </body>
</html>
