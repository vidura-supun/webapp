
<?php

require_once 'core/init.php';

if(input::exist()){
  if(token::check(input::get('token'))){
    //echo 'ran';
  $validate = new validate();
  $validation = $validate->check($_POST, array(
    'first_name' => array(
      'required' => true,
      'min' => 3,
      'max' => 25
    ),
    'last_name' => array(
      'required' => true,
      'min' => 3,
      'max' => 25
    ),
    'password' => array(
      'required' => true,
      'min' => 6
    ),
    'confirm_password' => array(
      'required' => true,
      'min' => 6,
      'matches' => 'password'
    ),
    'email' => array(
      'required' => true,
      'min' =>8
    ),
    'faculty' => array(
      'required' => true,
      'min'=>3,
      'max' =>3
    ),
    'student_id' => array(
      'required' => true,
      'min'=> 2,
      'max'=>30,
      'unique' => 'stud_id'
    ),
    'gender' => array(
      'required' => true,
      'min' => 1,
      'max' => 1
    )

  ));
  if($validation->passed()){
    $user = new User();

    $salt = '';

    try{
      $user->create(array(
        'f_name' => input::get('first_name'),
        'l_name' => input::get('last_name'),
        'password' => hash::make(input::get('password')),
        'salt' => $salt,
        'email' => input::get('email'),
        'faculty' => input::get('faculty'),
        'stud_id' => input::get('student_id'),
        'gender' => input::get('gender'),
        'group' => 1
      ));
    } catch (Exception $e) {
        die($e->getMessage());
    }


    session::fla('succes', 'you registered successfully!');
    header('Location:login.php');
  }else{
    //print_r($validation->errors());
    foreach($validation->errors() as $error){
      echo $error;
    }
  }

  }


}
?>


<html>
    <head>


        <title></title>


        <link rel="stylesheet" href="css/a_first.css">

        <link rel="stylesheet" href="css/second.css">


    </head>
    <body>

        <div class="wrapper-blue">
            <div class="site-header">
                <div class="logo">




                    <h1><a href="#">NATIONAL SCHOOL OF BUSINESS MANAGEMENT</a></span></h1>
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
                                        <li><a href="contact.php">Contact</a></li>
										<li><a href="signup.php">Sign In</a></li>


                                    </ul>
                                </div>
                        </div>
                    </div>

                    </div>



                <div class="featured-content">

			<h1 align="center"><u>PLEASE FILL IN THE DETAILS </u></h1>


					


						 <div class="container">

                            <div class="row-fluid">
                                <div class="row-fluid">


					<table align="center">
					<form action="signup.php" method="POST">

						<tr>
							<td><h1 align="l" > First Name:</td>
							<td>  <input type="text" id="aa" name="first_name" onclick="one()"> </H1><br> </td>
						</tr>

						<tr>
							<td><h1 align="l" > Last Name:</td>
							<td>  <input type="text" name="last_name" id="bb" onclick="two()"> </H1><br> </td>
						</tr>

						<tr>
							<td><h1 align="l">Password:</td>
							<td>  <input type="password" name="password" > </H1><br> </td>
						</tr>

		    				<tr>
							<td><h1 align="l">Re-enter Password:</td>
							<td>  <input type="password" name="confirm_password"> </H1><br> </td>
						</tr>

	 					<tr>
							<td> <h1> EMAIL ADDRESS: </td>
							<td> <input type="text" name="email" onclick="three()" id="cc"> </H1><br> </td>
						</tr>


						<tr>
							<td><h1> Faculty: </td>
							<td><select name="faculty">
								<option value="SOC"> school of computing </option>
								<option value="SOM"> school of management </option>
								<option value="SOE"> school of engineering </option>
								</select>
							</td>
						</tr>

		    				<tr>
							<td><h1> Student-Id: </td>
							<td><input type="text" name="student_id"> </H1><br> </td>
						</tr>

						<tr>
							<td><h1>Gender: </td>
							<td>    <select name="gender">
								<option value="F"> F </option>
								<option value="M"> M </option>
								</select>
							</td>
						</tr>



						<tr>
              <input type="hidden" name="token" value="<?php echo token::issue(); ?>"/>
							<td align="center"><input type="submit" value="signup" > </td>
							<td align="center"><input type="reset" value="reset"> </td>
						</tr>
				</table>


								<script>
								function one(){

								var a = document.getElementById("aa").value;
								if(a = null || a=" "){
								alert("the name cannot be empty");}
								}

								function two(){

								var b = document.getElementById("bb").value;
								if(b = null || b= " "){
								alert("this cannot be empty");
								}
								}

								function three(){
								var c= document.getElementById("c").value;
									if(c = null || c= " " ){
										alert("this box cannot be empty")
									}
								}
	</script>


					</form>
                                <div class="featured-image">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
				<div>


              <script>
          function validateF_name()
      {
      var fn = /^[A-Za-z]+$/;
      if(inputtxt.value.match(fn))
      {
      alert('Your first name have accepted');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }

          function validateL_name()
      {
      var ln = /^[A-Za-z]+$/;
      if(inputtxt.value.match(ln))
      {
      alert('Your last name have accepted');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }


          function ValidateEmail()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}

          function CheckPassword()
{
var ps=  /^[A-Za-z]\w{7,14}$/;
if(inputtxt.value.match(ps))
{
alert('password accepted')
return true;
}
else
{
alert('try  another password')
return false;
}
}

          function checkingSid(inputtxt)
{
var si = /^[0-9a-zA-Z]+$/;
if(inputtxt.value.match(si))
{
alert('Your Student ID number have accepted');
document.form1.text1.focus();
return true;
}
else
{
alert('Please enter a correct student ID number');
return false;
}
}


      </script>




    </body>
</html>
