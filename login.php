<?php
include_once 'DBh.php';
//include 'Loginform.php';
//include 'DBh.php';
//session_start();

/*
//Beskeder
$fejl = "Der skete en fejl";
$succes = "Login lykkedes";
$test = "Dette er en test";
*/

//Henter værdierne fra loginform.php
$brugernavn = $_POST['bruger'];
$kodeord = $_POST['kode'];


//Beskytter mod mysqli injections
$brugernavn = stripcslashes($brugernavn);
$kodeord = stripcslashes($kodeord);
$brugernavn = mysqli_real_escape_string($brugernavn);
$kodeord = mysqli_real_escape_string($kodeord);


//Hiver fat i DB og table
//$conn = mysqli_connect("localhost", "root", "", "merc");
//mysqli_select_db("Merc");


//Hiver fat i brugeren ved brug af en sql query
$result = mysqli_query("SELECT * FROM bruger WHERE brugernavn = '$brugernavn' AND kodeord = '$kodeord'")
or die("fejl ".mysqli_error());
$row = mysqli_fetch_array($result);

/*
//Hvis brugernavn eller password er tom
if (empty($kodeord)){
   echo "Du mangler at udfylde Kodeord";
   exit();
   }

if (empty($brugernavn)){
    header("Du mangler at udfylde brugernavn");
    exit();
}*/

//If statement der sikre at brugeren eksistere
if ($row['brugernavn'] == $brugernavn && $row['kodeord'] == $kodeord){
    echo "Det lykkedes! Velkommen ".$row['brugernavn'];
} else {
    echo "Kunne ikke logge ind";
}




?>