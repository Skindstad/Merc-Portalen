<?php
include_once 'DBh.php';

if(isset($_POST['brugernavn'])){
    
    $brugernavn=$_POST['brugernavn'];
    $kodeord=$_POST['kodeord'];
    
    $sql="select * from bruger where brugernavn='".$brugernavn."'AND kodeord='".$kodeord."' limit 1"; //så der kun kan være en bruger
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}


?>