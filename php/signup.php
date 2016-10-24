
<?php

require_once 'core/init.php';

if(input::exist()){
  //if(token::check(input::get('token'))){
    echo 'ran';
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
    header('Location:login.html');
  }else{
    //print_r($validation->errors());
    foreach($validation->errors() as $error){
      echo $error;
    }
  }

  //}


}
?>


<head>
    <title>LMS</title>
</head>
<body>
  <form action="signup.php" method="post">
    F_name:<input type="text" value="" name="first_name"/><br/>
    L_name:<input type="text" value="" name="last_name"/><br/>
    Password:<input type="password" value="" name="password" id="ps" /><br/>
    con_Password:<input type="password" value="" name="confirm_password" id="cps" /><br/>
    Email:<input type="text" value="" name="email"/><br/>
    Faculty:<input type="text" value="" name="faculty"><br>
    stuId:<input type="text" value="" name="student_id" /><br>
    gender:<input type="text" value="" name="gender"/><br>
    <input type="hidden" name="token" value="<?php echo token::issue(); ?>"/>
    <input type="submit" />



  </form>
</body>
