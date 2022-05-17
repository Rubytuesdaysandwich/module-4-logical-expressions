<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logical_expressions if statements</title>
</head>
<body>
    <?php
        $a = 3;//assign a and b to to 4 and 3
        $b = 4;
    
        if($a > $b) {
            echo "a is larger than b";
        }//if a is larger than b echo a is larger than b
        elseif ($a<$b){
            echo "a is not larger than b";
        }//if a is smaller than b echo a is not larger than b
        else{
            echo "a is equal to b"
        }
    ?>
<br/>


<?php
$new_user = true;
if ($new_user) {
    echo "<h1>welcome!</h1>";
    echo "<p>We are glad you decided to join us</p>";
};
//welcome the new user?>
<br/>

    
    <?php
    $numerator = 20;
    $denominator = 4;
    $result = 0;
    if($denominator > 0){
        $result = $numerator / $denominator;
    }
    echo "Result: {$result}";
    //find the result of a numerator and denominator cant divide by 0 ?>




</body>
</html>