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
    <form class="loginForm" action="login.php" method="POST">
        <input type="text" id="bruger" name="bruger" placeholder="Brugernavn*"> 
        <br> 
        <input type="password" id="kode" name="kode" placeholder="Kodeord*">
        <br>
        <button type="submit" id="loginKnap" name="Send" value="Login">Send</button>
    </form>
</div>


</body>
</html> 

<?php 
include 'footer.php';
?>