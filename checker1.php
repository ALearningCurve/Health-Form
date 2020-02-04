<?php

  $diagnosis = [
    "Common Cold" => 0,
    "Fever" => 0,
    "Flu" => 0,
    "Pneumonia" => 0,
    "Whooping Cough" => 0,
    "AAAAAAAAAAAAAAAAAAAA" => 0,
  ];







  // AAAAAAAAAAAAAAAAAAAA substitute for undetermined thing that i will research later


  // ears
  if ($_POST["earache"] == "y") {
    $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
  }

  if ($_POST["hearingloss"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["eardischarge"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["clog"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["itchyear"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["ringing"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }


  //mouth
  if ($_POST["cough"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Whooping Cough"] += 1;
    }

  if ($_POST["itchysorethroat"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
    }

  if ($_POST["drymouth"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["toothache"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["bumpytongue"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["coughingblood"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["vomit"] == "y") {
      $diagnosis["Pneumonia"] += 1;
    }

  if ($_POST["appetite"] == "y") {
        $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
      }

  if ($_POST["tightjaw"] == "y") {
        $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
      }

  if ($_POST["gumpain"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }


  //eyes
  if ($_POST["eyepain"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["redeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
    }

  if ($_POST["itchyeyes"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["wateryeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
    }

  if ($_POST["visionloss"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["twitch"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["droop"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["eyedischarge"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["doublevision"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }


  //head
  if ($_POST["memory"] == "y") {
      $diagnosis["Pneumonia"] += 1;
    }

  if ($_POST["dizzy"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["hair"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["bumps"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["headache"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
    }

  if ($_POST["numb"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["fever"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Whooping Cough"] += 1;
    }


  //nose
  if ($_POST["breathing"] == "y") {
      $diagnosis["Pneumonia"] += 1;
    }

  if ($_POST["misshapen"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["runny"] == "y") {
      $diagnosis["Common Cold"] += 1;
    }

  if ($_POST["stuffy"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Whooping Cough"] += 1;
    }

  if ($_POST["bruising"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["swelling"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["bloodynose"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["nosedischarge"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["itchynose"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["nosepain"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
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
