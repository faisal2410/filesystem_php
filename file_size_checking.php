<?php
// you can check the size of a file using the filesize() function. This function returns the size of the file in bytes as an integer.

// get the size of the file "myfile.txt"
$filesize = filesize("myfile.txt");

// print the file size in bytes
echo "The file size is: " . $filesize . " bytes";
// In this example, the filesize() function is used to get the size of the file "myfile.txt" and store it in the variable $filesize. The size of the file in bytes is then printed to the screen using the echo statement.

// You can also format the file size to be more human-readable by dividing the size in bytes by a factor of 1024 and using a suffix such as "KB" or "MB". 


// get the size of the file "myfile.txt"
$filesize = filesize("myfile.txt");

// format the file size in KB
$filesize_kb = round($filesize / 1024, 2);
echo "The file size is: " . $filesize_kb . " KB";
// In this example, the size of the file in bytes is divided by 1024 to get the size in kilobytes, rounded to two decimal places using the round() function, and stored in the variable $filesize_kb. The formatted file size in kilobytes is then printed to the screen using the echo statement.

// Note that filesize() may not work correctly for files larger than 2 gigabytes on some platforms. In these cases, you can use the sprintf() function to format the file size in a custom way:


// get the size of the file "myfile.txt"
$filesize = filesize("myfile.txt");

// format the file size using sprintf()
$formatted_size = sprintf("%.2f GB", $filesize / pow(1024, 3));
echo "The file size is: " . $formatted_size;
// In this example, the size of the file is divided by 1024 to the power of 3 to get the size in gigabytes, formatted to two decimal places using sprintf(), and stored in the variable $formatted_size. The formatted file size in gigabytes is then printed to the screen using the echo statement.