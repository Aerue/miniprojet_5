<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
    </head>
    <body>

        <h1>Login</h1>

        <form method="post" action="http://www.miniprojet_5.test/">

            <label for="login">Login :</label>
            <input type="text" name="login" id="login">

            <br />

            <label for="password">Password :</label>
            <input type="text" name="password" id="password">

            <br />

            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Se souvenir de moi</label>

            <br />

            <input type="submit" value="Me connecter">

        </form>

        <a href="?page=logout">Logout</a>

    </body>
</html>