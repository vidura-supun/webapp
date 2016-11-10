<?php
require_once 'core/init.php';
 if(session::exists('succes')){
   echo session::fla('succes');
 }
 if(input::exist()){
   if(token::check(input::get('token'))){
     //echo 'work';
   $validate = new validate();
   $validation = $validate->check($_POST, array(
     'password' => array(
       'required'=> true
     ),
     'student_id' => array(
       'required'=> true
     )));

    if($validation->passed()){
      $user = new User();
      $login = $user->login(input::get('password'), input::get('student_id'));

      if($login){
        header("Location: index1.php");
      }else {
        echo '<p>sorry, login in failed.</p>';
      }
    }else{
      foreach($validation->errors() as $error){
        echo $error,'<br/>';
      }
    }
}
}
 ?><html>
    <head>


        <title> </title>


        <link rel="stylesheet" href="css/a_first.css">

        <link rel="stylesheet" href="css/second.css">



    </head>
    <body bgcolor="wrapper-blue">

        <div class="wrapper-blue">
            <div class="site-header">
                <div class="logo">

                     <h1><a href="#" style="text-decoration:none">NATIONAL SCHOOL OF BUSINESS MANAGEMENT</a></span></h1>
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





				<br> <br> <br >

				<table>
				<form action="login.php" method="post">
				<p>
				<tr>
				<td style="color:white">STUDENT ID: </td> <td><input type="text" name="student_id" id="one" onclick="func_one()" ></td><br> </tr><tr>
				<td style="color:white">PASSWORD:</td> <td> <input type="password" name="password" id="pw" onclick="func_two()"> </td><br/> </p></tr>
					<tr> <td align="center"><a href="#">dont remember your password? </a></tr>

				</table>
				 <script>
					function func_one(){
					var a =document.getElementById("one").value;
					if( a= null || a =" " ){
					alert("Name must be filled out") ;
					}
					}


					function func_two(){
					var b = document.getElementById("pw").value;
					if(b = null || a=" ") {
					alert("Name must be filled out");
					}
					}
					</script>
          <input type="hidden" name="token" value="<?php echo token::issue(); ?>"/>


				<input type="submit" value="login" name="#" onsubmit="return formval()" />

				<input type="reset" value="reset" name="#">

                            </div>
                        </div>

                    </div>
                </div>










				</form>
			</div>
</div>
<body>
</html>
