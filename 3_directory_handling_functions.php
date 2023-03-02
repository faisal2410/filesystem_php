<?php
/*
directory handling functions are used to work with directories (or folders) on the server's file system. These functions allow you to create, read, write, delete, and manipulate directories and their contents.

mkdir() - This function is used to create a new directory. You can specify the directory name and the permissions for the new directory.

rmdir() - This function is used to remove a directory. The directory must be empty before you can remove it.

opendir() - This function is used to open a directory for reading. It returns a directory handle that can be used with other functions to read the directory's contents.

readdir() - This function is used to read the contents of a directory. It returns the name of the next file or directory in the directory.

closedir() - This function is used to close an open directory handle.

scandir() - This function is used to read the contents of a directory into an array. It returns an array of file names and directory names.

is_dir() - This function is used to check if a given path is a directory.

chdir() - This function is used to change the current working directory.

getcwd() - This function is used to get the current working directory.

By using these functions, you can create, modify, and delete directories and their contents as needed in your PHP code.

*/ 

// mkdir(): This function is used to create a new directory.

// create a new directory called "testdir" in the current directory
mkdir("testdir");
// You can also specify the permissions for the new directory using the optional second parameter:


// create a new directory called "testdir" with 0777 permissions

mkdir("testdir", 0777);
// rmdir();
// This function is used to remove a directory.

// remove the directory called "testdir"
rmdir("testdir");
// Note that the directory must be empty before you can remove it.

// opendir() and readdir(): These functions are used to read the contents of a directory.

// open the directory called "testdir" for reading
$dir_handle = opendir("testdir");

// read the contents of the directory
while (($file = readdir($dir_handle)) !== false) {
    echo $file . PHP_EOL;
}

// close the directory handle
closedir($dir_handle);
// This code opens the directory called "testdir", reads its contents using a loop, and prints out the name of each file or subdirectory in the directory.

// scandir(): This function is used to read the contents of a directory into an array.

// read the contents of the directory called "testdir" into an array
$dir_contents = scandir("testdir");

// print out the contents of the array
print_r($dir_contents);
// This code reads the contents of the directory called "testdir" into an array and prints out the contents of the array.

// is_dir(): This function is used to check if a given path is a directory.

// check if the path "testdir" is a directory
if (is_dir("testdir")) {
    echo "testdir is a directory";
} else {
    echo "testdir is not a directory";
}
// This code checks if the path "testdir" is a directory and prints out a message indicating whether it is or not.

// chdir(): This function is used to change the current working directory.

// change the current working directory to "testdir"
chdir("testdir");
// This code changes the current working directory to "testdir".

// getcwd(): This function is used to get the current working directory.

// get the current working directory
$current_dir = getcwd();

// print out the current working directory
echo "Current directory is: " . $current_dir;
// This code gets the current working directory and prints out a message indicating what it is.
