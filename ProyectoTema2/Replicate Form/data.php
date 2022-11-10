<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sulaiman">
    <meta name="generator" content="VS CODE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input your data form</title>
</head>

<body>
    <h1>Displayed data</h1>
    <?php

    $title = $_POST['Title'];
    if ($title == "Ms") {
        echo "Hello: Ms. <br>";
    } else if ($title == "Mrs") {
        echo "Hello: Mrs. <br>";
    } else if ($title == "Mr") {
        echo "Hello: Mr. <br>";
    } else if ($title == "Dr") {
        echo "Hello: Dr. <br>";
    } else if ($title == "Mx") {
        echo "Hello: Mx. <br>";
    } else if ($title == "Ind") {
        echo "Hello: Ind. <br>";
    }


    $name = $_POST['name'];
    echo "First Name: ", $name, "<br>";
    echo "<br>";

    $lastname = $_POST['lastname'];
    echo "Last Name: ", $lastname, "<br>";
    echo "<br>";

    $birth = $_POST['birth'];
    echo "Birthdate: ", $birth, "<br>";
    echo "<br>";

    $city = $_POST['city'];
    echo "City: ", $city, "<br>";
    echo "<br>";

    $region = $_POST['region'];
    if ($region == "Durham") {
        echo "Region: Durham. <br>";
    } else if ($region == "Northumberland") {
        echo "Region: Northumberland. <br>";
    } else if ($region == "LancaShire") {
        echo "Region: LancaShire. <br>";
    } else if ($region == "Yorkshire") {
        echo "Region: Yorkshire. <br>";
    } else if ($region == "Chesire") {
        echo "Region: Chesire. <br>";
    } else if ($region == "Rutland") {
        echo "Region: Rutland. <br>";
    } else if ($region == "WestMidlands") {
        echo "Region: West Midlands. <br>";
    } else if ($region == "Kent") {
        echo "Region: Kent. <br>";
    } else if ($region == "Essex") {
        echo "Region: Essex. <br>";
    } else if ($region == "Dorset") {
        echo "Region: Dorset. <br>";
    } else if ($region == "Devon") {
        echo "Region: Devon. <br>";
    } else if ($region == "Cornwall") {
        echo "Region: Cornwall. <br>";
    }
    echo "<br>";

    $code = $_POST['code'];
    echo "Postcode: ", $code, "<br>";
    echo "<br>";

    $regional = $_POST['regional'];
    echo "Regional Code: ", $regional, "<br>";
    echo "<br>";

    $subs = $_POST['subs'];
    if ($subs == "D") {
        echo "Subscription daily <br>";
    } else if ($subs == "W") {
        echo "Subscription weekly <br>";
    } else if ($subs == "Q") {
        echo "Subscription quarterly <br>";
    } else if ($subs == "M") {
        echo "Subscription monthly <br>";
    } else if ($subs == "Y") {
        echo "Subscription yearly <br>";
    } else if ($subs == "U") {
        echo "Subscription unlimited <br>";
    }
    echo "<br>";

    $sub = $_POST['sub'];
    echo "Subscription Code: ", $sub, "<br>";
    echo "<br>";

    $Science = $_POST['Science'];
    $Arts = $_POST['Arts'];
    $Literature = $_POST['Literature'];
    $Technology = $_POST['Technology'];
    $Improvement = $_POST['Improvement'];
    echo "Areas of Interest: <br>";
    if ($Science == true) {
        echo "Science <br>";
    }
    if ($Arts == true) {
        echo "Art and Crafts <br>";
    }
    if ($Literature == true) {
        echo "Literature <br>";
    }
    if ($Technology == true) {
        echo "Technology and Gadgets <br>";
    }
    if ($Improvement == true) {
        echo "Self Improvement <br>";
    }
    echo "<br>";

    $pass = $_POST['pass'];
    echo "Password: ", $pass, "<br>";
    echo "<br>";

    $card = $_POST['card'];
    echo "Credit Card Type: ";
    if ($card == "Visa") {
        echo "Visa <br>";
    } else if ($card == "Master") {
        echo "MasterCard <br>";
    } else if ($card == "Maestro") {
        echo "Credit Card Type: Maestro <br>";
    }
    echo "<br>";

    $number = $_POST['number'];
    echo "Card Number: ", $number, "<br>";
    echo "<br>";

    $discount = $_POST['discount'];
    echo "Discount Code: ", $discount, "<br>";
    echo "<br>";

    $suggestions = $_POST['suggestions'];
    echo "Feedback: ", $suggestions, "<br>";
    ?>
</body>

</html>