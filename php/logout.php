<?php

require_once "core/init.php";

$user = new User;

$user->logout();
header("Location: index1.php");
