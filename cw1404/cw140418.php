<?php
 mkdir('dir18');
file_put_contents ('dir18/11.txt',"");
file_put_contents ('dir18/22.txt',"");
file_put_contents ('dir18/33.txt',"");
file_put_contents ('dir18/44.html',"");



$filelist = glob("dir18/*.txt");
foreach ($filelist as $filename){
    echo $filename. "<br>";
}

?>