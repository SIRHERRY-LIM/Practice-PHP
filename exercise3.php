<!-- Associative array  -->

<?php

$mahasiswa = [
    [
        "name" => "Jhon Cena",
        "matric" => "0292929229",
        "email" => "jhonCena@gmail.com",
        "major" => "IT",
        "gambar" => "icon.png"
    ],

    [
        "name" => "Don Cena",
        "matric" => "0442929229",
        "email" => "DonCena@gmail.com",
        "major" => "IT",
        "gambar" => "icon.png"
    ],
    [
        "name" => "Don Cena",
        "matric" => "0442929229",
        "email" => "DonCena@gmail.com",
        "major" => "IT",
        "gambar" => "icon.png"
    ]



];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Registration</title>
</head>

<body>
    <h1>Student Registration</h1>

    <?php foreach ($mahasiswa as $m) : ?>
        <u1>
            <li>

                <img src="img/<?= $m["gambar"]; ?>">

            </li>
            <li><?php echo $m["name"] ?></li>
            <li><?php echo $m["matric"] ?></li>
            <li><?php echo $m["email"] ?></li>
            <li><?php echo $m["major"] ?></li>
            <br>
        </u1>

    <?php endforeach; ?>
</body>

</html>