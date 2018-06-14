
<?php
//Tilgår databasen:
$servername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "merc";

$conn = mysqli_connect($servername, $dbusername, $dbpass, $dbname);



if (!$conn) {
    die("Kunne ikke logge ind: ".mysqli_connect_error());
}

?>
