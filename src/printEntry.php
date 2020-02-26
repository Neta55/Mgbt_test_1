<?php


require_once 'db.php';
if (!isset($_SESSION['username'])) {
    return;
} 

$stmt = $conn->prepare("SELECT * FROM diary WHERE (user_id = :user_id) ORDER BY created DESC");
$stmt->bindParam(':user_id', $_SESSION['id']);
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$allRows = $stmt->fetchAll();




foreach ($allRows as $row) {
     


    echo "<div id='entries'>";
    echo "<form action='updateEntry.php' method='post' class='int-cont'>";
    echo "<div class='daily-entry'>";
    echo "<h3 class='entry-date no-margin'>" .$row['entryDate']. "</h3>";
    echo "<p class='entry-text no-margin'>" .$row['diaryEntry']. "</p>";
   
   
    echo "<div class='edit-form display-none' id='edit-form-" . $row['id'] . "' name='edit-form' value='" . $row['id'] . "'>";
    foreach ($row as $key => $value) {
        
    switch ($key) {
        
        case 'entryDate':
            echo "<input class='edit-date' name='$key' value='$value'>";
            break;
        case 'diaryEntry': 
            echo "<textarea class='edit-text' name='$key' value='$value'>$value</textarea>";
           
            break;

        }
    }
    echo "<button class='close' type='button' id='close-btn' value='" . $row['id'] . "' >&times;</button>";
    echo "<button name='update-btn' class='btn-yellow update-btn no-margin' value='" . $row['id'] . "'>Update</button>";
    echo "</div>";
    echo "</form>";
    echo "<button class='edit-btn btn-blue ' type='button' name='edit-btn' id='edit-btn'  value='" . $row['id'] . "'>Edit</button>";
    
    
    echo "<div class='delete-btn' >";
    echo "<form action='deleteEntry.php' method='post'>";
    echo "<button name='delete-btn' class='btn-yellow no-margin' value='" . $row['id'] . "'>Delete</button>";
    echo "</form>";
    echo "</div>";
    
    echo "</div>";
}
echo "</div>";
echo "</div>";
echo "</div>";



