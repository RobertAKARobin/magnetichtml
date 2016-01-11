<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Stick the Internet to your fridge." />
    <title>MagneticHTML</title>
    <script src="assets/scripts.js"></script>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>

    <div>
      <div id="intro">
        <ul class="tags">
          <li>&lt;h1&gt;</li>
          <li class="w">Magnetic</li>
          <li class="w">HTML</li>
          <li class="w">tiles</li>
          <li>&lt;/h1&gt;</li>
        </ul>
        <ul class="tags">
          <li>&lt;p&gt;</li>
          <li class="w">Stick</li>
          <li class="w">the</li>
          <li class="w">Internet</li>
          <li class="w">to</li>
          <li class="w">your</li>
          <li class="w">fridge</li>
          <li>&lt;/p&gt;</li>
        </ul>
      </div>

      <ul class="images">
        <li><a style="background-image:url('assets/img/flat.jpg');"></a></li>
        <li><a style="background-image:url('assets/img/fridge_full.jpg');"></a></li>
        <li><a style="background-image:url('assets/img/scatter.jpg');"></a></li>
      </ul>

      <div id="selfpro">
        <p class="important"><a href="http://www.amazon.com/gp/product/B01021GD7K/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B01021GD7K&linkCode=as2&tag=magnetichtmlc-20&linkId=Y7RCABVOE2MEK6ZT">Order Magnetic HTML with Amazon Prime!</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=magnetichtmlc-20&l=as2&o=1&a=B01021GD7K" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></p>
        <p>Made in the USA, and packed and shipped personally by me. Tiles are .375&quot; (~1cm) tall.</p>
      </div>
    </div>

    <div>
      <h2 class="tags"><span class="w">About</span></h2>
      <p>Magnetic HTML is inspired by my <a href="http://robertakarobin.com" target="_blank">career</a> teaching web development: I ask students to recreate <a href="http://ga-dc.github.io/belair_biography/" target="_blank">a simple webpage</a> using <a href="http://imgur.com/gallery/F8aER/new" target="_blank">wooden tiles</a>.</p>
      <p>Each set includes the tags junior web designers are most likely to use; excluded are the tags junior web designers are most likely to abuse (like &lt;hr/&gt;, tables, and more than one &lt;br/&gt;).</p>
      <p>A great gift for web developers, designers, and anyone else who spends their life on the Internet.</p>
    </div>

    <div id="play">
      <h2 class="tags"><span class="w">Play</span></h2>
      <p>Click and drag the tiles to play with a working virtual prototype of a Magnetic HTML set.</p>
      <div id="playbox"><div>

<?php

require("maker/script.php");
echo tagsFromString(trim(file_get_contents("maker/tags.txt")));
?>
      </div></div>
    </div>

    <div id="contact">
      <h2 class="tags"><span class="w">Contact</span></h2>
      <p>Feedback, questions, advice, opinions, or comments?</p>
      <p>I usually respond within 3 hours. If you've been waiting more than 24 hours, don't hesitate to contact me again. You're important!</p>
      <form method="post" action="http://contact.robertgfthomas.com/index.php" target="_blank">
        <textarea name="body" placeholder="Say hello!"></textarea>
        <input type="hidden" name="emailMe" value="robin@magnetichtml.com" />
        <input type="hidden" name="render" value="html" />
        <input type="hidden" name="subject" value="Thanks for your message!" />
        <input type="text" name="emailThem" placeholder="hello@email.com" />
        <input name="emailList" id="emailList" type="checkbox" /><label for="emailList">Add me to the email list</label>
        <div class="g-recaptcha" data-theme="light" data-sitekey="6LfQiAcTAAAAAGLPo6q0xMh1S42WUp4H1fd9cJQT"></div>
        <button type="submit">Send to robin@magnetichtml.com</button>
      </form>
    </div>

  </body>
</html>
