<?php

if (!isset($_SESSION['username'])) {
    return;
    
}
?>




    <form action="processAdd.php" method="post" class=" ">
    <div class="entry-field">
        <label for="entryDate" class='date-label label'>Date:</label>
        <input type="date" name="entryDate" id="entryDate" class="date-input" require>
        <label for="diaryEntry" class='entry-label label'>Entry:</label>
        <textarea class="entry-input input" type="text" name="diaryEntry" id="diaryEntry" placeholder="New daily entry" required ></textarea>
        <button class="btn-yellow" type="submit" name="addEntry">ADD ENTRY</button>
        </div>  
    </form>





