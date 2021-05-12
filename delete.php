<?php
$mysqli = new mysqli("localhost", "root", "root", "contacttest");
  
if ($_GET['id']) {
    $id= filter_var($_GET ['id'],FILTER_VALIDATE_INT);
    $sql="DELETE  FROM contacts WHERE id = '$id'";

    if ($mysqli->query($sql)) {
        echo "Deleted Successfully";
        echo "<BR>";
        echo "<a href='index1.php'>Back to main page</a>";
    } else {
        echo $mysqli->error;
    }

}
   
 
    ?> 


 