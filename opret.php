<?php
/*
$conn = mysqli_connect("localhost", "root", "", "merc");

if (!$conn) {
    die("Failed connection: ".mysqli_connect_error());
}




session_start();


$fuldeNavn = $_POST['FN'];
$Email = $_POST['Email'];
$Kodeord = $_POST['Kodeord'];
$Brugernavn = $_POST['Brugernavn'];

if (empty($fuldeNavn)){
    echo "Du har ikke udfyldt fulde navn";
    exit();
}
if (empty($Email)){
    echo "du har ikke udfyld email";
    exit();
}
if (empty($Kodeord)){
   echo "Du har ikke udfyldt kodeord";
    exit();
}
if (empty($Brugernavn)){
   echo "Du har ikke udfyldt brugernavn";
    exit();
        
    } else {
        $sql = "INSERT INTO bruger (FN, Email, Kodeord, Brugernavn) 
        VALUES ('$FN', '$Email', '$Kodeord', '$Brugernavn')";
        $result = $conn->query($sql);
    }





?>