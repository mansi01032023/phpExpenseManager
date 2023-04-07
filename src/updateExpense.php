<?php
// updating the expense and its category
session_start();
include_once("config.php");
$id = $_SESSION['idUpdate'];
foreach ($_SESSION['expenses'] as $ekey => $evalue) {
    foreach ($evalue as $key => $value) {
        if($ekey == $idd){
            $_SESSION['totalExpense'] -= $value;
            $_SESSION['remaining'] += $value;
            $_SESSION['expenses'][$ekey] = array($_POST['Category'] => $_POST['Expense']);
            $_SESSION['totalExpense'] += $value;
            $_SESSION['remaining'] -= $value;
        }
    }
}
unset($_SESSION['idUpdate']);
$array = array(
    'totalExpense'=>$_SESSION['totalExpense'],
    'remaining' => $_SESSION['remaining'],
    'income' => $_SESSION['income']
);
print_r(json_encode($array));
?>