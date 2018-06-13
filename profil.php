<?php 

include'navbar.php';
include_once 'DBh.php'

?>

<body>

<link rel="stylesheet" type="text/css" href="profilstyle.css">
 <div id="fondation">
 
<div class="fondation">

<div id="layout">

<div class="profilbillede">
<img class="billede" src="https://www.hooked4pets.dk/images/design/billeder/slider_forsiden_photo11.jpg">
</div>
<div class="profiloplysninger">
<h2>Dit navn</h2>
<?php 
		$sql = "SELECT fuldNavn FORM bruger;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0 ) {
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['fuldNavn'];
			}
			
		}
	?>
<h3>Om dig<h3>
<p>Alder<P>
<p>Fødselsdag<p>
</div>
<br>
<div>
<h3>Dine forums</h3>

</div>

</div>
</div>
<?php include'footer.php'; ?>


</div>
<body>
