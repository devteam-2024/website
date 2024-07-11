<?php
    session_start();

    if (isset($_COOKIE["php"])) {
        setcookie("php", null, time() -0, "/");
        sleep(1);
        header("Location: /");
    } else {
        echo "<h1 class=\"title\">Du bist nicht eingeloggt!</h1>";
    }
