<?php
/* a separate class to perform simple queries and return the result */
namespace oldspice;

use oldspice\Database;
use \Exception;

class Query extends Database {
  private $query_string;
  private $allowed_query_types = array('select','update','insert','delete');
  private $query_type;
  private $query_params;

  public function __construct( $query_string ) {
    // construct the parent class (Database)
    parent::__construct();
    // store the query string
    $this -> query_string = $query_string;
    $this -> query_type = $this -> detectQueryType();
  }

  public function execute( Array $params ) {
    // this function receives the parameters for the query
      
  }

  private function detectQueryType() {
    // determine the query type eg select insert update or delete
    // trim spaces from beginning and end of query and convert to lowercase
    $lc_query = trim( strtolower( $this -> query_string ) );
    $type = '';
    foreach( $this -> allowed_query_types as $query_type ) {
      if( strpos($lc_query, $query_type ) === 0 ) {
        $type = $query_type;
      }
    }
    return $type;
  }

  private function matchParams() {

  }



}
?>