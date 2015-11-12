<!DOCTYPE html>
<html>
    <head>
        <title> Coffee Lovers </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>

    <body>

      <?php
      include("pagelayout.php");
      ?>

        <!-- page image section layout -->

  <div id = "section">
  <input type="radio" class="rnav black" id="slide_1" name="coins" checked>
	<input type="radio" class="rnav red"   id="slide_2" name="coins">
	<input type="radio" class="rnav yellow" id="slide_3" name="coins">
	<input type="radio" class="rnav orange" id="slide_4" name="coins">

	<div class="boxes">
	<img class="box black" src="image/mobile-coffee.jpg">
	<img class="box red" src="image/coffeelate.jpg">
	<img class="box yellow" src="image/coverphoto-3.jpe">
	<img class="box orange" src="image/icecoffee.jpg">
	<img class="box purple" src="image/coverphoto-5.jpe">
</div>

</div>

        <div id ="siteFooter">
            <p>Copyright &copy; 2015. All rights reserved. Designed by <a href="#">CoffeeLovers Admin</a> | <a href="#">Privacy Policy</a> |
<a href="https://www.facebook.com/" target="_blank">
<img src="image/socialmedia/facebook.png"
alt=" facebookicon" ></a>
<a href="https://twitter.com/" target="_blank">
<img src="image/socialmedia/twitter.png"
alt=" twittericon"/  ></a>
<a href="https://www.pinterest.com/" target="_blank">
<img src="image/socialmedia/pinterest.png"
alt=" pinteresticon"></a>
<a href="https://plus.google.com/" target="_blank">
<img src="image/socialmedia/google.png"
alt=" googleplus	icon"></a>
        </div>

        <!-- page footer layout -->

    </body>
</html>
