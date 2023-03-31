<?php
session_start();
if (!isset($_SESSION['income'])) {
    $_SESSION['income'] = $_POST['income'];
}else{
    $_SESSION['income'] += $_POST['income'];
}
print_r($_SESSION['income']);
?>