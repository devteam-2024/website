<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHS Register</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/logos/favicon-32x32.png">
    <link rel="stylesheet" href="/test.css">
</head>
<body>
    <header style="height: 64.4px;">
        <a href="/"><img src="/logos/logo_with_text_light.png" width="150px" id="logo" alt="Logo"></a>
    </header>

    

    <main id="register">
        <form action="#" method="post">
            <label class="title"><h1>Kontenregistrierung</h1></label>
            <label for="firstName"class="center">Vorname:</label>
            <input name="firstName" class="regField" type="text" placeholder="Dein Vorname" required>
            <label for="lastName"class="center">Nachname:</label>
            <input name="lastName" class="regField" type="text" placeholder="Dein Nachname" required>
            <label for="mail" class="center">E-Mail Adresse:</label>
            <input name="mail" class="regField" type="email" placeholder="Deine E-Mail Adresse" required>
            <label for="mailRepeat"class="center">E-Mail Adresse wiederholen:</label>
            <input name="mailRepeat" class="regField" type="email" placeholder="E-Mail Adresse wiederholen" required>
            <label for="pw" class="center">Passwort:</label>
            <input name="pw" class="regField" type="password" placeholder="Dein Passwort" required>
            <label for="pwRepeat"class="center">Passwort wiederholen:</label>
            <input name="pwRepeat" class="regField" type="password" placeholder="Passwort wiederholen" required>
            <label class="center"><button type="submit">Registrieren</button></label>
        </form>
    </main>

    <?php
        if ($_POST["firstName"]) {
            if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
                if ($_POST["pw"] === $_POST["pwRepeat"]) {
                    if (isValidPassword($_POST["pw"])) {
                        $hashed_password = password_hash($_POST["pw"], PASSWORD_DEFAULT);
                        $pdo = new PDO('mysql:host=localhost;dbname=website', 'root', 'Nara337897#');
                        $statement = $pdo->prepare("INSERT INTO users (email, pw, vorname, nachname) VALUES (?, ?, ?, ?)");
                        $statement->execute(array($_POST["mail"], $hashed_password, $_POST["firstName"], $_POST["lastName"]));   
                        echo "Successfully registered!";
                    } else {
                        echo "PASSWORT!!!!";
                    }
                } else {
                    echo "PW falsch";
                }
            } else {
                echo "Ungültige E-Mail Adresse";
            }
            
        }

        function isValidPassword($password) : bool {
            $regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/";
            if (preg_match($regex, $password, $matches)) {
                return true;
            } else {
                return false;
            }
        }
    ?>
</body>
</html>