<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Log ind</title>
</head>
<body>

<h1>Log ind!</h1>

<div>
    <form class="loginForm" action="kontaktform.php" method="post">
        <input type="text" id="Bruger" name="Brugernavn" placeholder="Brugernavn*"> 
        <br> 
        <input type="text" id="Kode" name="Kodeord" placeholder="Kodeord*">
        <br>
        <button type="submit" id ="loginKnap" name="Send">Send</button>
    </form>
</div>


</body>
</html> 

<?php 
include 'footer.php';
?>