<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Latihan 1</h2>
    <?php
    echo ("Click <b>refresh</b> untuk melakukan penambahan bilangan! <br>");
    // Memulai sesi
    session_start();
    // Menetapkan angka pada awal sesi
    if (!isset($_SESSION["angka"])) {
        $_SESSION["angka"]=14;
    }
    // Menambah angka awal terus menerus ketika di refresh
    else {
        $_SESSION["angka"]++;
    }
    echo "Sekarang bilangan ke <b>".$_SESSION["angka"]."</b>";
    ?>
</body>
</html>