<?php 

include 'navbar.php';
include 'DBh.php';

?>

<body>

<link rel="stylesheet" type="text/css" href="style2.css">
 <div id="fondation">
 
<div class="fondation">

<input class="searchbar" type="text" placeholder="Search.." name="search">

<div id="layout">


<div class="profilbillede">


<img class="billede" src="https://www.hooked4pets.dk/images/design/billeder/slider_forsiden_photo11.jpg">
</div>
<div class="profiloplysninger">
<h2>Dit navn:</h2>
<h2><?php 
	//finder brugerens fulde navn
	$sql = "SELECT * FROM bruger WHERE id = 2;"; 
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['fuldeNavn'] . "<br>";
		}
	}

?></h2>
<h3>Om dig<h3>
<p>Alder<P>
<?php 
	//finder brugerns alder
	$sql = "SELECT * FROM bruger WHERE id = 1;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['alder'] . "<br>";
		}
	}

?>
<br>



<h3>Dine forums</h3>
	<?php 
	//finder brugerens opslag
	$sql = "SELECT bruger.fuldeNavn, forum.time, forum.content FROM forum INNER JOIN bruger ON forum.profilId=bruger.id WHERE profilId = 1;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo $row['fuldeNavn'] . "<br>" . $row['time'] ."<br>" . $row['content'] . "<br>" . "<br>" ;
		}
	}
?>
</div>

</div>
</div>
<?php include'footer.php'; ?>


</div
<body>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

</html>