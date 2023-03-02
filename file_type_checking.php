<?php
// you can check the type of a file using the filetype() function. This function returns the type of a file as a string, such as "file", "directory", or "link".


// check if the file "myfile.txt" is a regular file
if (filetype("myfile.txt") == "file") {
    echo "This is a regular file.";
}

// check if the file "mydir" is a directory
if (filetype("mydir") == "dir") {
    echo "This is a directory.";
}
// In this example, the filetype() function is used to check the type of two different files. The first if statement checks if the file "myfile.txt" is a regular file by comparing the result of filetype() to the string "file". If the file is indeed a regular file, the message "This is a regular file." will be printed.

// The second if statement checks if the file "mydir" is a directory by comparing the result of filetype() to the string "dir". If the file is indeed a directory, the message "This is a directory." will be printed.

// Note that filetype() will also return other file types such as "link" for symbolic links and "fifo" for named pipes. You can use these values in if statements to check for specific file types.

// Additionally, you can use the is_file() and is_dir() functions to check if a file is a regular file or a directory, respectively. These functions are equivalent to using filetype() and comparing the result to "file" or "dir". 


// check if the file "myfile.txt" is a regular file
if (is_file("myfile.txt")) {
    echo "This is a regular file.";
}

// check if the file "mydir" is a directory
if (is_dir("mydir")) {
    echo "This is a directory.";
}
// These functions will return true if the file is a regular file or directory, respectively, and false otherwise. You can use them in the same way as filetype() to check for specific file types.