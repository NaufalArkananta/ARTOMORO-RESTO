<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleprofile.css">
</head>
<body>
    <?php include "nav.php"; 
    echo "Username: " . $_SESSION["username_pelanggan"] . "<br>";
    echo "ID Pelanggan: " . $_SESSION["id_pelanggan"] . "<br>";
    ?>
</body>
</html>