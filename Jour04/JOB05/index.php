<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST" class="form-example">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"/>

        <label for="password">Password : </label>
        <input type="password" name="password" id="password" />

        <input type="submit" value="Se Connecter" />
    </form>

    <?php
    // Vérifie si l'username est = John et password est = Rambo
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username'] == 'John' && $_POST['password'] == 'Rambo'){
            echo "c'est pas ma guerre";
        }else{
            echo "votre pire cauchemar";
        }
    }

    ?>
    
</body>
</html>