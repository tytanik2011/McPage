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
            McPage
        </header>
        <nav>
            <ul>
                <li id="home"><a href="">Strona Główna</a></li>
                <li id="team"><a href="">Ekipa</a></li>
                <li id="shop"><a href="" target="_blank">Sklep</a></li>
                <li class="liHidden" aria-label="hidden"></li>
                <li id="contact"><a href="">Kontakt</a></li>
            </ul>
        </nav>
        <section>
            <article class="left">
                <h1>Nasz Serwer</h1>
                <p><img src="images/minecraft-174188.jpeg" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque interdum sollicitudin. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas semper magna quis felis gravida mattis. Sed ac laoreet mauris, congue efficitur sem. Suspendisse pellentesque ex eget urna laoreet, nec fermentum est rutrum. Duis pharetra tempus lobortis. Donec euismod nulla sapien, sit amet hendrerit mauris tempus a. Maecenas libero quam, egestas et dictum nec, vulputate vitae erat. Duis dignissim odio nulla, a dignissim orci lobortis et. Morbi ut nisi nibh. Maecenas eget mauris eros. Fusce pretium faucibus lacus, sit amet faucibus libero laoreet non. Curabitur molestie elit quam, condimentum viverra neque commodo sit amet. Etiam sed nisi nunc. Sed sodales nisi a malesuada pulvinar.</p>
                <!--<h2>Mniej ważny nagłówek</h2>
                <p>Morbi auctor libero non felis hendrerit tristique varius a urna. Donec et lacus sit amet ligula ornare hendrerit id vel sem. Praesent ut placerat velit. Vivamus vulputate, nibh placerat congue mattis, ligula lacus vestibulum erat, id placerat neque odio eu dui. Aliquam dignissim feugiat dui, a auctor eros volutpat quis. Aliquam arcu eros, auctor eget tempor sit amet, ullamcorper non nulla. Curabitur accumsan felis quis leo molestie aliquet. Suspendisse porttitor iaculis mauris at pellentesque.</p>
                <h2>Inny mniej ważny nagłowek</h2>
                <p>Quisque sodales elit justo, non varius odio aliquam vel. Donec orci urna, pulvinar at turpis eget, semper pretium magna. Nulla bibendum scelerisque malesuada. Integer ac egestas enim. Mauris sit amet orci dolor. Praesent vel mauris sollicitudin, vestibulum enim semper, dictum quam. Donec velit risus, commodo at imperdiet in, elementum vel sem. Fusce vulputate urna quis ante maximus, ac auctor metus pretium. Morbi dictum lectus in consequat lacinia. Etiam pretium elit nulla, et tincidunt est rhoncus quis. Fusce dictum ante sit amet accumsan elementum. Nullam est urna, ullamcorper vel sem ut, pellentesque molestie lorem.</p>-->
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