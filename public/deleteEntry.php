<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $diary_id = $_POST['delete-btn'];

    // prepare and bind
    $stmt = $conn->prepare("DELETE FROM `diary` WHERE `diary`.`id` = (:diaryid)");
    $stmt->bindParam(':diaryid', $diary_id);

    $stmt->execute();
    //we go to our index.php or rather our root
    header('Location: /');
} else {
    echo "That was not a POST, most likely GET";
}


