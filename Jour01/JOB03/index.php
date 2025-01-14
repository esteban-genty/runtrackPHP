<?php
$var = [
    [
        'type' => 'string',
        'name' => 'greeting',
        'value' => 'Hello LaPlateforme!'
    ],
    [
        'type' => 'int',
        'name' => 'number',
        'value' => 42
    ],
    [
        'type' => 'float',
        'name' => 'decimal',
        'value' => 42.42
    ],
    [
        'type' => 'bool',
        'name' => 'boolean',
        'value' => true
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB-03</title>
</head>
<body>

    <h1>Tableau de variables</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($var as $variable):?>
                <td><?php echo $variable['type']?></td>
                <td><?php echo $variable['name']?></td>
                <td><?php echo $variable['value']?></td>
            </tr>
            <?php endforeach;?> 
        </tbody>
    </table>
</body>
</html>