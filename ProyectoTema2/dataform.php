<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        $name = $_POST['name'];
        echo "Name of the album: " . $name;
        echo "<br>";
        $artist = $_POST['artist'];
        echo "Artist/s: " . $artist;
        echo "<br>";
        $price = $_POST['price'];
        echo "Price: " . $price;
        echo "<br>";
        $fee = $_POST['fee'];
        echo "Fee: " . $fee;
        echo "<br>";
    }
    ?>
</body>

</html>