<?php
/* a separate class to perform simple queries and return the result */
namespace oldspice;

use oldspice\Database;
use \Exception;

class Query extends Database {
  private $query_string;
  private $allowed_query_types = array('select','update','insert','delete');

  public function __construct( $query_string ) {
    // construct the parent class (Database)
    parent::__construct();
    // store the query string
    $this -> query_string = $query_string;
  }

  private function detectQueryType( $query_string ) {
    // determine the query type eg select insert update or delete
    // convert to lower case
    $lower_query = strtolower($query_string);
    // trim spaces from beginning and end of query
    $lower_query = trim( $lower_query );
    // loop through all allowed query types to find a match
    foreach( $lower_query as $type ) {
      if( strpos($lower_query, $type ) === 0 ) {}
    }
  }

  private function matchParams() {

  }
}
?>