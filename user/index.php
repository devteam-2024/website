<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHS Login</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/logos/favicon-32x32.png">
    <link rel="stylesheet" href="/test.css">
</head>
<body>
    <header style="height: 64.4px;">
        <a href="/"><img src="/logos/logo_with_text_light.png" width="150px" id="logo" alt="Logo"></a>
    </header>

    <main id="register">
        <form action="#" method="post">
            <label class="center"><h1>Anmelden</h1></label>
            <label for="mail" class="center">E-Mail Adresse:</label>
            <input name="mail" class="regField center" type="email" placeholder="Deine E-Mail Adresse">
            <label for="password" class="center">Passwort:</label>
            <input name="password" class="regField center" type="password" placeholder="Dein Passwort">
            <label class="center">
                <button type="submit"><h3>Anmelden</h3></button>
            </label>
            <hr style="width: 100%;">
            <label class="center">Noch kein Konto? Dann registriere dich noch heute!</label>
            <label class="center"><button type="button" onclick="redirectToRegister()"><h3>Registrieren</h3></button></label>
        </form>
    </main>

    <script>
        function redirectToRegister() {
            window.location.replace("http://localhost/user/register.php");
        }
    </script>
</body>
</html>

<?php
    if ($_POST["mail"]) {
        if ($_POST["password"]) {
            $mail = $_POST["mail"];
            $password = $_POST["password"];
            $pdo = new PDO('mysql:host=localhost;dbname=website', 'root', 'Nara337897#');
            $statement = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $statement->execute(array($_POST["mail"]));
            $ergebnisse = $statement->fetchAll()[0];
            if (password_verify($password, $ergebnisse["pw"])) {
                $name = $ergebnisse["vorname"] ." ". $ergebnisse["nachname"];
                setcookie("php", rand(5,50), time() + 360000, "/");
                header("Location: account.php");
            } else {
                echo "PW falsch";
            }
        }
    }
?>