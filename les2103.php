<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    $a = 0;
    if ($a == 0) {
        echo "right";
    } else {
        echo "no right";
    }
    
    */
    
    ?>
    
    <?php
    /*
        for($i  =  0, $k  = "Points";  $i  <  100;  $i++) :
    
        $k =  $k.".";
    
    echo  $k;
    endfor;
    */
    ?>
     <option value=""></option>
   <select name="" id="">
   
    <?php
    //1. Необходимо создать выпадающий список годов от 2000 до 2050.
    
    
    for ($j = 2000; $j <= 2050; $j++): ?>
  <option value=""><?=$j?></option>
     
        <?php
    echo $j;
    endfor;
    ?>
    </select>
    
 
    <?php
       // Выведите столбец чисел от 1 до 100
    for ($i = 1; $i<=100; $i++):
    
            echo $i . "<br>";
    endfor;
    
    
    ?>
    
    <?php
    //4.  Выведите столбец четных чисел в промежутке от 0 до 100.
    for ($i = 0; $i<=100; $i+=2):

      echo $i."<br>";
    endfor;
    ?>
    
    
</body>
</html>