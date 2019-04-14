<?php
//$test=file_get_contents('users.txt');
//echo nl2br($test);

$test=file('users.txt');
foreach ($test as $line) {
    echo $line .'<br>';
    
}
//explode


?>