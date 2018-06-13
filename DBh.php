
<?php

$servername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "merc";

$conn = mysqli_connect($servername, $dbusername, $dbpass, $dbname);



if (!$conn) {
    die("Failed connection: ".mysqli_connect_error());
}

?>
