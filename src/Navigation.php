<?php
namespace oldspice;

class Navigation {
  private static $nav_items = array(
    array('name' => 'Home', 'link' => 'index.php'),
    array('name' => 'Login', 'link' => 'login.php'),
    array('name' => 'Register', 'link' => 'register.php'),
    array('name' => 'Contact', 'link' => 'contact.php'),
    array('name' => 'About' , 'link' => 'about.php')
  );
  private static $auth_items = array(
    array('name' => 'Home', 'link' => 'index.php'),
    array('name' => 'Contact', 'link' => 'contact.php'),
    array('name' => 'About' , 'link' => 'about.php'),
    array('name' => 'Log out' , 'link' => 'logout.php')
  );

  public static function getNavigation() {
    // create navigation array
    $navigation = array();
    $navigation["active"] = basename( $_SERVER['PHP_SELF'] );
    
    //check if session is not enabled
    
    if( session_status() == PHP_SESSION_NONE ) {
      //if not enabled, enable it
      session_start();
    }
    if( isset($_SESSION['auth']) ) {
      $navigation['items'] = self::$auth_items;
    }
    else{
      $navigation['items'] = self::$nav_items;
    }
    return $navigation;
  }

  
}

?>