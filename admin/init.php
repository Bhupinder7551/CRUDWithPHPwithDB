<?php

  ob_start(); // output buffering is turned on

  define("PRIVATE_PATH", dirname(__FILE__));
  define("SHARED_PATH", PRIVATE_PATH . '/share');


    // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/globe_bank/user');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/user') + 5;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('func.php');
  require_once('database.php');
  require_once('query_functions.php');
  
  require_once('validation_functions.php');

  $db = db_connect();
  
  $errors = [];


?>