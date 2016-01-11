<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Stick the Internet to your fridge." />
    <title>MagneticHTML</title>
    <base target="_blank" />
    <script src="assets/scripts.js"></script>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/tags.css" />
  </head>
  <body>

    <header>
      <h1 class="tags">
        <span>&lt;h1&gt;</span>
        <span class="w">Magnetic</span>
        <span class="w">HTML</span>
        <span class="w">tiles</span>
        <span>&lt;/h1&gt;</span>
      </h1>
      <p class="tags">
        <span>&lt;p&gt;</span>
        <span class="w">Stick</span>
        <span class="w">the</span>
        <span class="w">Internet</span>
        <span class="w">to</span>
        <span class="w">your</span>
        <span class="w">fridge</span>
        <span>&lt;/p&gt;</span>
      </p>
    </header>

    <section>
      <h2>
        <a class="button" href="http://amzn.to/1G66iB5">$9.99 with Amazon Prime!</a>
      </h2>


      <p class="images">
        <a href="http://amzn.to/1G66iB5"><img src="assets/img/scatter.jpg" alt="Scattered HTML tiles" /></a>
      </p>

      <p>Made in the USA, and packed and shipped by <a href="http://robertakarobin.com">me</a> from an apartment near Washington, DC. Tiles are .375&quot; (~1cm) tall.</p>

      <p><a href="http://amzn.to/1G66iB5"><img src="assets/img/sheet.jpg" alt="Sheet of HTML tiles" /></a></p>
    </section>

    <section>
      <h2 class="tags"><span class="w">About</span></h2>
      <p>Magnetic HTML is inspired by my <a href="http://robertakarobin.com" target="_blank">career</a> teaching web development: I ask students to recreate <a href="http://play.magnetichtml.com/belair" target="_blank">a simple webpage</a> using <a href="http://imgur.com/gallery/F8aER/new" target="_blank">wooden tiles</a>.</p>
      <p>Each set includes the tags junior web designers are most likely to use; excluded are the tags junior web designers are most likely to abuse (like &lt;hr/&gt;, tables, and more than one &lt;br/&gt;).</p>
      <p>A great gift for web developers, designers, and anyone else who spends their life on the Internet.</p>

      <p><a href="http://amzn.to/1G66iB5"><img src="assets/img/fridge_full.jpg" alt="HTML tiles on the fridge" /></a></p>
    </section>

    <section id="play">
      <h2 class="tags"><span class="w">Play</span></h2>
      <p>Click and drag the tiles to play with a working virtual prototype of a Magnetic HTML set.</p>
      <div id="playbox">
        <div>

<?php

require("maker/script.php");
echo tagsFromString(trim(file_get_contents("maker/tags.txt")));
?>
        </div>
      </div>
      <p><a class="button" href="http://play.magnetichtml.com">Up for a challenge?</a></p>
      <p class="important">Use virtual magnetic HTML tiles to create, save, and share <a href="http://play.magnetichtml.com">your own webpage!</a></p>
    </section>

    <section>
      <h2 class="tags"><a class="w" href="http://robertakarobin.com">contact@robertakarobin.com</a></h2>
    </section>
  </body>
</html>
