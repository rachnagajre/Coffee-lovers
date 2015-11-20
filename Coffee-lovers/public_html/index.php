<!--Author: Team 6-->
<!DOCTYPE html>
<html>
    <head>
        <title> Coffee Lovers </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style3.css">
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
                <img class="box black" src="./image/mobile-coffee.jpg">
                <img class="box red" src="./image/coffeelate.jpg">
                <img class="box yellow" src="./image/coverphoto-3.jpe">
                <img class="box orange" src="./image/icecoffee.jpg">
                <img class="box purple" src="./image/coverphoto-5.jpe">
            </div>

        </div>

        <?php
        include("pageFooter.php");
        ?>

        <!-- page footer layout -->

    </body>
</html>
