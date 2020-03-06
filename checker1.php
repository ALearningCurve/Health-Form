<?php

  $diagnosis = [
    "Common Cold" => 0,
    "Flu" => 0,
    "Pneumonia" => 0,
    "Whooping Cough" => 0,
    "Tuberculosis" => 0,
    "Mild Allergies" => 0,
    "Severe Allergies" => 0,
    "Brain Aneurysm" => 0,
    "Brain Tumor" => 0,
    "Alzheimer's" => 0,
    "Concussion" => 0,
    "Inner Ear Infection" => 0,
    "Glaucoma" => 0,
    "Sinus Infection" => 0,
    "Anemia" => 0,
    "Dehydration" => 0,
    "Hypothyroidism" => 0,
    "Rheumatoid Arthritis" => 0,
    "Tetanus" => 0,
    "Gingivitis" => 0,
    "Blepharitis" => 0,
    "Uveitis" => 0,
    "Outer Ear Infection" => 0,
    "stroke" => 0,
  ];





  // ears
  if ($_POST["earache"] == "y") {
    $diagnosis["Inner Ear Infection"] += 1;
    $diagnosis["Sinus Infection"] += 1;
    $diagnosis["Outer Ear Infection"] += 1;
  }

  if ($_POST["hearingloss"] == "y") {
      $diagnosis["Brain Tumor"] += 1;
      $diagnosis["Inner Ear Infection"] += 1;
      $diagnosis["Outer Ear Infection"] += 1;
    }

  if ($_POST["eardischarge"] == "y") {
      $diagnosis["Inner Ear Infection"] += 1;
      $diagnosis["Outer Ear Infection"] += 1;
    }

  if ($_POST["clog"] == "y") {
      $diagnosis["Sinus Infection"] += 1;
      $diagnosis["Outer Ear Infection"] += 1;
    }

  if ($_POST["itchyear"] == "y") {
      $diagnosis["Mild Allergies"] += 1;
      $diagnosis["Outer Ear Infection"] += 1;
    }

  if ($_POST["ringing"] == "y") {
      $diagnosis["Concussion"] += 1;
      $diagnosis["Inner Ear Infection"] += 1;
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
      $diagnosis["Mild Allergies"] += 1;
      $diagnosis["Severe Allergies"] += 1;
    }

  if ($_POST["drymouth"] == "y") {
      $diagnosis["Dehydration"] += 1;
    }

  if ($_POST["bumpytongue"] == "y") {
      $diagnosis["Tuberculosis"] += 1;
    }

  if ($_POST["vomit"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Concussion"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Inner Ear Infection"] += 1;
      $diagnosis["Severe Allergies"] += 1;
    }

  if ($_POST["appetite"] == "y") {
        $diagnosis["Tuberculosis"] += 1;
        $diagnosis["Hypothyroidism"] += 1;
        $diagnosis["Rheumatoid Arthritis"] += 1;
      }

  if ($_POST["tightjaw"] == "y") {
        $diagnosis["Rheumatoid Arthritis"] += 1;
        $diagnosis["Tetanus"] += 1;

      }

  if ($_POST["toothache"] == "y") {
      $diagnosis["Gingivitis"] += 1;
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
      $diagnosis["Mild Allergies"] += 1;
      $diagnosis["Severe Allergies"] += 1;
    }

  if ($_POST["wateryeyes"] == "y") {
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Severe Allergies"] += 1;
      $diagnosis["Mild Allergies"] += 1;
      $diagnosis["Blepharitis"] += 1;

    }

  if ($_POST["visionloss"] == "y") {
      $diagnosis["Brain Aneurysm"] += 1;
      $diagnosis["Glaucoma"] += 1;
      $diagnosis["Uveitis"] += 1;
      $diagnosis["Stroke"] += 1;
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
      $diagnosis["Alzheimer's"] += 1;
    }

  if ($_POST["dizzy"] == "y") {
      $diagnosis["Concussion"] += 1;
      $diagnosis["Anemia"] += 1;
      $diagnosis["Dehydration"] += 1;
      $diagnosis["Severe Allergies"] += 1;
    }

  if ($_POST["hair"] == "y") {
      $diagnosis["Hypothyroidism"] += 1;
    }

  if ($_POST["bumps"] == "y") {
      $diagnosis["Severe Allergies"] += 1;
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
      $diagnosis["Mild Allergies"] += 1;
      $diagnosis["Stroke"] += 1;
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
      $diagnosis["Inner Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
      $diagnosis["Rheumatoid Arthritis"] += 1;
      $diagnosis["Tetanus"] += 1;

    }

  if ($_POST["itchyskin"] == "y") {
        $diagnosis["Severe Allergies"] += 1;
      }





  //nose
  if ($_POST["breathing"] == "y") {
      $diagnosis["Pneumonia"] += 1;
      $diagnosis["Anemia"] += 1;
      $diagnosis["Severe Allergies"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Tetanus"] += 1;
    }

  if ($_POST["runny"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Sinus Infection"] += 1;
      $diagnosis["Mild Allergies"] += 1;
    }

  if ($_POST["stuffy"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Flu"] += 1;
      $diagnosis["Whooping Cough"] += 1;
      $diagnosis["Inner Ear Infection"] += 1;
      $diagnosis["Sinus Infection"] += 1;
      $diagnosis["Mild Allergies"] += 1;
    }

  if ($_POST["bloodynose"] == "y") {
      $diagnosis["Common Cold"] += 1;

    }

  if ($_POST["itchynose"] == "y") {
      $diagnosis["Common Cold"] += 1;
      $diagnosis["Mild Allergies"] += 1;
    }

  if ($_POST["nosepain"] == "y") {
      $diagnosis["Common Cold"] += 1;
    }

  if ($_POST["halos"] == "y") {
        $diagnosis["Glaucoma"] += 1;
      }

  $_POST["please_work"] = "please work";


  // Sort the arrrrrrrr by the values in the arr in descending order
  arsort($diagnosis);
  // Output all of the diagnosis and the value in dict
  // find the most likely diagnosis based on highest # in dict
  // echo "<ol>";
  // foreach (array_keys($diagnosis) as $key){
  //   // only shows the ones with likelihood more than 0
  //   if ($diagnosis[$key] >0){
  //       echo "<li>". $key ." with number weight ". $diagnosis[$key] ."</li>";
  //   }
  // }
  // echo "</ol>";
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnostic</title>

    <!-- This is the bootstrap css file --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- This is the local css file --> <link rel="stylesheet" href="/css/diagnostic.css">
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

  <!-- Here the questions will inserted from the other html files fr the specific diagnostics -->
  <div class="container my-3">
    <h1> Extended Analysis</h1>
    <h2> Please answer the questions below. If you are unsure of how to answer a question, leave it blank.</h2>
    <form class="my-5 needs-validation" method="post" action="FinalChecker.php" novalidate>

    <!-- This hidden field carries over the results from the first form to the second one -->
    <input type="hidden"
      id="prev_diagnosis"
      name="prev_diagnosis"
      value="<?php print base64_encode(serialize($diagnosis)) ?>">
  <?php
    /**
    * Uses the $diagnosis array to give out secondary forms for each
    * Diesease with over one question found
    */
    function import_html($diagnosis) {
      $repeated_values = array();
      $not_repeated = 1;
      foreach (array_keys($diagnosis) as $key){

        // only shows the ones with likelihood more than 0

        if ($diagnosis[$key] >0){
          // The space must be removed due to our file naming comvention
          // As otherwise the keys with spces in them would not have resulting files
          $spaceless_key = str_replace(" ", "", $key);
          $file = fopen("SpecificDiagnostics/Diagnostic".$spaceless_key.".html", "r");

          // This if is mandatory as fopen() returns false for a non existant file
          // Otherwise the program would infinitly loop and freeze up the server
          if ($file) {
            while(!feof($file)) {
              $line = fgets($file);
              // Checks to see if the block is repeated
              foreach ($repeated_values as $value){
                if (strpos($line, "{" . $value . "}-->")) {
                  $not_repeated = 0;
                }
              }


              if ($not_repeated) {
                $start =  strpos($line, "{");
                $end =  strpos($line, "}-->");
                if ($start and $end){
                  $repeated_values[] = substr ($line, $start+1, $end-$start-1);
                }
              }


              // Gives the question or waits until the end of the set to start giving again
              if ($not_repeated == 1) {
                echo $line ;
              } else if (strpos($line, "|end|-->")) {
                $not_repeated = 1;
              }
            }
          fclose($file);
          }
        }
      }
      // Echos out all of the values that have been asked already (just for testing)
      //foreach ($repeated_values as $value){echo "<h1>" . $value . "</h1>";}

    }
    @import_html($diagnosis);
  ?>
  <button type="submit" class="btn btn-secondary my-3">Submit!</button>
</form>
</div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!-- Links to Bootstrap JavaScript files so that the site works-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
