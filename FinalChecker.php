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
    $diagnosis["Flu"] += 1;
    $diagnosis["Whooping Cough"] += 1;
    $diagnosis["Sinus Infection"] += 1;
    $diagnosis["Dehydration"] += 1;
  }
  if ($_POST["fatigue"] == "minor") {
    $diagnosis["Pneumonia"] += 0.5;
    $diagnosis["Anemia"] += 0.5;
    $diagnosis["Concussion"] += 0.5;
    $diagnosis["Common Cold"] += 0.5;
    $diagnosis["Flu"] += 0.5;
    $diagnosis["Sinus Infection"] += 0.5;
    $diagnosis["Dehydration"] += 0.5;
  }


  if ($_POST["chills"] == "sweatandshake") {
     $diagnosis["Pneumonia"] += 1;
     $diagnosis["Flu"] += 1;
     $diagnosis["Tuberculosis"] += 1;
  }
  if ($_POST["chills"] == "shake") {
     $diagnosis["Pneumonia"] += 0.5;
     $diagnosis["Flu"] += 0.5;
     $diagnosis["Tuberculosis"] += 1;
  }


  if ($_POST["temp"] == "high") {
     $diagnosis["Common Cold"] += 0.5;
     $diagnosis["Flu"] += 2;
     $diagnosis["Whooping Cough"] += 0.5;
     $diagnosis["Tuberculosis"] += 1;
  }
  if ($_POST["temp"] == "low") {
     $diagnosis["Pneumonia"] += 1;
     $diagnosis["Common Cold"] += 1;
     $diagnosis["Flu"] += 0.5;
  }


  if ($_POST["diarrhea"] == "sometimes") {
     $diagnosis["Pneumonia"] += 0.5;
     $diagnosis["Middle Ear Infection"] += 0.5;
  }
  if ($_POST["diarrhea"] == "often") {
     $diagnosis["Pneumonia"] += 1;
     $diagnosis["Middle Ear Infection"] += 1;
  }



//Anemia
  if ($_POST["heartbeat"] == "rapid") {
     $diagnosis["Anemia"] += 1;
     $diagnosis["Dehydration"] += 1;
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
     $diagnosis["Dehydration"] += 1;
  }
  if ($_POST["confusion"] == "sometimes") {
     $diagnosis["Concussion"] += 0.5;
     $diagnosis["Brain Tumor"] += 0.5;
     $diagnosis["Brain Aneurysm"] += 0.5;
     $diagnosis["Dehydration"] += 0.5;
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
     $diagnosis["Whooping Cough"] += 1;
  }
  if ($_POST["vomiting"] == "often") {
     $diagnosis["Concussion"] += 0.5;
     $diagnosis["Glaucoma"] += 0.5;
     $diagnosis["Whooping Cough"] += 1;
  }

//Brain Tumor
  if ($_POST["headachetype"] == "increasing") {
     $diagnosis["Brain Tumor"] += 1;
     $diagnosis["Flu"] += 1;
  }
  if ($_POST["headachetype"] == "sudden") {
     $diagnosis["Brain Aneurysm"] += 2;
     $diagnosis["Glaucoma"] += 2;
     $diagnosis["Flu"] += 0.5;
  }
  if ($_POST["headachetype"] == "mild") {
         $diagnosis["Common Cold"] += 1;
  }

  if ($_POST["lossfeeling"] == "both") {
     $diagnosis["Brain Tumor"] += 1;
  }
  if ($_POST["lossfeeling"] == "one") {
     $diagnosis["Brain Tumor"] += 0.5;
  }

  if ($_POST["balance"] == "some") {
     $diagnosis["Brain Tumor"] += 0.5;
     $diagnosis["Brain Aneurysm"] += 0.5;
  }

  if ($_POST["balance"] == "alot") {
       $diagnosis["Brain Tumor"] += 1;
       $diagnosis["Brain Aneurysm"] += 1;
    }

  if ($_POST["seizure"] == "yes") {
     $diagnosis["Brain Tumor"] += 1;
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



//Common Cold
  if ($_POST["bodyache"] == "very") {
         $diagnosis["Common Cold"] += 0.5;
         $diagnosis["Flu"] += 1;
  }
  if ($_POST["bodyache"] == "slightly") {
         $diagnosis["Common Cold"] += 1;
         $diagnosis["Flu"] += 0.5;
  }

  if ($_POST["coughtype"] == "wet") {
         $diagnosis["Common Cold"] += 1;
         $diagnosis["Whooping Cough"] += 1;
         $diagnosis["Tuberculosis"] += 1;
  }

  if ($_POST["sneeze"] == "often") {
         $diagnosis["Common Cold"] += 1;
         $diagnosis["Seasonal Allergies"] += 1;
  }

  if ($_POST["sneeze"] == "sometimes") {
         $diagnosis["Common Cold"] += 1;
         $diagnosis["Seasonal Allergies"] += 0.5;
  }

  if ($_POST["malaise"] == "very") {
         $diagnosis["Common Cold"] += 1;
         $diagnosis["Flu"] += 1;
  }
  if ($_POST["malaise"] == "slightly") {
         $diagnosis["Common Cold"] += 0.5;
         $diagnosis["Flu"] += 0.5;
  }

//Flu
  if ($_POST["coughtype"] == "dry") {
         $diagnosis["Flu"] += 1;
  }


//Whooping Cough
  if ($_POST["whoop"] == "yes") {
         $diagnosis["Whooping Cough"] += 3;
  }

//Tuberculosis
  if ($_POST["lesions"] == "yes") {
         $diagnosis["Tuberculosis"] += 2;

  }
  if ($_POST["neckswell"] == "yes") {
         $diagnosis["Tuberculosis"] += 2;
  }

  if ($_POST["chestpains"] == "intense") {
         $diagnosis["Tuberculosis"] += 1;
  }




  //sinus infection
  if ($_POST["difficultysmelling"] == "major") {
         $diagnosis["Sinus Infection"] += 1;
  }

  if ($_POST["difficultysmelling"] == "minor") {
         $diagnosis["Sinus Infection"] += 0.5;
  }


  //middle ear infection
  if ($_POST["irritability"] == "alot") {
         $diagnosis["Middle Ear Infection"] += 1;
  }
  if ($_POST["irritability"] == "some") {
         $diagnosis["Middle Ear Infection"] += 0.5;
  }

  if ($_POST["difficultysleeping"] == "alot") {
         $diagnosis["Middle Ear Infection"] += 1;
  }
  if ($_POST["difficultysleeping"] == "some") {
         $diagnosis["Middle Ear Infection"] += 0.5;
  }

  if ($_POST["appetite"] == "severe") {
         $diagnosis["Middle Ear Infection"] += 1;
  }
  if ($_POST["appetite"] == "some") {
         $diagnosis["Middle Ear Infection"] += 0.5;
  }

  //dehydration
  if ($_POST["darkurine"] == "very") {
         $diagnosis["Dehydration"] += 1;
  }
  if ($_POST["darkurine"] == "somewhat") {
         $diagnosis["Dehydration"] += 0.5;
  }

  if ($_POST["dryskin"] == "very") {
         $diagnosis["Dehydration"] += 1;
  }
  if ($_POST["dryskin"] == "somewhat") {
         $diagnosis["Dehydration"] += 0.5;
  }

  if ($_POST["constipation"] == "often") {
         $diagnosis["Dehydration"] += 1;
  }
  if ($_POST["constipation"] == "sometimes") {
         $diagnosis["Dehydration"] += 0.5;
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
