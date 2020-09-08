<?php
$hereAPIKey = "HY42AIbJoZSVlGRz0Dn-eea-HjU-Kj1GWDLq3pp1GH4"; //PHP variables are using $ sign 
$latitude;
$longitude;

echo ("<script>console.log('blab');</script>");
echo $hereAPIKey;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Weather App</title>

  <link rel="stylesheet" href="main.css" />
  <link rel="stylesheet" href="css/weather-icons.min.css" />
  <!-- <script type="text/javascript" src="script.js" defer></script> -->
</head>

<body>
  <div id="app-wrap">
    <header>
      <input type="text" autocomplete="off" class="search" value="Ghent" placeholder="Search a city" />
    </header>
    <main>
      <section class="location">
        <div class="city">Ghent, Belgium</div>
        <div class="date">Tuesday 11 August 2020</div>
      </section>
      <div class="current">
        <div class="temp">28 <span>°c</span></div>
        <div class="weather">Rainy</div>
        <div class="hi-low">25°c / 23°c</div>
        <div id="spinner" class="loader"></div>
      </div>
    </main>

    <div class="component__weather-box">

      <div class="component__forecast-box"></div>
      <?php

      ?>
    </div>
  </div>
</body>

</html>