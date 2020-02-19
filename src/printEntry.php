<?php


require_once 'db.php';
if (!isset($_SESSION['username'])) {
    // echo "<h2>Lai varētu apskatīt savu uzdevumu sarakstu, ir jāielogojas!</h2>";
    return;

} 
// else {
//     echo "Hello there " . $_SESSION['username'] . "!<br>";
// }



//sagatavot prasījumu un izpildīt
$stmt = $conn->prepare("SELECT * FROM diary WHERE (user_id = :user_id) ORDER BY created DESC");
$stmt->bindParam(':user_id', $_SESSION['id']);
$stmt->execute();



// uzstāda, lai rindiņas nāktu ārā masīva režīmā
$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

//saglabā rezultātu atmiņā, nav labi pie liela datu apjoma (var uzkārties?)
$allRows = $stmt->fetchAll();

//beigās var izdrukāt rezultātu



foreach ($allRows as $row) {
     
    // if (isset($row['todoDone'])) {
    //     $special = "Done-" . (int) $row['todoDone'];
    // } else {
    //     $special = "Done-null";
    // }
    // if (isset($row['todoDone'])) {
    //     $editb = "edit-btn-" . (int) $row['todoDone'];
    // } else {
    //     $editb = "edit-btn-null";
    // }

    // if (isset($row['todoDone'])) {
    //     $updateb = "update-btn-" . (int) $row['todoDone'];
    // } else {
    //     $updateb = "update-btn-null";
    // }

    // if (isset($row['todoDone'])) {
    //     $deleteb = "delete-btn-" . (int) $row['todoDone'];
    // } else {
    //     $deleteb = "delete-btn-null";
    // }



    echo "<form action='updateEntry.php' method='post' class='int-cont'>";
    echo "<div class='daily-entry'>";
    echo "<h3 class='entry-date no-margin'>" .$row['entryDate']. "</h3>";
    echo "<p class='entry-text no-margin'>" .$row['diaryEntry']. "</p>";
    echo "<button class='edit-btn btn-blue'>Edit</button>";

    echo "<div class='edit-form' >";
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
    echo "<button name='update-btn' class='update-btn no-margin' value='" . $row['id'] . "'>Update</button>";
    echo "</div>";
    echo "</form>";

    
   
    echo "<div class='delete-btn' >";
    echo "<form action='deleteEntry.php' method='post'>";
    echo "<button name='delete-btn' class='btn-yellow no-margin' value='" . $row['id'] . "'>Delete</button>";
    echo "</form>";
    echo "</div>";
    
    echo "</div>";
}
echo "</div>";
echo "</div>";

