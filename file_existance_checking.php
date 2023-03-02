<?php
// In PHP, you can check whether a file exists on the file system using the file_exists() function. This function returns true if the file exists, and false otherwise. 


if (file_exists('/path/to/file.txt')) {
    echo 'The file exists!';
} else {
    echo 'The file does not exist.';
}
// In this example, the file_exists() function checks whether the file at /path/to/file.txt exists. If it does, the script prints "The file exists!"; otherwise, it prints "The file does not exist."

// Note that file_exists() works with both files and directories. If you pass a directory path to file_exists(), it will return true if the directory exists and false otherwise.

// It's worth noting that file_exists() only checks whether a file or directory exists on the file system. It doesn't check whether the file is readable, writable, or executable. To check file permissions, you can use the is_readable(), is_writable(), and is_executable() functions, which return true if the file is readable, writable, or executable, respectively, and false otherwise.