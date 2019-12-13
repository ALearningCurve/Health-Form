<?php

  $diagnosis = [
    "d1" => 0,
    "d2" => 0,
  ];



  // Get the first question's answer and do something
  if ($_POST["q1"] == "y") {
    $diagnosis["d1"] += 1;
  }


  // Output all of the diagnosis and the value in dict
  foreach (array_keys($diagnosis) as $key){
    echo "<br>" . $key . ": " . $diagnosis[$key];
  }

  // find the most likely diagnosis based on highest # in dict
  $highest_disease = null;
  $highest_disease_number = 0;
  foreach (array_keys($diagnosis) as $key){
    $temp = $diagnosis[$key];

    if ($temp > $highest_disease_number){

      $highest_disease = $key;
      $highest_disease_number = 0;
    }
  }

  echo "<br>Disease With Highest Chance: ". $highest_disease . " with number weight " . $highest_disease_number;


?>
