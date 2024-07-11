<?php
    session_start();
    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);
    // ini_set("display_startup_errors", 1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHS Account</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/logos/favicon-32x32.png">
    <link rel="stylesheet" href="/test.css">
</head>
<body>
    <?php include("../header.php");?>
    
    <main>
        <?php
            if (isset($_COOKIE["php"])) {
                echo "<h1 class=\"center\">Mein Account</h1>";
            }
        ?>
    </main>
</body>
</html>