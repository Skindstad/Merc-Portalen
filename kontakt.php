<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Kontakt</title>
</head>
<body>

<h1>Kontakt</h1>

<div>
    <form class="kontakt" action="kontaktform.php" method="post">
        <input type="text" name="navn" placeholder="Fulde navn*"> 
        <br> 
        <input type="text" name="mail" placeholder="Email*">
        <br>
        <input type="text" name="emne" placeholder="Emne*">
        <br>
        <textarea class="besked" name="besked" placeholder="Besked*"></textarea>
        <br>
        <button type="submit" name="Send">Send</button>
    </form>
</div>


</body>
</html> 

<?php 
include 'footer.php';
?>