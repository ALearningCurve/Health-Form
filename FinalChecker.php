<?php

  $diagnosis = [
    "yeet" => 0,

  ];

// This gets the previous $_POST from the last form
$prev_post = $_POST["prev_post"];
$prev_post = unserialize(base64_decode($prev_post));



   // pneumonia

  if ($_POST["fatigue"] == "none") {
    $diagnosis["yeet"] += 1;
  }





  // Sort the arrrrrrrr by the values in the arr in descending order
  arsort($diagnosis);


  // Output all of the diagnosis and the value in dict
  // find the most likely diagnosis based on highest # in dict

  echo "<ol>";
  foreach (array_keys($diagnosis) as $key){
    // only shows the ones with likelihood more than 0
    if ($diagnosis[$key] >0){
        echo "<li>". $key ." with number weight ". $diagnosis[$key] ."</li>";
    }
  }
  echo "</ol>";





?>
