<?php 
include 'navbar.php';

//include_once 'DBh.php';
/*
$conn = mysqli_connect("localhost", "root", "", "merc");

if(!empty($_POST['submit']))
{
    if (!empty($_POST['bruger']) && !empty($_POST['kode']))
    {
        $user = $_POST['bruger'];
        $pass = $_POST['kode'];
        $select = $conn, "select * from bruger where brugernavn='$user' && kodeord='$pass' ";
        $sql = mysqli_query($select) or die (mysqli_error());
        if(mysql_num_rows($sql) == 1)
        {
            echo "det virkede!";
        }
        else 
        {
            echo "det virkede ik";
        }
    }
}



*/

?>

<!DOCTYPE html>
<html>
<head>
<title>Log ind</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<h1>Log ind!</h1>





<div id>
    <form class="loginForm" action="login.php" method="POST">
        <input type="text" id="bruger" name="bruger" placeholder="Brugernavn*" required> 
        <br> 
        <input type="password" id="kode" name="kode" placeholder="Kodeord*" required>
        <br>
        <button type="submit" name="submit" value="Login">Send</button>
    </form>
</div>


</body>
</html> 

<?php 
include 'footer.php';
?>