<?php 
$db = mysqli_connect('localhost', 'root', '', 's-mart');
if($db){
    
}else{
    die('Database connection error'.mysqli_error($db));
}
