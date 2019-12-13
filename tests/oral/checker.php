<?php

  $diagnosis = [
    "lmao-iosis" => 0,
    "Terminal AaaAAaAAAAaAaA" => 0,
  ];



  // Get the first question's answer and do something
  if ($_POST["q1"] == "y") {
    $diagnosis["lmao-iosis"] += 1;
  }

  // Get the second question;s answer and do something
  if ($_POST["q2"] == "y") {
    $diagnosis["Terminal AaaAAaAAAAaAaA"] += 1;
  }


  // Sort the arrrrrrrr by the values in the arr in descending order
  arsort($diagnosis);

  // Output all of the diagnosis and the value in dict
  // find the most likely diagnosis based on highest # in dict
  echo "<ol>";
  foreach (array_keys($diagnosis) as $key){
    echo "<li>". $key ." with number weight ". $diagnosis[$key] ."</li>";
  }
  echo "</ol>";

?>
