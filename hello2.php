<?php
if(isset($_FILES['files'])){
    $total = count($_FILES['files']['name']);
    
    for($i = 0; $i < $total; $i++){
        echo "Filename:".$_FILES['files']['name'][$i]."<br>";
        echo "Type:".$_FILES['files']['type'][$i]."<br>";
        echo "Size:".$_FILES['files']['size'][$i]."<br>";
        echo "Temp name:".$_FILES['files']['tmp_name'][$i]."<br>";
        echo "Error:".$_FILES['files']['error'][$i]."<br><br>";
    }
}
?>