<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnostic</title>

    <!-- This is the bootstrap css file --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- This is the local css file --> <link rel="stylesheet" href="/css/diagnostic2.css">
    <style>

    html * {
      font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    h1 {
      font-size: 60px;
    }

    p {
        font-size: 15px;
        color: grey;
    }

    #warning {
      font-size: 12px;
      color: red;
    }
    #results {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #results td, #results th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #results tr:nth-child(even){background-color: #cce5ff;}

    #results tr:hover {background-color: #006fe6;}

    #results th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #004a99;
      color: white;
    }

    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="index.html">
        <img id="health-icon" src="images/health-icon.png" width="30" height="30" alt="">
        ASAP Analysis
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
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
         $diagnosis["Pneumonia"] += 1;
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
  if ($_POST["coughtype"] == "whoop") {
         $diagnosis["Whooping Cough"] += 3;
  }

//Tuberculosis
  if ($_POST["lesions"] == "yes") {
         $diagnosis["Tuberculosis"] += 2;

  }
  if ($_POST["neckswell"] == "major") {
         $diagnosis["Tuberculosis"] += 2;
  }

  if ($_POST["neckswell"] == "minor") {
         $diagnosis["Tuberculosis"] += 1;
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

    $sums = [
      "Common Cold" => 18,
      "Flu" => 16.5,


        // tiana fix total point value in coding section of report and poster

      "Pneumonia" => 9,
      "Whooping Cough" =>10,
      "Tuberculosis" => 8,
      "Seasonal Allergies" => 5,
      "Non seasonal Allergies" => 21,
      "Brain Aneurysm" => 8,
      "Brain Tumor" => 9,
      "Concussion" => 11,
      "Middle Ear Infection" => 13,
      "Glaucoma" => 6,
      "Sinus Infection" => 8,
      "Anemia" => 9,
      "Dehydration" => 8,
      "Hypothyroidism" => 7,
      "Rheumatoid arthritis" => 6,
      "Tetanus" => 6,
      "Gingivitis" => 10,
      "Blepharitis" => 14,
      "Uveitis" => 6,
    ];

    //  Uses the disease sums to give weighted percentage
    foreach (array_keys($diagnosis) as $key)
    {
      if ($sums[$key]) {
        //so things are not right

        echo $key;
        echo $sums[$key];


        $float = $diagnosis[$key]/$sums[$key] * 100;
        $float = round($float, 2);
        $diagnosis[$key] = $float;
      }
    }
    // Sort the arrrrrrrr by the values in the arr in descending order
    arsort($diagnosis);


    // Output all of the diagnosis and the value in dict
    // find the most likely diagnosis based on highest # in dict
    // Deprecated

    // echo "<h1> Results </h1> <ol>";
    // foreach (array_keys($diagnosis) as $key){
    //   // only shows the ones with likelihood more than 0
    //   if ($diagnosis[$key] >0){
    //       echo "<li>". $key ." with number weight ". $diagnosis[$key] ."</li>";
    //   }
    // }
    // echo "</ol>";

    // adapt this into the current for loop
    echo "<br> <h2> Results </h2>";
    echo '<table id="results">';
    echo  '<tr>';
    echo    '<th>Likelihood</th>';
    echo    '<th>Medical Condition Name</th>';
    echo '</tr>';
    // output data of each row
    foreach (array_keys($diagnosis) as $diag)
    {
      if ($diagnosis[$diag] > 0) {
        echo '<tr>';
        echo  '<td>'.$diagnosis[$diag].'%</td>';
        echo  '<td>'.$diag.'</td>';
        echo '</tr>';
      }
    }
  ?>

  <p> Note that this program does not give an official diagnosis. Please consult a trained medical professional if you have concerns about a serious condition. </p>

</div>
</html>
