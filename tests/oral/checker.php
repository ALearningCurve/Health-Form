<?php

  $diagnosis = [
    "Common Cold" => 0,
    "Fever" => 0,
  ];


  // Get the first question's answer and do something
  if ($_POST["cough"] == "y") {
    $diagnosis["Common Cold"] += 1;
  }

  // Get the second question;s answer and do something
  if ($_POST["itch"] == "y") {
    $diagnosis["Fever"] += 1;
  }

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
