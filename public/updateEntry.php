<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  
    $diary_id = $_POST['update-btn'];
    $diaryEntry = $_POST['diaryEntry'];
    $entryDate = strtotime($_POST['entryDate']);
    $entryDate = date('Y-m-d', $entryDate);
    
    
    $stmt = $conn->prepare("UPDATE `diary`
        SET `diaryEntry` = (:diaryEntry),
            `entryDate` = (:entryDate)
        WHERE `diary`.`id` = (:diaryid)");

    $stmt->bindParam(':diaryid', $diary_id);
    $stmt->bindParam(':diaryEntry', $diaryEntry);
    $stmt->bindParam(':entryDate', $entryDate);

    $stmt->execute();
   
    header('Location: /');
} 
// else {
//     echo "That was not a POST, most likely GET";
// }