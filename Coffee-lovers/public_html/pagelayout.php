<!-- author: rutvi, rachna, akshata gustavo -->
<!-- page header layout -->
<?php
session_start();
include_once("config.php");
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<div id="header">
    <div class="logoDiv">
        <img class="logo" src="./image/CoffeeLoversLogo.png" alt="logo">
    </div>
    <div class="searchRightDiv">
        <div class="signInDiv">
            <a class="signInLink" href="#openSignInModal">Sign In</a>
            <a href="#" onClick="document.getElementById('cartClick').style.display = 'block';">
                <img class="cartTop" src="./image/marker20.png" title="cart-item">
            </a>
            <div id="cartClick">
                <?php
                include("homecart.php");
                ?>
            </div>
            <div id="openSignInModal" class="signInModal">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <fieldset id="signInFieldset">
                        <p>Already a member? Please sign-in or else sign-up <a href="signUp.php">here</a></p>
                        <form id="signInForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div id="divUsername">
                                <input class="signInTextBox" type="text" id="username" name="username" required placeholder="Username" />
                            </div>

                            <div id="divPassword">
                                <input class="signInTextBox" type="password" id="password" name="password" required placeholder="Password" />
                            </div>

                            <div id="divSignIn">
                                <input class="signInButton" type="submit" value="Sign-In" />
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="searchDiv">
            <input class="searchText" type="text" placeholder="Type your search query here">
            <input class="searchButton" type="submit" value="Search">

        </div>
    </div>
</div> <!--header-->

<!-- page Navigation layout -->

<div class="siteNavBar" id="siteNavBar">
    <ul>
        <li><a href="index.php">Home</a></li>
         <li>
            By Type
            <ul>
                <li><a href="TY_icedCoffee.php">Iced Coffee</a></li>
                <li><a href="TY_expresso.php">Expresso</a></li>
                <li><a href="TY_organic.php">Organic</a></li>
                <li><a href="TY_decaffeinated.php">Decaffeinated</a></li>
            </ul>
        </li>

        <li>
            By Roast
            <ul>
                <li><a href="RO_light.php">Light</a></li>
                <li><a href="RO_medium.php">Medium</a></li>
                <li><a href="RO_dark.php">Dark</a></li>
            </ul>
        </li>

        <li>
            By Region
            <ul>
                <li><a href="RE_centralAmerican.php">Central American</a></li>
                <li><a href="RE_southAmerican.php">South American</a></li>
                <li><a href="RE_indonesian.php">Indonesian</a></li>
                <li><a href="RE_african.php">African</a></li>
            </ul>
        </li>

        <li>
            Surprise Boxes
            <ul>
                <li><a href="SB_howItWorks.php">How does it work?</a></li>
                <li><a href="SB_lastBoxes.php">Last Boxes</a></li>
                <li><a href="SB_subscribe.php">Subscribe</a></li>
            </ul>
        </li>

        <li>
            Gift Cards
            <ul>
                <li><a href="GF_sendFriend.php">Send to a Friend</a></li>
                <li><a href="GF_corporateCards.php">Corporate Cards</a></li>
                <li><a href="GF_redeem.php">Redeem</a></li>
                <li><a href="GF_buyGiftCards.php">Buy Gift Cards</a></li>
            </ul>
        </li>
    </ul>
</div>
