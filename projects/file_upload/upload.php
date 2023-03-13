<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $file = $_FILES["fileToUpload"];
    print_r($file);
   echo "<br/>";
    // Accessing file properties
   echo $fileName = $file["name"];
 echo "<br/>";
   echo $fileType = $file["type"];
  echo "<br/>";
   echo $fileSize = $file["size"];
 echo "<br/>";
   echo $fileTempName = $file["tmp_name"];
 echo "<br/>";
   echo $fileError = $file["error"];
   echo "<br/>";

    // Move uploaded file to a new location
    move_uploaded_file( $fileTempName, "uploads/" . $fileName );
}