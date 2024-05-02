<?php
if(empty($_SESSION['login_user'])){
header('location:index/');
die();
}
?>