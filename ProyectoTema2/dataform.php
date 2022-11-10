<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album and user details</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    echo "Name of the album: " . $name;
    echo "<br>";
    echo "<br>";

    $artist = $_POST['artist'];
    echo "Artist/s: " . $artist;
    echo "<br>";
    echo "<br>";

    $price = $_POST['price'];
    echo "Price: " . $price;
    echo "<br>";
    echo "<br>";

    $fee = $_POST['fee'];
    echo "Fee: " . $fee;
    echo "<br>";
    echo "<br>";

    $description = $_POST['description'];
    echo "Description of the album: " . $description;
    echo "<br>";
    echo "<br>";

    $type = $_POST['type'];
    echo "Type of music album: " . $type;
    echo "<br>";
    echo "<br>";

    $address = $_POST['address'];
    echo "Address: " . $address;
    echo "<br>";
    echo "<br>";

    $email = $_POST['email'];
    echo "Email: " . $email;
    echo "<br>";
    echo "<br>";

    $phonenumber = $_POST['phonenumber'];
    echo "Phone number: " . $phonenumber;
    echo "<br>";
    echo "<br>";

    $webpage = $_POST['webpage'];
    echo "Your webpage: " . $webpage;
    echo "<br>";
    echo "<br>";

    $o1 = $_POST['o1'];
    echo "Favourite music type: " . $o1;
    echo "<br>";
    echo "<br>";

    $opinion = $_POST['opinion'];
    echo "Your opinion: " . $opinion;
    echo "<br>";
    ?>
</body>

</html>