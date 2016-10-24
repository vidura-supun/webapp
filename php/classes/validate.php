<?php

class validate {

  private $_passed = false,
          $_errors = array(),
          $_db = null;

  public function __construct(){
    $this->_db = db::getInstance();
    }

  public function check($source, $items = array()){
    foreach($items as $item => $rules){
      foreach($rules as $rule => $rule_value){
        $value = $source[$item];


        if($rule ==='required' && empty($value)){
        //echo "{$item} {$rule} must be {$rule_value}";
        $this->addError("<font color='red'>*{$item} is required</font><br/>");
      }else if(!empty($value)){
        switch($rule){
          case 'min':
            if(strlen($value) < $rule_value){
              $this->addError("<font color='red'> *{$item} should have characters more than {$rule_value}.</font><br/>");
            }
          break;

          case 'max':
          if(strlen($value) > $rule_value){
            $this->addError("<font color='red'>*{$item} should have characters less than {$rule_value}.</font><br/>");
          }
          break;

          case 'matches':
          if($source[$item]!=$source[$rule_value]){
            $this->addError("<font color='red'>*passwords do not match.</font><br/>");
          }
          break;

          case 'unique':
            $check = $this->_db->get('users', array('stud_id', '=', $value));
            //echo "{$rule_value}, {$value}";
            if($check->count()){
              $this->addError("<font color='red'>* student ID already exists.</font><br/>");
            }
            //echo $check->count();


          break;
        }

        }


      }

    }
    if(empty($this->_errors)){
      $this->_passed = true;
    }
    return $this;

  }
  private function addError($error){
    $this->_errors[] = $error;
  }

  public function errors(){
    return $this->_errors;
  }

  public function passed(){
    return $this->_passed;

  }

}
