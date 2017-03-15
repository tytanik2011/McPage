<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Rubik+Mono+One" rel="stylesheet">
    <title>McPage</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="index.php">McPage</a>
        </header>
        <nav>
            <ul>
                <li id="home" class="navItem"><a href="index.php">Strona Główna</a></li>
                <li id="team" class="navItem"><a href="ekipa.php">Ekipa</a></li>
                <li id="shop" class="navItem"><a href="" target="_blank">Sklep</a></li>
                <li class="liHidden" aria-label="hidden"></li>
                <li id="contact" class="navItem"><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
        <section>
            <article class="left">
                <div class="admins">
                    <h3>Administratorzy</h3>
                    <div class="heads">
                        <div class="head">
                            <img src="https://mcapi.ca/avatar/Yive" />
                            <p>Yive</p>
                        </div>
                        <div class="head">
                            <img src="https://mcapi.ca/avatar/Yive" />
                            <p>Yive</p>
                        </div>
                        <div class="head">
                            <img src="https://mcapi.ca/avatar/Yive" />
                            <p>Yive</p>
                        </div>
                    </div>
                </div>
                <div class="mods">
                <h3>Moderatorzy</h3>
                    <div class="heads">
                        <div class="head">
                            <img src="https://mcapi.ca/avatar/Yive" />
                            <p>Yive</p>
                        </div>
                        <div class="head">
                            <img src="https://mcapi.ca/avatar/Yive" />
                            <p>Yive</p>
                        </div>
                        <div class="head">
                            <img src="https://mcapi.ca/avatar/Yive" />
                            <p>Yive</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="right">
                <div id="caution">
                    <h3>Jakieś ważne powiadomienie</h3>
                    <p>Treść jakiegoś ważnego powiadomienia bardzo długa ponieważ to treść!</p>
                </div>
                    <?php
                        require_once 'core/serverInfo.php';
                        if($status == true){
                            echo '<span class="serverOn">Serwer włączony</span>';
                        }else{
                            echo '<span class="serverOff">Serwer wyłączony</span>';
                        }
                        echo '<span class="ip">IP: ' . $ip . '</span>';
                    ?>
                <div id="serverInfo">
                    <div id="playersCount">
                        <?php
                            echo '<p>Graczy online: ' . $online . "/" . $max;
                        ?>
                    </div>
                    <!-- NIEAKTYWNA SEKCJA Z GRACZAMI ONLINE
                    <div id="playersHeads">
                        <img src="https://mcapi.ca/avatar/Yive" />
                        <img src="https://mcapi.ca/avatar/Yive" />
                        <img src="https://mcapi.ca/avatar/Yive" />
                        <img src="https://mcapi.ca/avatar/Yive" />
                        <img src="https://mcapi.ca/avatar/Yive" />
                        <img src="https://mcapi.ca/avatar/Yive" />
                        <img src="https://mcapi.ca/avatar/Yive" />
                    </div>
                    -->
                </div>
            </article>
        </section>
        <footer>
            <p class="pHidden" aria-label="hidden"></p>
            <p>2017 &copy; Neg737 Studio.
            <!--ZAKAZ EDYCJI--><?php require_once 'core/inc.php';?><!--KONIEC ZAKAZU EDYCJI-->