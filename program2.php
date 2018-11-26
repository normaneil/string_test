<?php
$string= 'H1E2L3O1L1A2';
echo "{$string}<hr>";

// Fun stuff starts here
$counter= 0;
while(strlen($string) >= 1) {

  // Get the first character
  $first= substr($string, 0, 1);
  // Get the second character 
  $second= substr($string, 1, 1); 

  // Check if the second variable is a number
  if(is_numeric($second)) {

    // Loop abd Print the first character
    for($i=0; $i<intval($second); $i++){
      echo "{$first}";
    }

    // Remove 2 indexes. Remove our first and second variable from our string and return it
    $string= substr($string, 2, strlen($string));
  }
  else {
    // The second variable is not a number
    // Just print it
    echo "{$first}";

    // Remove 1 index only
    $string= substr($string, 1, strlen($string));
  }  
}
?>