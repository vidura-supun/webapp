<?php
$fn = _$POST["fn"];
$ln = _$POST["ln"];
$ps = crypt(_$POST["ps"]);
$em = _$POST["em"];
$fc = _$POST["fc"];
$si = _$POST["si"];
$gn = _$POST["gn"];

$conn = ("127.0.0.1", "root", "expect_us", "User");
$sql = "INSERT INTO users VALUES('vidu', 'supun', 'pass', 'vidu@aa.com', 'SOC', '036', 'M')"
?>
