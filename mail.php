<?php
$name = $_GET['first_name'];
$name = $_GET['last_name'];
if(isset($name)){
    echo $name;
}
else{
    echo 0;
}


?>