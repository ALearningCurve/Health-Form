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
    $diagnosis["Anemia"] += 1;
    $diagnosis["Concussion"] += 1;
  }
  if ($_POST["fatigue"] == "minor") {
    $diagnosis["Pneumonia"] += 0.5;
    $diagnosis["Anemia"] += 0.5;
    $diagnosis["Concussion"] += 0.5;
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



//Anemia
  if ($_POST["heartbeat"] == "rapid") {
     $diagnosis["Anemia"] += 1;
  }


  if ($_POST["concentration"] == "often") {
     $diagnosis["Anemia"] += 1;
  }
  if ($_POST["concentration"] == "sometimes") {
     $diagnosis["Anemia"] += 0.5;
  }


  if ($_POST["pale"] == "often") {
     $diagnosis["Anemia"] += 1;
  }
  if ($_POST["pale"] == "sometimes") {
     $diagnosis["Anemia"] += 0.5;
  }

  if ($_POST["insomnia"] == "often") {
     $diagnosis["Anemia"] += 1;
  }
  if ($_POST["insomnia"] == "sometimes") {
     $diagnosis["Anemia"] += 0.5;
  }


  if ($_POST["pica"] == "yes") {
     $diagnosis["Anemia"] += 1;
  }



//Stroke
  if ($_POST["drooping"] == "yes") {
     $diagnosis["Stroke"] += 1;
  }


  if ($_POST["raisearms"] == "very") {
     $diagnosis["Stroke"] += 1;
  }
  if ($_POST["raisearms"] == "somewhat") {
     $diagnosis["Stroke"] += 0.5;
  }


  if ($_POST["speech"] == "unable") {
     $diagnosis["Stroke"] += 1;
     $diagnosis["Concussion"] += 1;
     $diagnosis["Brain Tumor"] += 1;
  }
  if ($_POST["speech"] == "slurred") {
     $diagnosis["Stroke"] += 1;
     $diagnosis["Concussion"] += 0.5;

  }


//Concussion
  if ($_POST["confusion"] == "often") {
     $diagnosis["Concussion"] += 1;
     $diagnosis["Brain Tumor"] += 1;
     $diagnosis["Brain Aneurysm"] += 1;
  }
  if ($_POST["confusion"] == "sometimes") {
     $diagnosis["Concussion"] += 0.5;
     $diagnosis["Brain Aneurysm"] += 0.5;
  }


  if ($_POST["consciousness"] == "yes") {
     $diagnosis["Concussion"] += 2;
     $diagnosis["Brain Aneurysm"] += 1;
  }

  if ($_POST["headtrauma"] == "yes") {
     $diagnosis["Concussion"] += 2;
  }
  if ($_POST["headtrauma"] == "no") {
     $diagnosis["Concussion"] += -1;
  }

  if ($_POST["vomiting"] == "often") {
     $diagnosis["Concussion"] += 1;
     $diagnosis["Brain Aneurysm"] += 1;
     $diagnosis["Glaucoma"] += 0.5;
  }
  if ($_POST["vomiting"] == "often") {
     $diagnosis["Concussion"] += 0.5;
     $diagnosis["Glaucoma"] += 0.5;
  }

//Brain Tumor
  if ($_POST["headachetype"] == "increasing") {
     $diagnosis["Brain Tumor"] += 1;
  }
  if ($_POST["headachetype"] == "sudden") {
     $diagnosis["Brain Aneurysm"] += 2;
     $diagnosis["Glaucoma"] += 2;
  }

  if ($_POST["lossfeeling"] == "both") {
     $diagnosis["Brain Tumor"] += 1;
  }
  if ($_POST["lossfeeling"] == "one") {
     $diagnosis["Brain Tumor"] += 0.5;
  }

  if ($_POST["balance"] == "yes") {
     $diagnosis["Brain Tumor"] += 1;
     $diagnosis["Brain Aneurysm"] += 1;
  }

  if ($_POST["seizure"] == "yes") {
     $diagnosis["Brain Tumor"] += 1;
  }
  if ($_POST["balance"] == "yes") {
     $diagnosis["Brain Aneurysm"] += 2;
  }

  if ($_POST["behavior"] == "great") {
     $diagnosis["Brain Tumor"] += 1;
  }
  if ($_POST["behavior"] == "slight") {
     $diagnosis["Brain Tumor"] += 0.5;
  }



//Brain Aneurysm
  if ($_POST["stiffneck"] == "yes") {
     $diagnosis["Brain Aneurysm"] += 2;
  }
  if ($_POST["visionchange"] == "double") {
     $diagnosis["Brain Aneurysm"] += 1;
  }
  if ($_POST["visionchange"] == "blurry") {
     $diagnosis["Brain Aneurysm"] += 1;
     $diagnosis["Glaucoma"] += 1;
  }


//Glaucoma
  if ($_POST["halos"] == "yes") {
     $diagnosis["Glaucoma"] += 2;
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



echo "<li>". "Note that this program does not give an official diagnosis. Please consult a trained medical professional if you have concerns about a serious condition." ."</li>";

?>
