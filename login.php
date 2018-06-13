<?php
include 'DBh.php';


session_start();

//Beskeder
$fejl = "Der skete en fejl";
$succes = "Login lykkedes";
$test = "Dette er en test";

//Henter værdierne fra loginform.php
$Brugernavn = $_POST['Bruger']
$Kodeord = $_POST['Kode'];

//Beskytter mod MYSQL injections
$Brugernavn = stripcslashes($Brugernavn);
$Kodeord = stripcslashes($Kodeord);
$Brugernavn = mysql_real_escape_string($Brugernavn)
$Kodeord = mysql_real_escape_string($Kodeord)


//Hiver fat i DB og table
mysql_connect("localhost","root","");
mysql_select("login") //?????


//Hiver fat i brugeren ved brug af en sql query
$result = mysql_query("select * from [DB Brugere] where Brugernavn = '$Brugernavn' and password = '$Kodeord'");
or die($fejl)
$row = mysql_fetch_array($result);


//Hvis brugernavn eller password er tom
if (empty($Kodeord)){
   echo "Du mangler at udfylde Kodeord";
   exit();

if (empty($Brugernavn)){
    header("Du mangler at udfylde brugernavn");
    exit();


//If statement der sikre at brugeren eksistere
if($row['Brugernavn'] == $Brugernavn && $row['Kodeord'] == $Kodeord){
    echo $succes "Velkommen ".$row['Brugernavn'];
} else {
    echo "Kunne ikke logge ind";
}



?>