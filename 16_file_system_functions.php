<?php
// there are several file system functions available that allow you to perform various operations on files and directories. Here are some commonly used file system functions in PHP with code examples:

// file_exists(): This function checks whether a file or directory exists. It returns true if the file or directory exists, and false otherwise.

$file_path = '/path/to/file.txt';
if (file_exists($file_path)) {
    echo 'File exists';
} else {
    echo 'File does not exist';
}
// mkdir(): This function creates a new directory. It takes two arguments: the path to the directory to create, and an optional parameter specifying the directory's permissions.

$dir_path = '/path/to/new/directory';
if (!file_exists($dir_path)) {
    mkdir($dir_path);
    echo 'Directory created';
} else {
    echo 'Directory already exists';
}
// rmdir(): This function removes a directory. It takes one argument: the path to the directory to remove.

$dir_path = '/path/to/directory/to/remove';
if (file_exists($dir_path)) {
    rmdir($dir_path);
    echo 'Directory removed';
} else {
    echo 'Directory does not exist';
}
// unlink(): This function deletes a file. It takes one argument: the path to the file to delete.

$file_path = '/path/to/file/to/delete.txt';
if (file_exists($file_path)) {
    unlink($file_path);
    echo 'File deleted';
} else {
    echo 'File does not exist';
}
// rename(): This function renames a file or directory. It takes two arguments: the path to the existing file or directory, and the new name for the file or directory.

$file_path = '/path/to/old_file.txt';
$new_file_path = '/path/to/new_file.txt';
if (file_exists($file_path)) {
    rename($file_path, $new_file_path);
    echo 'File renamed';
} else {
    echo 'File does not exist';
}
// These are just a few examples of the file system functions available in PHP. There are many more functions available for manipulating files and directories, so it's worth taking some time to familiarize yourself with the various options available.