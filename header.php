<header style="height: 64.4px;">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <a href="/"><img src="../logos/logo_transparent.png" width="150px" id="logo" alt="Logo von Tube Hosting"></a>

    <div class="center">
        <a href="/pricing" class="link">Preise</a>
        <a href="/colocation" class="link">Colocation</a>
        <a href="/support" class="link">Support</a>
        <a href="#" id="start"></a>
        <a href="<?php echo $_COOKIE["php"] ? "/logout?redirect-to=pricing" : "/user?redirect-to=pricing"; ?>"><img id="login" src="<?php echo $_COOKIE["php"] ? "/logout.svg" : "/user.svg"; ?>" width="20px"></a>
    </div>
</header>