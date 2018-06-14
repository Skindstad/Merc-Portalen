<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Merc-Portalen</title>
<body onload="myFunction()"> </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<h1>Velkommen til Merc-Portalen!</h1>
<p>-Et dansk forum</p>



<p> 
Vivamus accumsan a mi a volutpat. Donec ut molestie neque. Donec id tortor ac dolor dapibus blandit sit amet a risus. Integer faucibus ante non eros ultrices, nec consequat ante sollicitudin. Suspendisse varius urna feugiat lacus laoreet laoreet. Sed fermentum, velit eget cursus hendrerit, velit elit ultricies tortor, in finibus est nisl pretium dui. Nunc a tincidunt augue. Pellentesque nisl felis, suscipit tincidunt maximus quis, porttitor eu nibh. Nam dictum, nunc ut suscipit dapibus, purus metus ullamcorper eros, quis malesuada lorem erat ac nisl. 
</p>
<script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $(".mere").hide(1000);
            });
            $("#show").click(function(){
                $(".mere").show(1000);
            });
        });
        </script>
        </head>
        <body>
        
        <p class="mere"> Vivamus accumsan a mi a volutpat. Donec ut molestie neque. Donec id tortor ac dolor dapibus blandit sit amet a risus. Integer faucibus ante non eros ultrices, nec consequat ante sollicitudin. Suspendisse varius urna feugiat lacus laoreet laoreet. Sed fermentum, velit eget cursus hendrerit, velit elit ultricies tortor, in finibus est nisl pretium dui. Nunc a tincidunt augue. Pellentesque nisl felis, suscipit tincidunt maximus quis, porttitor eu nibh. Nam dictum, nunc ut suscipit dapibus, purus metus ullamcorper eros, quis malesuada lorem erat ac nisl. </p>
        
        <button id="hide">Vis mindre</button>
        <button id="show">Vis mere</button>


</body>
</html> 

<?php 
include 'footer.php';
?>