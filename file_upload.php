<?php
// File upload in PHP is a common task that allows users to upload files from their computer to a web server. In this process, you need to use a form with an input type of "file" to allow the user to select the file they want to upload. Then, you need to write a PHP script to handle the uploaded file and move it to the appropriate location on the server.

// HTML form:


// <form method="post" action="upload.php" enctype="multipart/form-data">
//   <input type="file" name="fileToUpload" id="fileToUpload">
//   <input type="submit" value="Upload File" name="submit">
// </form>


// In this example, we have an HTML form with an input type of "file" that allows the user to select a file to upload. The form's action attribute points to a PHP script called "upload.php", which will handle the uploaded file. The form's enctype attribute is set to "multipart/form-data", which is required when uploading files.

// PHP script:



if (isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow only certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // If everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

// In this PHP script, we first check if the submit button has been pressed by checking the value of $_POST["submit"]. If the button has been pressed, we define a target directory for the uploaded file ($target_dir) and generate a unique name for the uploaded file by appending the original filename to the target directory ($target_file).

// We then perform several checks on the uploaded file, such as checking if the file already exists, checking the file size, and checking the file type. If any of these checks fail, we set $uploadOk to 0, which indicates that the file should not be uploaded. Otherwise, we set $uploadOk to 1, which indicates that the file can be uploaded.

// If $uploadOk is set to 1, we use the move_uploaded_file() function to move the uploaded file from its temporary location to the target directory on the server. If the file is successfully uploaded, we display a success message to the user. If there is an error during the upload process, we display an error message to the user.

// It's worth noting that the file upload process is inherently risky, as it allows users to upload potentially malicious files to your server. Therefore, it's important to take measures to ensure the security of your file upload functionality. Some best practices for secure file uploads include:

// Limiting the types of files that can be uploaded (e.g. only allowing image files).
// Limiting the size of files that can be uploaded.
// Renaming uploaded files to prevent malicious scripts from being executed.
// Storing uploaded files outside of the web root directory to prevent direct access.
// Validating file types and contents to ensure they match the expected format.
// Using server-side validation to prevent malicious scripts from being executed.
// By implementing these best practices, you can reduce the risk of security vulnerabilities in your file upload functionality.