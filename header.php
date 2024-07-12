<!DOCTYPE html>
<html lang="en" class="windows desktop landscape">
<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>ES : <?= (!empty(explode("/", $_SERVER['REQUEST_URI'])[1])) ? ucfirst(explode("/", $_SERVER['REQUEST_URI'])[1]) : "Home"; ?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="/logos/favicon-32x32.png">
    <link rel="stylesheet" href="pricing.css">
    <link rel="stylesheet" href="/test.css">
    <link rel="stylesheet" href="support.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
</head>

<body>
<header style="height: 64.4px;">
    <a href="/"><img src="../logos/logo_transparent.png" width="150px" id="logo" alt="Logo von Tube Hosting"></a>

    <div class="center">
        <a href="/pricing" class="link">Preise</a>
        <a href="/colocation" class="link">Colocation</a>
        <a href="/support" class="link">Support</a>
        <a href="#" id="start"></a>
        <a href="<?php echo $_COOKIE["php"] ? "/logout?redirect-to=pricing" : "/user?redirect-to=pricing"; ?>"><img id="login" src="<?php echo $_COOKIE["php"] ? "/logout.svg" : "/user.svg"; ?>" width="20px"></a>
    </div>
</header>