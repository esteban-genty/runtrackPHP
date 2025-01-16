<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST" class="form-example">
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name"/>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" />

        <input type="submit" value="Envoyer" />
    </form>

    <table border='1'>
    <thead>
        <tr>
            <th>Arguments</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <!-- Boucle qui parcours $_POST et qui affiche les champs et les valeurs  -->
        <?php foreach($_POST as $champ => $valeur): ?>
        <tr>
            <td><?php echo $champ; ?></td>
            <td><?php echo $valeur; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    
</body>
</html>