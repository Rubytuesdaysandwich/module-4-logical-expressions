<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
      part 1:
    <?php
        $date = date('F',time());//setting $date to date time equal to the month
       // echo $date;
        ?>
        <br/>
        <?php
        // this will read the month that $date is currently on and out put weather or not it's august
            if ($date =="August"){
                echo "It's August, so it's really hot.";
            }else{
                echo "Not August, so at least not in the peak of the heat.";
            }
    ?>
<br/>
par 2:
<?php
$ternary_date=date('F',time());//assign month date to $ternary_date being updated by date function
echo ($ternary_date=="August") ? 'true' : 'false';//short hand for if else function returns true or false
 //!ternary operator
?>
<br/>


part 3:
<?php
$switch_date=date('F',time());//assigning the date function to $switch_date
//using switch_date to follow the months as they cycle so the things tha it will output changes as the months progress

switch ($switch_date){
case 'January':
    echo "Summer is a promissory note signed in June, it's long days spent and gone before you know it, and due to be repaid next January.";
break;
case 'February':
    echo "Why does February feel like one big Tuesday?";
break;
case 'March':
    echo "Springtime is the land awakening. The March winds are the morning yawn.";
break;
case 'April':
    echo "Here cometh April again, and as far as I can see the world hath more fools in it than ever.";
break;
case 'May':
    echo "The world's favorite season is the spring. All things seem possible in May.";
break;
case 'June':
    echo "There are two seasons in Scotland: June and Winter.";
break;
case 'July':
    echo "Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.";
break;
case 'August':
    echo "August, the summer's last messenger of misery, is a hollow actor.";
break;
case 'September':
    echo "We know that in September, we will wander through the warm winds of summer's wreckage. We will welcome summer's ghost.";
break;
case 'October':
    echo "I'm so glad I live in a world where there are Octobers.";
break;
case 'November':
    echo "The month of November makes me feel that life is passing more quickly. In an effort to slow it down, I try to fill the hours more meaningfully.";
break;
case 'December':
    echo "God gave us memory so that we might have roses in December.";
break;
default:
    echo "Are you sure you know your months?";
break;








}



?>





  </body>
</html>
