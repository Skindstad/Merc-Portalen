<?php 
include 'navbar.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Opret Bruger</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<h1>Opret Bruger!</h1>

<script>
$(document).ready(function(){
    $("div3").fadeIn(3000);
    });
</script>


<form action="opretForm2.php" method="post" class="div3">

    <div>
        <input type="text" name="fuldeNavn" placeholder="Fulde navn" required>
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
         <button type="submit" id="tilmeld" name="tilmeld" value="submit">Send</button>
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
