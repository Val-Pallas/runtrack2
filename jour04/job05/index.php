
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Job 05</title>
</head>
<body>
    <p style="color: blue">Faire un <code>formulaire</code> de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs &lt;input&gt; nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”.</p>
<fieldset>
    <legend>Form Rambo</legend>
    <form action="result.php" method="post">
    <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label for="pass">Password (5 characters minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="5" required>
</div>

<input type="submit" value="Sign in">
    </form>
</fieldset>
</body>
</html>