<?php
  // 1. Create database connection
  //
  // Define constants rather than regular variables.
  define('DB_SERVER', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', 'root');
  define('DB_NAME', 'sddesig2_nufro-idm232');

  // Connect using the constants
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  // Test if connection succeeded
  if (mysqli_connect_errno()) {
    die ('Database connection failed: ' .
        mysqli_connect_error() .
        ' )' . mysqli_connect_errno() . ')'
    );
  }
?>
