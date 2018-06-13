<?php
include_once 'DBh.php';

$sql ="INSERT INTO bruger (brugernavn, email, kodeord, fuldeNavn) VALUES('$_POST[brugernavn]', '$_POST[email]', '$_POST[kodeord]', '$_POST[fuldeNavn]')";


if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/Merc-Portalen/index.php");
   // echo "Brugeren er nu oprettet i systemet!";
} else {
    echo "Der skete en fejl " . $sql . "<br>" . mysqli_error($conn);
}




/*
session_start();

//tilgår db
$conn = mysqli_connect("localhost", "root", "", "merc");

if (isset($_POST['tilmeld'])) {
    //session_start();
    $brugernavn = mysql_real_escape_string($_POST['brugernavn']);
    $email = mysql_real_escape_string($_POST['email']);
    $kodeord = mysql_real_escape_string($_POST['kodeord']);
    $kodeord2 = mysql_real_escape_string($_POST['kodeord2']);

    if ($kodeord == $kodeord2){
        //opret bruger
$kodeord = md5($kodeord); //kryptere (hash) kodeordet, før den bliver gemt i merc
$sql = "INSERT INTO bruger(brugernavn, email, kodeord) VALUES('$brugernavn', '$email', '$kodeord')"; 
mysqli_query($conn, $sql);
$_SESSION['message'] = "Du er logget ind";
$_SESSION['brugernavn'] = $brugernavn;
header("location: /..index.php"); //sender brugeren videre til forsiden
} else {
        //fejl
$_SESSION['message'] = "kodeorderne skal være ens!";
    }
}
*/
?>