<?php

  $diagnosis = [
    "yeet" => 0,

  ];

// This gets the previous $_POST diagnosis from the initial form
$prev_diagnosis = $_POST["prev_diagnosis"];
$prev_diagnosis = unserialize(base64_decode($prev_diagnosis));



// finished:
// pneumonia



  if ($_POST["fatigue"] == "major") {
    $diagnosis["Pneumonia"] += 1;
  }
  if ($_POST["fatigue"] == "minor") {
    $diagnosis["Pneumonia"] += 0.5;
  }


  if ($_POST["chills"] == "sweatandshake") {
     $diagnosis["Pneumonia"] += 1;
  }
  if ($_POST["chills"] == "shake") {
     $diagnosis["Pneumonia"] += 0.5;
  }


  if ($_POST["temp"] == "high") {
  ///////////////////////////////////////////////////////////////////////change this yeet
     $diagnosis["yeet"] += 1;
  }
  if ($_POST["temp"] == "low") {
     $diagnosis["Pneumonia"] += 1;
  }


  if ($_POST["diarrhea"] == "sometimes") {
     $diagnosis["Pneumonia"] += 0.5;
  }
  if ($_POST["diarrhea"] == "often") {
     $diagnosis["Pneumonia"] += 1;
  }








  //Add the two diangostic results together to get a sum
  foreach (array_keys($prev_diagnosis) as $key){
    $diagnosis[$key] += $prev_diagnosis[$key];
  }

  // Sort the arrrrrrrr by the values in the arr in descending order
  arsort($diagnosis);


  // Output all of the diagnosis and the value in dict
  // find the most likely diagnosis based on highest # in dict

  echo "<h1> Results </h1> <ol>";
  foreach (array_keys($diagnosis) as $key){
    // only shows the ones with likelihood more than 0
    if ($diagnosis[$key] >0){
        echo "<li>". $key ." with number weight ". $diagnosis[$key] ."</li>";
    }
  }
  echo "</ol>";





?>
