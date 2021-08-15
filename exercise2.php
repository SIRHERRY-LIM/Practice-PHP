<?php
$mahasiswa = [

    ["Adam Jon", "092929220220", "IT", "AdamJon@gmail.com"],
    ["Lewi Jon", "092929220220", "IT", "LewisJon@gmail.com"]

];

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

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <!-- <?php foreach ($mahasiswa as $m) : ?>
            <li><?php echo $m; ?></li>
        <?php endforeach; ?> -->

            <li>Name :<?= $m[0]; ?></li>
            <li> Matrix No :<?= $m[1]; ?></li>
            <li>Major :<?= $m[2]; ?></li>
            <li> Email :<?= $m[3]; ?></li>


        </ul>
    <?php endforeach; ?>
</body>

</html>