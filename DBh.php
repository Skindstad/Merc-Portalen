
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "merc"

$conn = mysqli_connect($servername, $username, $password, $dbname);








if (!$conn) {
    die("Failed connection: ".mysqli_connect_error());
}

?>
