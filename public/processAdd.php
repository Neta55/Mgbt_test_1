<?php
session_start();
if (!$_SESSION['id']) {
    header('Location: /');
    return; //lai varētu ierakstus ievietot un apskatīt tikai reģistrēti lietotāji
}
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $diaryEntry = $_POST['diaryEntry'];
    $entryDate = strtotime($_POST['entryDate']);
    $entryDate = date('Y-m-d', $entryDate);
    $user_id = (int) $_SESSION['id'];

   
    $stmt = $conn->prepare("INSERT INTO diary (diaryEntry, entryDate, user_id) 
    VALUES (:diaryEntry, :entryDate, :user_id)");
    
    $stmt->bindParam(':diaryEntry', $diaryEntry);
    $stmt->bindParam(':entryDate', $entryDate);
    $stmt->bindParam(':user_id', $user_id);

    $stmt->execute();
   
    header('Location: /');
} else {
    echo "Kaut kas nogāja greizi :(";
}