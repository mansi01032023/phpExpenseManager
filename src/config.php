<?php
session_start();
if (!isset($_SESSION['expenses'])) {
    $_SESSION['expenses'] = array();
}
?>