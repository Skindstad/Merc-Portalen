<?php
//Tjekker om man har trykket submit vha. isset funktionen
if (isset($_POST['Send'])) { //da knappen hedder send 
    //sender emailen
    $navn = $_POST['navn'];
    $mailFra = $_POST['mail'];
    $emne = $_POST['emne'];
    $besked = $_POST['besked'];

    //hvem den skal sende mailen til
    $mailTo = "kenneth_jensen_99@hotmail.com";
    $mailInfo = "Fra: ".$mailFra;
    $tekst = "Du har modtaget en mail fra ".$navn.".\n\n".$besked; //n hopper en linje ned

//bruger funktionen mail
mail($mailTo, $emne, $mailInfo, $tekst);
}
?>