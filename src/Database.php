<?php

namespace oldspice;

class Database {
  protected $connection;

  protected function __construct() {
    $this -> connection = mysqli_connect("localhost","test","password","testdata");
  }
}
?>