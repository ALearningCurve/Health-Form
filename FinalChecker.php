<?php

  $diagnosis = [
    "yeet" => 0,

  ];




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
