<?php
session_start();
require_once '../src/db.php';
require_once '../src/dbutils.php';

// getConn($SERVER, $DB, USER, PW);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    checkLogin($conn, $username, $password);

}