<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas dan Volume</title>
</head>
<body>
    <?php
        require_once 'libfungsi.php';
    ?>

    <h1>
        Luas Segitiga : <?= stiga(16,17);?>
    </h1>
    <hr>
    <h1>
        Luas Persegi Panjang : <?= ppanjang(5,7);?>
    </h1>
    <hr>
    <h1>
        Volume Kubus : <?= kbs(16); ?>
    </h1>
    <hr>
    <h1>
        Volume balok : <?= blk(5,6,7); ?>
    </h1>
</body>
</html>