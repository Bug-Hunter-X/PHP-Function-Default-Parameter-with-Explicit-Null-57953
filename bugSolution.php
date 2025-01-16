function my_function($param1, $param2 = null) {
  if (func_num_args() < 2) {
    // Handle the case where $param2 is not provided or is implicitly null
    $param2 = 'default value';
  } elseif ($param2 === null) {
    // Handle the case where $param2 is explicitly set to null
    $param2 = 'explicitly null value';
  }

  // Process $param1 and $param2
} 