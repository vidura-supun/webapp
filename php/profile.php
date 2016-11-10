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
                                    <ul algn="center" class="nav">




                                        <li class="active"><a href="index1.php">Home</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="">support</a></li>
                                        <li><a href="contact.php">Contact</a></li>
										                    <li><a href="signup.php">Sign In</a></li>
                                      <br><br><br><br>






                                        <h1>USER DETAILS </h1>
                                        <div align="left">


                                        <?php

                                        require 'core/init.php';

                                        $user = new User();
                                        if($user->isLoggedIn()){

                                          echo '<img width="100px" height="150px" src="vidu.jpeg"/>';


                                        }
                                        ?>
                                         <br><br>

                                        <?php


                                          echo '<p style="font-family: Times New Roman, Times, serif; font-size:20px; color:black">&nbsp&nbsp&nbsp Logged in as:'.'<font color="blue"> <a href="profile.php">'.' '.esc($user->data()->f_name).' '.esc($user->data()->l_name).'</a></font></p>';

                                        ?>


                                        <table align="left">
                                        	<tr>
                                        		<td>country:</td>
                                        		<td>sri lanka </td>
                                        	</tr>
                                        	<tr>
                                        		<td>courses following :</td>
                                        		<td>Bsc Hons in computer Security offered by Plymouth University,United Kingdom</td>
                                        	</tr>
                                        	<tr>
                                        		<td>first access:</td>
                                        		<td>25th oct 2016 </td>
                                        	</tr>
                                        	<tr>
                                        		<td>last acces: </td>
                                        		<td>25th oct 2016 </td>

                                        		 <!-- and then he died -->
                                        	</tr>
						<tr>
							<td>
								<input type="submit" value="edit your profile" name="#" id="#" >
							</td
						</tr>


                                        </table>



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
