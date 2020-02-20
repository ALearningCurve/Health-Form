<?php

  $diagnosis = [
    "Common Cold" => 0,
    "Fever" => 0,
    "Flu" => 0,
    "Pneumonia" => 0,
    "Whooping Cough" => 0,
    "Tuberculosis" => 0,
    "Allergies" => 0,
    "Eczema" => 0,
    "Brain Aneurysm" => 0,
    "Brain Tumor" => 0,
    "Concussion" => 0,
    "Middle Ear Infection" => 0,
    "Glaucoma" => 0,



    "Sinus Infection" => 0,
    "Anemia" => 0,
    "Hypothyroidism" => 0,


    "Dehydration" => 0,


    "AAAAAAAAAAAAAAAAAAAA" => 0,
  ];




  // AAAAAAAAAAAAAAAAAAAA substitute for undetermined thing that i will research later


  // ears
  if ($_POST["earache"] == "y") {
    $diagnosis["Middle Ear Infection"] += 1;
  }

  if ($_POST["hearingloss"] == "y") {
      $diagnosis["Brain Tumor"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
    }

  if ($_POST["eardischarge"] == "y") {
      $diagnosis["Middle Ear Infection"] += 1;
    }

  if ($_POST["clog"] == "y") {
      $diagnosis["Middle Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["itchyear"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["ringing"] == "y") {
      $diagnosis["Concussion"] += 1;
    }


  //mouth
  if ($_POST["cough"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Tuberculosis"] += 1;
      $diagnosis["Allergies"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["itchysorethroat"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
    }

  if ($_POST["drymouth"] == "y") {
      $diagnosis["Dehydration"] += 1;
    }

  if ($_POST["bumpytongue"] == "y") {
      $diagnosis["Tuberculosis"] += 1;
    }

  if ($_POST["vomit"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Allergies"] += 1;
      $diagnosis["Eczema"] += 1;
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Concussion"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
    }

  if ($_POST["appetite"] == "y") {
        $diagnosis["Tuberculosis"] += 1;
      }

  if ($_POST["tightjaw"] == "y") {
        $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
      }

  if ($_POST["gumpain"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }




  //eyes
  if ($_POST["eyepain"] == "y") {
      $diagnosis["Glaucoma"] += 1;
    }

  if ($_POST["redeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Allergies"] += 1;
      $diagnosis["Glaucoma"] += 1;
    }

  if ($_POST["itchyeyes"] == "y") {
      $diagnosis["Allergies"] += 1;
    }

  if ($_POST["wateryeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Allergies"] += 1;
    }

  if ($_POST["visionloss"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Glaucoma"] += 1;
    }

  if ($_POST["twitch"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["droop"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
    }

  if ($_POST["eyedischarge"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["doublevision"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
    }


  //head
  if ($_POST["memory"] == "y") {
      $diagnosis["Pneumonia"] += 1;
    }

  if ($_POST["dizzy"] == "y") {
      $diagnosis["Allergies"] += 1;
      $diagnosis["Eczema"] += 1;
      $diagnosis["Concussion"] += 1;
      $diagnosis["Anemia"] += 1;
    }

  if ($_POST["hair"] == "y") {
      $diagnosis["Thyroid Disease"] += 1;
    }

  if ($_POST["bumps"] == "y") {
      $diagnosis["AAAAAAAAAAAAAAAAAAAA"] += 1;
    }

  if ($_POST["headache"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Brain Tumor"] += 1;
      $diagnosis["Concussion"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Anemia"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["numb"] == "y") {
      $diagnosis["Stroke"] += 1;
    }

  if ($_POST["fever"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Tuberculosis"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["itchyskin"] == "y") {
        $diagnosis["Allergies"] += 1;
        $diagnosis["Eczema"] += 1;
      }


  //nose
  if ($_POST["breathing"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Allergies"] += 1;
      $diagnosis["Anemia"] += 1;
    }

  if ($_POST["runny"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["stuffy"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["bloodynose"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Allergies"] += 1;
    }

  if ($_POST["nosepain"] == "y") {
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


  foreach (array_keys($diagnosis) as $key){
    // only shows the ones with likelihood more than 0
    if ($diagnosis[$key] >0){
        readfile("SpecificDiagnostics/Diagnostic".$key . ".html");
    }
  }


?>
