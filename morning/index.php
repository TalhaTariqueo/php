<!DOCTYPE html>
<html>

    <style>
     .phpcoding{width:900px;margine:0 auto; background:#ddd; padding:20px;}
    </style>

<body>
 <section class="phpcoding">
<?php
    $x=10;
    $y=5;
    //Addition
    echo $x+$y."</br>";
    //Subtraction
    echo $x-$y."</br>";
    //Multipication
    echo $x*$y."</br>";
    //Division
    echo $x/$y."</br></br>";
    //Use value then Increment
    echo $x++."</br>";
    echo $x."</br></br>";
     //Increment then Use value 
     $u=20;
     echo ++$u."</br>";
     echo $u."</br></br>";
     //Use value then Increment
     $t=50;
    echo $t--."</br>";
    echo $t."</br></br>";
    //Deccrement then Use value
    $p=15;
    echo --$p."</br>";
    echo $p."</br></br>";
    //power
    echo pow(5,2)."</br></br>";
    //sqrt
    echo sqrt(64)."</br></br>";

    //remainder of division
    $j=13;
    $k=4;
    echo $j%$k."</br></br>";
    
?>

 </section>
</body>
</html>