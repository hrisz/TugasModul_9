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
    
    <!-- Input gambar di form -->

    <form action="latihan_2.2.php" method="POST" enctype="multipart/form-data">
        File : <input type="file" name="file_1">
    <br><br>
    <form action="latihan_2.2.php" method="POST" enctype="multipart/form-data">
        File : <input type="file" name="file_2">
    <br><br>
    <form action="latihan_2.2.php" method="POST" enctype="multipart/form-data">
        File : <input type="file" name="file_3">
    <br><br>
    <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>