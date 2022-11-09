<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $mname = isset($_POST['mname']) ? $_POST['mname'] : '';
    $bdate = isset($_POST['bdate']) ? $_POST['bdate'] : date('D-m-y');
    $idn = isset($_POST['idn']) ? $_POST['idn'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $dment = isset($_POST['dment']) ? $_POST['dment'] : '';
    $stmt = $pdo->prepare('INSERT INTO register VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$lname, $fname, $mname, $bdate, $idn, $course, $dment]);
    $msg = 'Created Successfully!';
}
