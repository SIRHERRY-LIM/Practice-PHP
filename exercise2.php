<?php
$mahasiswa = ["Adam Jon", "092929220220", "IT", "AdamJon@gmail.com"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>

<body>

    <h1>Students Registration</h1>

    <ul>
        <?php foreach ($mahasiswa as $m) : ?>
            <li><?php echo $m; ?></li>
        <?php endforeach; ?>


    </ul>

</body>

</html>