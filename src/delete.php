<?php
// this section deletes the specific expense
session_start();
foreach ($_SESSION['expenses'] as $ekey => $evalue) {
    foreach ($evalue as $key => $value) {
        if($ekey == $_POST['id']){
            $_SESSION['remaining'] += $value;
            $_SESSION['totalExpense'] -= $value;
            unset($_SESSION['expenses'][$ekey][$key]);
            break;
        }
    }
}
$array = array(
    'totalExpense'=>$_SESSION['totalExpense'],
    'remaining' => $_SESSION['remaining'],
    'income' => $_SESSION['income']
);
print_r(json_encode($array));
?>