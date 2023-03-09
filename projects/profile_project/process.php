<?php
session_start();
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ( empty( $name ) || empty( $email ) || empty( $password ) ) {
        die( "Error: All fields are required." );
    }
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        die( "Error: Invalid email format." );
    }
    if ( isset( $_FILES["profile_pic"] ) ) {
        $target_dir = "uploads/";
        $target_file = $target_dir . date( "YmdHis" ) . "_" . basename( $_FILES["profile_pic"]["name"] );
        if ( move_uploaded_file( $_FILES["profile_pic"]["tmp_name"], $target_file ) ) {
            $file = fopen( "users.csv", "a" );
            fputcsv( $file, array( $name, $email, $target_file ) );
            fclose( $file );
            setcookie( "username", $name, time() + 86400 );
            header( "Location: display.php" );
            exit();
        } else {
            die( "Error: Failed to upload profile picture." );
        }
    } else {
        die( "Error: Profile picture is required." );
    }
}
?>
