<?php
/*function setInput ($name, $value) {
    return "<input name={$name}
    input value={$value}
    input submit={$submit}>";
}
echo setInput($_POST['name'],
              $_POST['value'],
              $_POST['submit']);

*/

?>

<?php

$value=$_POST['name'];
$login=$_POST['login'];

if ($value==1){
    echo "Hello";
} else {
    echo "Goodbye";
}
?>