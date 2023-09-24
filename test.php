<?php 
echo "working php";
$login = $_GET['login'];
if(isset($login)){
    echo "LOGIN WORKING";
}else{
    echo "Login Not successfull";
}
?>