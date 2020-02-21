<?php

  $diagnosis = [
    "Common Cold" => 0,
    "Fever" => 0,
    "Flu" => 0,
    "Pneumonia" => 0,
    "Whooping Cough" => 0,
    "Tuberculosis" => 0,
    "Seasonal Allergies" => 0,
    "Non seasonal Allergies" => 0,
    "Eczema" => 0,
    "Brain Aneurysm" => 0,
    "Brain Tumor" => 0,
    "Concussion" => 0,
    "Middle Ear Infection" => 0,
    "Glaucoma" => 0,
    "Sinus Infection" => 0,
    "Anemia" => 0,
    "Dehydration" => 0,
    "Hypothyroidism" => 0,
    "Rheumatoid arthritis" => 0,
    "Tetanus" => 0,
    "Gingivitis" => 0,
    "Blepharitis" => 0,
    "Uveitis" => 0,
  ];





  // ears
  if ($_POST["earache"] == "y") {
    $diagnosis["Middle Ear Infection"] += 1;
    $diagnosis["Sinus Infection"] += 1;
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
      $diagnosis["Seasonal Allergies"] += 1;
    }

  if ($_POST["ringing"] == "y") {
      $diagnosis["Concussion"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }


  //mouth
  if ($_POST["cough"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Tuberculosis"] += 1;
      $diagnosis["Sinus Infection"] += 1;
    }

  if ($_POST["itchysorethroat"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Seasonal Allergies"] += 1;
      $diagnosis["Non seasonal Allergies"] += 1;
    }

  if ($_POST["drymouth"] == "y") {
      $diagnosis["Dehydration"] += 1;
    }

  if ($_POST["bumpytongue"] == "y") {
      $diagnosis["Tuberculosis"] += 1;
    }

  if ($_POST["vomit"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Eczema"] += 1;
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Concussion"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
      $diagnosis["Non seasonal Allergies"] += 1;
    }

  if ($_POST["appetite"] == "y") {
        $diagnosis["Tuberculosis"] += 1;
        $diagnosis["Hypothyroidism"] += 1;
        $diagnosis["Rheumatoid arthritis"] += 1;
      }

  if ($_POST["tightjaw"] == "y") {
        $diagnosis["Rheumatoid arthritis"] += 1;
        $diagnosis["Tetanus"] += 1;

      }

  if ($_POST["gumpain"] == "y") {
      $diagnosis["Gingivitis"] += 1;
    }





  //eyes
  if ($_POST["eyepain"] == "y") {
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Blepharitis"] += 1;
      $diagnosis["Uveitis"] += 1;
    }

  if ($_POST["redeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Blepharitis"] += 1;
      $diagnosis["Uveitis"] += 1;
    }

  if ($_POST["itchyeyes"] == "y") {
      $diagnosis["Seasonal Allergies"] += 1;
      $diagnosis["Non seasonal Allergies"] += 1;
    }

  if ($_POST["wateryeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Non seasonal Allergies"] += 1;
      $diagnosis["Seasonal Allergies"] += 1;
      $diagnosis["Blepharitis"] += 1;

    }

  if ($_POST["visionloss"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Uveitis"] += 1;
    }

  if ($_POST["twitch"] == "y") {
      $diagnosis["Blepharitis"] += 1;
      $diagnosis["Uveitis"] += 1;
    }

  if ($_POST["droop"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
    }

  if ($_POST["doublevision"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
    }


  //head
  if ($_POST["memory"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Concussion"] += 1;
    }

  if ($_POST["dizzy"] == "y") {
      $diagnosis["Eczema"] += 1;
      $diagnosis["Concussion"] += 1;
      $diagnosis["Anemia"] += 1;
      $diagnosis["Dehydration"] += 1;
      $diagnosis["Non seasonal Allergies"] += 1;
    }

  if ($_POST["hair"] == "y") {
      $diagnosis["Thyroid Disease"] += 1;
      $diagnosis["Hypothyroidism"] += 1;
    }

  if ($_POST["bumps"] == "y") {
      $diagnosis["Non seasonal Allergies"] += 1;
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
      $diagnosis["Seasonal Allergies"] += 1;
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
      $diagnosis["Rheumatoid arthritis"] += 1;
      $diagnosis["Tetanus"] += 1;

    }

  if ($_POST["itchyskin"] == "y") {
        $diagnosis["Eczema"] += 1;
        $diagnosis["Non seasonal Allergies"] += 1;
      }





  //nose
  if ($_POST["breathing"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Anemia"] += 1;
      $diagnosis["Non seasonal Allergies"] += 1;
    }

  if ($_POST["runny"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Sinus Infection"] += 1;
      $diagnosis["Seasonal Allergies"] += 1;
    }

  if ($_POST["stuffy"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Middle Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
      $diagnosis["Seasonal Allergies"] += 1;
    }

  if ($_POST["bloodynose"] == "y") {
      $diagnosis["Common Cold"] += 1;

    }

  if ($_POST["itchynose"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Seasonal Allergies"] += 1;
    }

  if ($_POST["nosepain"] == "y") {
      $diagnosis["Common Cold"] += 1;
    }




  // Sort the arrrrrrrr by the values in the arr in descending order
  arsort($diagnosis);


  // Output all of the diagnosis and the value in dict
  // find the most likely diagnosis based on highest # in dict
  /*
  echo "<ol>";
  foreach (array_keys($diagnosis) as $key){
    // only shows the ones with likelihood more than 0
    if ($diagnosis[$key] >0){
        echo "<li>". $key ." with number weight ". $diagnosis[$key] ."</li>";
    }
  }
  echo "</ol>";
  */

  function import_html($diagnosis) {
    foreach (array_keys($diagnosis) as $key){
      // only shows the ones with likelihood more than 0
      if ($diagnosis[$key] >0){
        try {
          readfile("SpecificDiagnostics/Diagnostic".$key . ".html");
        } catch (Exception $e) {
          # TODO Replace this echo with nothing when done
          echo "No Diagnostic for this disease yet";

        }
      }
    }
  }
  @import_html($diagnosis);


?>
