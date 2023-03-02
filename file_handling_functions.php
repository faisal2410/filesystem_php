<?php

/*
File Handling Functions in PHP:

PHP provides a variety of file handling functions for working with files, such as fopen(), fread(), fwrite(), and fclose(). These functions can be used to open, read, write, and close files, respectively.

Opening Files:

The fopen() function is used to open a file for reading, writing, or appending. The function takes two parameters: the filename and the mode.

Modes:

The second parameter to fopen() specifies the mode in which the file should be opened. Here are some of the most common modes:

'r': Open the file for reading.
'w': Open the file for writing. If the file doesn't exist, it will be created. If it does exist, its contents will be truncated.
'a': Open the file for appending. If the file doesn't exist, it will be created.
'x': Open the file for writing, but only if it doesn't already exist. If the file exists, the function will fail.
'b': Open the file in binary mode, which is necessary for some file types.
Reading Files:

Once a file is opened, you can read its contents using the fread() function. The function takes two parameters: the file handle and the number of bytes to read.

Writing Files:

To write to a file, you can use the fwrite() function. The function takes two parameters: the file handle and the string to write.

Closing Files:

It's important to close files when you're done working with them, to ensure that the file resources are released and that any changes you've made are written to disk. You can close a file using the fclose() function.

Conclusion:

In conclusion, file handling functions in PHP are a fundamental part of working with files in web applications. By understanding how to open, read, write, and close files using functions like fopen(), fread(), fwrite(), and fclose(), you can create robust and reliable applications that can handle a wide variety of use cases.

*/ 

// Example 1 👀

// $file = fopen('myfile.txt', 'r');

// In this example, we're opening a file called "myfile.txt" for reading.

// Example 2 👀

// $file = fopen('myfile.txt', 'r');
// echo $contents = fread($file, filesize('myfile.txt'));
// fclose($file);

// In this example, we're opening the file "myfile.txt" for reading, reading its contents using fread(), storing the contents in a variable called $contents, and then closing the file using fclose().

// Example 3 👀

// $file = fopen('myfile.txt', 'w');
// fwrite($file, 'Hello, world!');
// fclose($file);

// In this example, we're opening the file "myfile.txt" for writing, writing the string "Hello, world!" to the file using fwrite(), and then closing the file using fclose().


// Example 4 👀
// Appending to a File:
// To append data to an existing file, you can use the 'a' mode when opening the file, and then use the fwrite() function to write to the file. 

$file = fopen('myfile.txt', 'a');
fwrite($file, "This is some additional text\n");
fclose($file);
// In this example, we're opening the file 'myfile.txt' in append mode, writing the string "This is some additional text" to the file, and then closing the file.

// Example 5 👀

// Reading a File Line by Line:
// If you need to read a file line by line, you can use the fgets() function, which reads a single line from the file. Here's an example:

$file = fopen('myfile.txt', 'r');
while (!feof($file)) {
    $line = fgets($file);
    echo $line .PHP_EOL;
}
fclose($file);
// In this example, we're opening the file 'myfile.txt' for reading, using a while loop to read each line of the file using fgets(), echoing each line to the screen with an HTML line break, and then closing the file.

// Example 6 👀

// Checking if a File Exists:
// Before working with a file, it's often a good idea to check if the file exists. You can do this using the file_exists() function.

if (file_exists('myfile.txt')) {
    $file = fopen('myfile.txt', 'r');
    // do stuff with the file
    fclose($file);
} else {
    echo "File not found.";
}
// In this example, we're using the file_exists() function to check if the file 'myfile.txt' exists. If it does, we open the file for reading, do some stuff with the file, and then close it. If the file doesn't exist, we echo the message "File not found."

// Example 7 👀

// Deleting a File:
// To delete a file, you can use the unlink() function.

// if (unlink('myfile.txt')) {
//     echo "File deleted.";
// } else {
//     echo "Error deleting file.";
// }
// In this example, we're using the unlink() function to delete the file 'myfile.txt'. If the file is successfully deleted, we echo the message "File deleted." If there's an error deleting the file, we echo the message "Error deleting file."


// Example 8 👀

// Writing to a CSV File:
// You can use PHP's built-in functions to write data to a CSV file. Here's an example:


$csv_file = fopen('data.csv', 'w');
$data = array(
    array('Name', 'Age', 'City'),
    array('John', 25, 'New York'),
    array('Jane', 30, 'London'),
    array('Bob', 35, 'Paris')
);

foreach ($data as $row) {
    fputcsv($csv_file, $row);
}

fclose($csv_file);
// In this example, we're creating a two-dimensional array with some sample data, and then using a foreach loop to write each row to the CSV file using the fputcsv() function. We're then closing the file.

// Example 9 👀
// Reading a CSV File:
// To read data from a CSV file, you can use PHP's built-in functions. 


$csv_file = fopen('data.csv', 'r');

while (($row = fgetcsv($csv_file)) !== false) {
    echo $row[0] . ', ' . $row[1] . ', ' . $row[2] . '<br>';
}

fclose($csv_file);
// In this example, we're opening the CSV file 'data.csv' for reading, using a while loop to read each row of the file using the fgetcsv() function, and then echoing the data to the screen. We're then closing the file.

// Example 10 👀

// Working with Directories:
// You can use PHP's built-in functions to work with directories. 

// Creating a directory
mkdir('mydir');

// Removing a directory
rmdir('mydir');

// Checking if a directory exists
if (is_dir('mydir')) {
    echo "Directory exists.";
} else {
    echo "Directory does not exist.";
}

// Listing the contents of a directory
$files = scandir('mydir');
foreach ($files as $file) {
    echo $file .PHP_EOL;
}
// In this example, we're creating a directory called 'mydir' using the mkdir() function, removing the directory using the rmdir() function, checking if the directory exists using the is_dir() function, and listing the contents of the directory using the scandir() function.

// Example 11 👀

// Copying a File:
// To copy a file in PHP, you can use the copy() function. Here's an example:

$source_file = 'source.txt';
$destination_file = 'destination.txt';

if (copy($source_file, $destination_file)) {
    echo "File copied successfully.";
} else {
    echo "File copy failed.";
}
// In this example, we're copying the file 'source.txt' to 'destination.txt' using the copy() function. We're then checking the return value of the function to determine whether the copy was successful or not.
