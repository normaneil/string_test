<?php
$string= 'HEELLLOLAA';
echo "{$string}<hr>";

// Get first character
$temp= substr($string, 0, 1);
$letters= [];

// Fun stuff starts here
// Code hack
// Need to add one character position in the last of the string
// This will enable the script to read all characters given
$string= $string."/"; 
$counter= 0;
while(strlen($string) > 0) {
  // Get the first occurance of the character
  $compare= substr($string, 0, 1); 

  // Compare our temp variable
  if($temp == $compare) {    
    // Increment counter
    $counter= $counter + 1;
    // Removed first index and return the new string
    $string= substr($string, 1, strlen($string));
  } 
  else {
    // We've reached the unequal part
    // Load it to our array
    $letters[]= array(
      'letter'=> $temp,
      'count' => $counter
    );
    // echo "letter: {$temp}<br>";
    // echo "count: {$counter}<br>";
    $temp= $compare;
    $counter= 0;
  }
}

// Finally display the output
foreach($letters as $letter) {
  echo sprintf('%s%s', $letter['letter'], $letter['count']);
}

?>