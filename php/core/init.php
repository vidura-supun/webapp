<?php

$GLOBALS['config'] = array(
  'mysql' => array(
    'host' => '127.0.0.1',
    'user' => 'root',
    'pass' => '',
    'db' => 'user'
  ),
  'cookie' => array(
    'cookie_name' => 'cn',
    'cookie_exp' => '604800'
  ),
  'session' => array(
    'ses_name' => 'user'
  )

);

spl_autoload_register(function($class){
  include_once 'classes/'.$class.'.php';
});

require_once 'functions/sanitizer.php';
