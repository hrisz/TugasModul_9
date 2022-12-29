<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Latihan 2</h2>
    <?php

    // Pengolahan upload file pertama

    $file_name_1=$_FILES["file_1"]["name"];
    $tmp_directory=$_FILES["file_1"]["tmp_name"];
    copy($tmp_directory,"C:/upload/$file_name_1");
    echo("Nama file 1 : <b> $file_name_1 </b>");
    echo("<br>");

    // Pengolahan upload file kedua

    $file_name_2=$_FILES["file_2"]["name"];
    $tmp_directory=$_FILES["file_2"]["tmp_name"];
    copy($tmp_directory,"C:/upload/$file_name_2");
    echo("Nama file 2 : <b> $file_name_2 </b>");
    echo("<br>");

    // Pengolahan upload file ketiga
    
    $file_name_3=$_FILES["file_3"]["name"];
    $tmp_directory=$_FILES["file_3"]["tmp_name"];
    copy($tmp_directory,"C:/upload/$file_name_3");
    echo("Nama file 3 : <b> $file_name_3 </b>");

    // Jika tidak ingin menyimpan hasil upload ke directory, kode "copy($tmp_directory,"C:/upload/$file_name");" bisa dihapus

    ?>
</body>
</html>