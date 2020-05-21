<?php
 if(isset($_POST['num'])){
    $n=$_POST['num'];
    $f=1;
    for($i=1;$i<=n;$i++)
     $f=$f*$i;
     echo "Factorial is $f";
 }
 else
    echo "SRy! No data provided..";
 
?>