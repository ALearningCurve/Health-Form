<?php

  $diagnosis = [
    "Common Cold" => 0,
    "Fever" => 0,
    "Flu" => 0,
    "Allergies" => 0,
    "AAAAAAAAAAAAAAAAAAAA" => 0,
  ];

  // AAAAAAAAAAAAAAAAAAAA substitute for undetermined thing that i will research later


  // if person coughing
  if ($_POST["cough"] == "y") {
    $diagnosis["Common Cold"] += 1;
  }

  // if person itchy throat
  if ($_POST["itch"] == "y") {
    $diagnosis["Fever"] += 1;
  }

    // if person dry mouth
    if ($_POST["dry"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }


// if person tight jaw/can't chew
  if ($_POST["jaw"] == "y") {
      $diagnosis["Common Cold"] += 1;
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
