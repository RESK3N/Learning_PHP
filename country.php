<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="country.php" method="post">
        <label for="country">Select a country:</label>
        <input type="text" name="test"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>
<?php
// country.php
$c_list = array("USA" => "Washington DC", "India" => "New Delhi", "Japan" => "Kyoto", "South Korea" => "Seoul");
$rcvd = $_POST["test"];
$country = $c_list[$rcvd];
echo "The Capital of {$rcvd} is :  {$country}";
