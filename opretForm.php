<?php 
include 'navbar.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Opret Bruger</title>
</head>
<body>

<h1>Opret Bruger!</h1>

<form action="opretForm2.php" method="post">

    <div>
        <input type="text" name="fuldeNavn" placeholder="Fulde navn" required>
    </div>

    <div>
        <input type="date" name="fødselsdag" placeholder="Fødselsdag">
    </div>

    <div>
        <input type="text" name="brugernavn" placeholder="Brugernavn" required>
    </div>

    <div>
        <input type="email" name="email" placeholder="Email" required>
    </div>

    <div>
        <input type="password" name="kodeord" placeholder="Kodeord" required>
    </div>

<!--
    <div>
        <input type="password" name="kodeord2" placeholder="Kodeord igen">
    </div>
-->
    <div>
         <button type="submit" id="tilmeld" name="tilmeld" value"submit">Send</button>
    </div>

<p>
   Allerede medlem? <a href="Loginform.php">Log ind</a>
</p>

</form>



</body>
</html> 


<?php 
include 'footer.php';
?>
