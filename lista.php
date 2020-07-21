<?php
$pasta = "files/";
$dir = dir($pasta);

while($arquivo = $dir->read()){
    if($arquivo != '.' && $arquivo!= '..'){
        echo "<a href='".$pasta.$arquivo."'><img src='".$pasta.$arquivo."' class='img-fluid' style='width:12vw;'></a>";
        
       
    }
}


?>