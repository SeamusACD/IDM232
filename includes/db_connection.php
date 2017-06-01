<?php
  // 1. Create database connection
  //
  // Define constants rather than regular variables.
  define('DB_SERVER', 'localhost');
  define('DB_USER', 'sddesig2_root');
  define('DB_PASS', 'BTGA45TA');
  define('DB_NAME', 'idm232-nufro-sad343');

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
