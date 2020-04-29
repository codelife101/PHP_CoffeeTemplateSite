<?php
$title = "About";
$description ="Description of the About page";


require("templates/header.php");
//require("templates/nav.php");


?>


<main class="aboutContainer">

<div class="aboutTitleContainer">
<h1 class="aboutTitle"> WHAT WE DO</h1>
</div>

<div class="aboutImgContainer">
<img src="images/aboutImg.png" alt="aboutImg" class="aboutImg" />
</div>

<div class="aboutTextContainer">
  <p class="aboutText">We exist as a platform local to the Wellington region, to provide a service for local businesses that roast coffee.
    The idea behind creating this site was to have a space where people could come and view what local coffee companies are open for trade.
    The site will continue to exist until we are at level one status. Here we will be providing update details on what companies are currently
    allowed to do. <br /><br />

    Currently we are at level three status. Companies are allowed to trade as long as there is no contact with the public and the two metre
    distancing is applied. Most comp[anies will have a click and collect option for purchasing coffee and food, while also being able to
    provide online purchase/delivery service. <br /><br />

    Lets all come together to support our local businesses so that they can stay open and we can continue to enjoy what they have to offer.
  </p>
</div>




<!-- <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p> -->

</main>


<?php
require("templates/footer.php");

?>
