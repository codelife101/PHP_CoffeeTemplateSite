<?php
/*
        The include and require methods, finds the file you are wanting and places it where you call
        the function.
        The difference between include and require is, with include, if it can't find the file you are
        wanting, it will still continue to render everything bellow it.
        With require, it will stop running, and nothing bellow the call will be rendered.
        So you need to have a think about if what you are wanting to include is important for the site
        or not. If it is, then use require, if not, use include.
    */

    // include("templates/header.php");

$title="Home";
$description = "Description of the Home page";
require("templates/header.php");
//require("templates/nav.php");
?>


<main class=" homeContainer">


<div class="homeTextContainer">
  <h1 class="textStroke">WELLINGTON</h1>
  <h1 class="homeTextFill">SUPPORT YOU'RE</h1>
  <h1 class="textStroke">LOCAL</h1>
  <br />
  <br />
  <p class="homeText">COVID 19 has seen the closing of many local business.Now that we are in level 3,
  businesses are allowed to open for trade with certain restrictions.
  It's time to step up and support our LOCAL.<br /><br />
  To find out more navigate using the navigation bar above.    </p>
</div>

<div class="homeImgContainer">
<img src="images/homeSupport.png" alt="home coffee" class="homePageImg" />
</div>


</main>



<?php

require("templates/footer.php");



?>
