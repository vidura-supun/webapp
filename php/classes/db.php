<?php

class db{
  private static $instance = null;
  private $pdo,
          $query,
          $error = False,
          $results,
          $count = 0;

  private function __construct(){
    try{
      $this->pdo = new PDO('mysql:host='.config::get('mysql/host').';dbname='.config::get('mysql/db'), config::get('mysql/user'), config::get('mysql/pass'));
    }catch(PDOException $e){
      die($e->getMessage());
    }


  }
  public static function getInstance(){
    if(!isset(self::$instance)){
      self::$instance = new db();
    }
    return self::$instance;

  }
  public function query($sql, $params = array()){
    $this->error = false;
    if($this->query = $this->pdo->prepare($sql)){
      $x = 1;
      foreach($params as $param){
        $this->query->bindValue($x, $param);
        $x++;
      }


  if($this->query->execute()){
    $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
    $this->count = $this->query->rowCount();
  }else{
    $this->error = true;
  }
  }
  return $this;
  }
  public function error(){
    return $this->error;
  }

  public function action($action, $table, $where = array()){
    if(count($where) == 3){
      $operators = array('=', '>', '<', '>=', '<=', '!=');
      $field = $where[0];
      $operator = $where[1];
      $value = $where[2];

      if(in_array($operator, $operators)){
        $sql = "{$action} FROM {$table} where {$field} {$operator} ?";

        if(!$this->query($sql, array($value))->error()){
          return $this;
        }
      }
    }
    return False;
  }
  public function get($table, $where){
    return $this->action("SELECT *", $table, $where);
  }

  public function delete($table, $where){
    return $this->action("DELETE", $table, $where);
  }

  public function insert($table, $fields = array()){
    if(count($fields)){
      $keys = array_keys($fields);
      $values = '';
      $x=1;

      foreach ($fields as $field => $fieldval) {
        $values .= '?';
        if($x < count($fields)){
          $values .= ', ';
        }
        $x++;
      }

      $sql = "INSERT INTO users (`" .implode('`,`', $keys)."`) VALUES ({$values})";

      if(!$this->query($sql, $fields)->error()){
        return true;
      }
    }
    return false;
  }
  public function update($table, $id, $fields){
    $set ='';
    $x=1;

    foreach($fields as $key => $value){
      $set .= "{$key} = ?";
      if($x < count($fields)){
        $set .=', ';
      }
      $x++;
    }


    $sql = "UPDATE {$table} SET {$set} WHERE stud_id = {$id}";

    if($this->query($sql, $fields)->error()){
      return true;
    }
    return false;

  }

  public function results(){
    return $this->results;
  }

  public function one(){
    return $this->results()[0];
  }

  public function count(){
    return $this->count;
  }
}

?>
