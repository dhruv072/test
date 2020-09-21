<!DOCTYPE html>
<html>

<head>
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <script src="deck.js"></script>
</head>

<body>
    <?php
     session_start(); 
     //$_SESSION = []; //Form reset debug
    ?>

    <header class="nav_bar">
        <nav class="navbar">
            <ul class="nav_links">
                <li class="home"><a href="#game_section">GAME</a></li>
                <li class="tutorial"><a href="#section_rules">RULES</a></li>
                <li class="about"><a href="#section_about">ABOUT US</a></li>
            </ul>
        </nav>
        <?php
                if (isset($_SESSION['username'])) {
                    echo "<a class='cta' href='database\\logout.php'><button class='login' style='width:auto'>";
                    echo "LOGOUT";
                } else {
                    echo "<a class='cta'><button class='login' onclick=\"document.getElementById('id01').style.display='block'\" style='width:auto' id='login'>";
                    echo "Login"; 
                }
                ?>
        </button></a>
                

    </header>
    <div class="game_space" id="game_section">
        <div class="game_part">
            <?php
            if (isset($_SESSION['username'])) {
            echo "<button onclick=\"this.style.visibility='hidden'; startGame()\" id='game' class='play'>PLAY</Button>";
            }
            else {
            echo "<button id='game' class='play'>LOGIN TO PLAY!</Button>";
            }
                ?>
            <div>
                <div id=dealerSide1 class="dCards"> </div>
                <div id=dealerSide2 class="dCards"> </div>
                <div id=dealerSide3 class="dCards"> </div>
                <div id=dealerSide4 class="dCards"> </div>
                <div id=dealerSide5 class="dCards"> </div>
                <div id=dealerSide6 class="dCards"> </div>
            </div>

            <button onclick="playerTurn()" id="hit" value="HIT" class="action">HIT</button>
            <button onclick="playerStand()" id="stand" value="STAND" class="action">STAND</button>
            <button onclick="location.reload();" id="retry" value="RETRY" class="retry">RETRY</button>

            <div>
                <div id=playerSide1 class="pCards"> </div>
                <div id=playerSide2 class="pCards"> </div>
                <div id=playerSide3 class="pCards"> </div>
                <div id=playerSide4 class="pCards"> </div>
                <div id=playerSide5 class="pCards"> </div>
                <div id=playerSide6 class="pCards"> </div>
            </div>
        </div>
    </div>
    <div class="rule_nav">
        <span class="rulesnav ,position2, rborder">
            <ul>
                <a onclick="document.getElementById('id03').style.display='block'" style="width:auto" class="myhover">
                    <li><u>Cards Rules</u></li>
                </a> <br>
                <a onclick="document.getElementById('id04').style.display='block'" style="width:auto" class="myhover">
                    <li><u>Hitting Rules</u></li>
                </a> <br>
                <a onclick="document.getElementById('id05').style.display='block'" style="width:auto" class="myhover">
                    <li><u>standing Rules</u></li>
                </a> <br>
                <a onclick="document.getElementById('id06').style.display='block'" style="width:auto" class="myhover">
                    <li><u>surrender</u></li>
                </a> <br>
            </ul>
        </span>
        <span class="rules" id="section_rules">
            <h2>THE BASIC RULES WHEN PLAYING BLACKJACK:</h2>
            <p> </p>
            <ol>
                <li>
                    <p>Blackjack starts with players making bets.</p>
                </li>
                <li>
                    <p>Dealer deals 2 cards to the players and two to himself (1 card face up, the other face down).
                    </p>
                </li>
                <li>
                    <p>Blackjack card values: All cards count their face value in blackjack. Picture cards count as
                        10 and <br> the acecan count as either 1 or 11. Card suits have no meaning in blackjack. The
                        total of any hand <br>is the sum of the card values in the hand</p>
                </li>
                <li>
                    <p>Players must decide whether to stand, hit, surrender, double down, or split.</p>
                </li>
                <li>
                    <p>The dealer acts last and must hit on 16 or less and stand on 17 through 21.</p>
                </li>
                <li>
                    <p>Players win when their hand totals higher than dealer's hand, or they have 21 or less when
                        <br> the dealer busts &nbsp; (i.e., exceeds 21).
                    </p>
                </li>
            </ol>
        </span>




        </section>

    </div>

    <?php
    if (isset($_SESSION['username'])) {
        echo "<form onclick='database\\logout.php' method='POST'>";
        echo "</form>";
    } else {
        echo "<div id='id01' class='modal'>";
        echo "    <form class='model-content' action='database\\validate.php' method='POST'>";
        echo "        <div class='close-sign'>";
        echo "            <span onclick=\"document.getElementById('id01').style.display='none'\" title='Close Modal' class='close'>
                    &times";
        echo "            </span> </div>";
        echo "        <img src='WebPhotos\blackjack7.jpg' alt='logo' class='profile'>";
        echo "        <div>";
        echo "           <label for='uname'> Username</label><br>";
        echo "            <input input type='text' name='nm' required='required' placeholder='Enter Username'><br><br>";
        echo "            <label for='password'> Password</label><br>";
        echo "           <input input type='password' name='userpassword' id='pass' required
                    placeholder='Enter your password pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' minlength='10' maxlength='10' '><br><br>";


        echo "            <button input type='submit' value=Login name='Login' class='loginbtn'> Login </button>";
        echo "            <p class='regi-position' onclick=\"document.getElementById('id02').style.display='block'\";>Don't have an account? Sign up here!<p>";
        echo "        </div>";

        echo "     </form>";
        echo "</div>";
    } ?>
    <div id="id02" class="modal">

        <form class="model-content" action="database\register.php" method="POST">

            <div class="close-sign">
                <span onclick="document.getElementById('id02').style.display='none'" title="Close Modal" class="close">
                    &times;
                </span>
            </div>
            <img src="WebPhotos\blackjack7.jpg" alt="logo" class="profile">



            <div>
                <label for="nm"> Username</label><br>
                <input type="text" name="nm" required><br><br>
                <label for="address">E-Mail</label><br>
                <input type="text" name="address" required><br><br>
                <label for="password"> Password</label><br>
                <input type="password" name="userpassword" id="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="10" maxlength="10"><br><br>
                <!--<label for="password"> Password</label><br>
                <input type="password" placeholder="Enter your password" name="password" required><br><br>  -->
            </div>
            <button type="submit" class="loginbtn"> REGISTER </button>

        </form>
    </div>


    <div id="id03" class="cards-rules">
        <div class="cards-rules-content">
            <div class="close-sign">
                <span onclick="document.getElementById('id03').style.display='none'" title="Close Modal" class="close">
                    &times;
                </span>
            </div>


            <h1 style="font-size: 60px ;"> Card Rules</h1>
            <img src="WebPhotos\card-value.png" alt="card_value" class="rules_img">
            <p style="font-size: 28px; ">
                All cards count their face value in blackjack. Picture cards count as 10 and the ace can count as either
                1 or 11.
                Card suits have no meaning in blackjack. The total of any hand is the sum of the card values in the
                hand. A hand
                containing a 4-5-8 totals 17. Another containing a queen-5 totals 15. It is always assumed that the ace
                counts as
                11 unless so doing would make your hand total exceed 21, in which case the ace reverts to a value of 1.
            </p>
        </div>



    </div>

    <div id="id04" class="cards-rules">
        <div class="cards-rules-content">
            <div class="close-sign">
                <span onclick="document.getElementById('id04').style.display='none'" title="Close Modal" class="close">
                    &times;
                </span>
            </div>


            <h1 style="font-size: 60px ;"> Hitting Rules</h1>
            <img src="WebPhotos\Hit.png" alt="card_value" class="rules_img">
            <p style="font-size: 28px; ">
                This means you want the dealer to give another card to your hand. In shoe games, indicate to the dealer
                that you want a hit by making a beckoning motion with your finger or tapping the table behind your cards
                with your finger. In hand-held games, scratch the edges of the cards in your hand lightly on the felt
            </p>
        </div>



    </div>

    <div id="id05" class="cards-rules">
        <div class="cards-rules-content">
            <div class="close-sign">
                <span onclick="document.getElementById('id05').style.display='none'" title="Close Modal" class="close">
                    &times;
                </span>
            </div>


            <h1 style="font-size: 60px ;"> Standing Rules</h1>
            <img src="WebPhotos\Stand.png" alt="card_value" class="rules_img">
            <p style="font-size: 28px; ">
                This means you are satisfied with the total of the hand and want to stand with the cards you have. In
                shoe games, indicate that you want to stand by waving your hand over the cards, palm down. In hand-held
                games, tuck your cards under the chips that you have in the betting box.

            </p>
        </div>



    </div>

    <div id="id06" class="cards-rules">
        <div class="cards-rules-content">
            <div class="close-sign">
                <span onclick="document.getElementById('id06').style.display='none'" title="Close Modal" class="close">
                    &times;
                </span>
            </div>


            <h1 style="font-size: 60px ;"> Surrender</h1>
            <img src="WebPhotos\Surrender.png" alt="card_value" class="rules_img">
            <p style="font-size: 28px; ">
                This playing option is sometimes permitted. It allows a player to forfeit the hand immediately with an
                automatic loss of half the original bet. In most venues, players can surrender their initial two-card
                hand only after the dealer has checked his cards and ascertained that he doesn’t have a blackjack (known
                as late surrender). Once a player draws a card, the surrender option is no longer available. If the
                dealer has a blackjack hand, then surrender is not available.
            </p>
        </div>



    </div>
    <footer id="section_about" class="foot">
        <p>Contact information:</p>
        <a href="mailto:kanishkkargutkar123@gmail.com">kanishkkargutkar123@gmail.com</a> <br>
        <a href="mailto:marathegaurav364@gmail.com">marathegaurav364@gmail.com</a> <br>
        <a href="mailto:kawaleaditya870@gmail.com">kawaleaditya870@gmail.com</a> <br>
        <a href="mailto:mishradhruv072@gmail.com">mishradhruv072@gmail.com</a> <br>
        <p></p>
    </footer>
    <script>
    var modal1 = document.getElementById('id01');
    var modal2 = document.getElementById('id02');
    var modal3 = document.getElementById('id03');
    var modal4 = document.getElementById('id04');
    var modal5 = document.getElementById('id05');
    var modal6 = document.getElementById('id06');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal3) {
                    modal3.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal4) {
                        modal4.style.display = "none";
                    }
                    window.onclick = function(event) {
                        if (event.target == modal5) {
                            modal5.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal6) {
                                modal6.style.display = "none";
                            }
                        }
                    }
                }
            }
        }
    }
    </script>
</body>