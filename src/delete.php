<?php
session_start();
unset($_SESSION['expenses'][$_POST['id']]);
?>