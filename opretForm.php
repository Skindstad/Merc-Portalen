<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Opret Bruger!</h1>

<form method="post" action="opret.php">

<div>
    <input type="text" name="FuldeNavn" placeholder="Fulde navn">
</div>

<div>
    <input type="text" name="Brugernavn" placeholder="Brugernavn">
</div>

<div>
    <input type="email" name="email" placeholder="Email">
</div>

<div>
    <input type="password" name="Kodeord1" placeholder="Kodeord">
</div>

<!--
<div>
    <input type="password" name="kodeord2" placeholder="Kodeord igen">
</div>
-->
<div>
    <button type="submit">Register</button>
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
