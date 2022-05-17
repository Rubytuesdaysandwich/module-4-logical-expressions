<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Comparison and Logical Operators</title>
  </head>
  <body>
<?php
$a = 4;
$b = 3;
$c = 1;
$d = 20;
if(($a>$b)||($c>$d)){
    echo "a is larger than b OR ";
    echo "c is larger than d";
}//&& and operator a is larger than b AND c larger than d comparing two things at the same time
//both halves of the expression must be true if one side is false it is not true.
// || is the OR operator and lets the expression be true if one of the statements stated are met and true
?>
<br/>
<?php
$e = 100;
if (!isset($e)){
    $e = 200;//good way to set default values if value is not set
}//if e is not set it returns 200 if it is set $e = 100. 100 will be returned on echo
echo $e;
?>

<?php
// don't reject 0 or 0.0

if (emmpty($quantity) && !is_numeric($quantity)){
    echo "You must enter a quantity.";
}
?>


  </body>
</html>
