<?php
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$ps = crypt($_POST['ps'], 'sss');
$em = $_POST['em'];
$fc = $_POST['fc'];
$si = $_POST['si'];
$gn = $_POST['gn'];

$conn = new mysqli("127.0.0.1", "root", "", "user");
if($conn->connect_error){
  echo "broken";
}

$sql = "INSERT INTO users(f_name, l_name, pass, email, faculty, stud_id, gender) VALUES( '$fn', '$ln', '$ps', '$em', '$fc', '$si', '$gn')";
if($conn -> query($sql)==True){
  echo "success";
}
?>

