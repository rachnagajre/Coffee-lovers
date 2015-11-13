<!-- page header layout -->
<div id="header">
    <div class="logoDiv">
        <img class="logo" src="./image/CoffeeLoversLogo.png" alt="logo">
    </div>
    <div class="searchRightDiv">
        <div class="signInDiv">
            <a class="signInLink" href="#openSignInModal">Sign In</a>
            <a href="#cartClick">
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
                <li><a href="icedCoffee.php">Iced Coffee</a></li>
                <li>Expresso</li>
                <li>Organic</li>
                <li>Decaffeinated</li>
            </ul>
        </li>

        <li>
            By Roast
            <ul>
                <li>Light</li>
                <li>Medium</li>
                <li>Dark</li>
            </ul>
        </li>

        <li>
            By Region
            <ul>
                <li>Central American</li>
                <li>South American</li>
                <li>Indonesian</li>
                <li>African</li>
            </ul>
        </li>

        <li>
            Surprise Boxes
            <ul>
                <li>How does it work?</li>
                <li>Last Boxes</li>
                <li>Subcscribe</li>
            </ul>
        </li>

        <li>
            Gift Cards
            <ul>
                <li>Send to a Friend</li>
                <li>Corporate Cards</li>
                <li>Redeem</li>
                <li>Buy Gift Cards</li>
            </ul>
        </li>
    </ul>
</div>
