<?php
$title = "Coffee";
$description ="Description of the Coffee page";


require("templates/header.php");
//require("templates/nav.php");


?>


<main class="companyContainer">

  <div class="aboutTitleContainer">
  <h1 class="aboutTitle"> LOCAL COFFEE COMPANIES</h1>
  </div>

  <div class="companyInfoContainer">
        <div class="card companyInfo" style="width: 20rem;">
      <img src="images/goodFourtune.png" class="card-img-top" alt="good fourtune">
      <div class="card-body">
        <h5 class="card-title cardHeading">GOOD FOURTUNE</h5>
        <p class="card-text cardText">Good Fortune Coffee Company is a good time. The coffee is always amazing and the vibe
        is super chill. Situated in Petone by the beach side, this is definitely a spot you should hit.
      </p>
        <a href="https://goodfortunecoffee.co.nz/" target="_blank" class="btn btn-primary websiteBtn">Visit Their Website</a>
      </div>
    </div>

    <div class="card companyInfo" style="width: 20rem;">
    <img src="images/laffare.png" class="card-img-top" alt="laffare">
    <div class="card-body">
    <h5 class="card-title cardHeading">L'AFFARE</h5>
    <p class="card-text cardText">Caffe L’affare is situated right in the heart of the cbd, you can find them on College Street.
      The cafe/roastery provides a light atmosphere with industrial amenities and excellent food.
    </p>
    <a href="https://www.laffare.co.nz/" target="_blank" class="btn btn-primary websiteBtn">Visit Their Website</a>
    </div>
    </div>

    <div class="card companyInfo" style="width: 20rem;">
    <img src="images/peoplesCoffee.png" class="card-img-top" alt="peoples coffee">
    <div class="card-body">
    <h5 class="card-title cardHeading">PEOPLES COFFEE</h5>
    <p class="card-text cardText">Peoples coffee is exactly what it says it is for the people. They go out of their way to make sure
      That they are only sourcing fair trade coffee. You can catch the team for a cuppa joe in New Town.
    </p>
    <a href="https://peoplescoffee.co.nz/" target="_blank" class="btn btn-primary websiteBtn">Visit Their Website</a>
    </div>
</div>





  </div>



</main>


<?php
require("templates/footer.php");

?>
