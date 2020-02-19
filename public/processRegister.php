<?php
session_start();
require_once '../src/db.php';
require_once '../src/dbutils.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nickname = $_POST['nickname'];
    $username = $_POST['username'];
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    
    $stmt = $conn->prepare("INSERT INTO users (username, hash, nickname)
        VALUES (:username, :hash, :nickname)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':hash', $hash);
    $stmt->bindParam(':nickname', $nickname);
    try {
        $stmt->execute();
    } catch (PDOException $error) {
      
        if ($error->errorInfo[1] == 1062) { //1062 -  īpašais šīs kļūdas kods
            header('Location: /?error=userexists');
            exit();
        } else {
            throw $error; //atgriež, ja cita kļūda
        }
    }
    
    checkLogin($conn, $username, $_POST['password']);
}
