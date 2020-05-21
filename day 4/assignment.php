<?php
 if(isset($_POST['age'])){
    $n=$_POST['name'];
    $a=$_POST['age'];
     if($a>=18)
     echo "Dear $n you can vote";
    else
    echo "Dear $n you cannot vote";
 }
 else
   echo "enter data"
?>