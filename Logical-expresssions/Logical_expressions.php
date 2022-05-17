<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    <?php
        $date = date('F',time());
        echo $date;
        ?>
        <br/>
        <?php
        if ($date =="August"){
            echo "It's August, so it's really hot.";
        }else{
            echo "Not August, so at least not in the peak of the heat.";
        }
    ?>








  </body>
</html>
