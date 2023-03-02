<?php
// you can copy and move files using the copy() and rename() functions, respectively.

// Copying files: The copy() function takes two arguments: the path of the source file and the path of the destination file. 

if (copy('/path/to/source/file.txt', '/path/to/destination/file.txt')) {
    echo 'File copied successfully!';
} else {
    echo 'Failed to copy file.';
}
// In this example, the copy() function copies the file /path/to/source/file.txt to /path/to/destination/file.txt. If the copy is successful, the script prints "File copied successfully!"; otherwise, it prints "Failed to copy file."

// Note that if the destination file already exists, copy() will overwrite it.

// Moving files: The rename() function is used to move files from one location to another. It takes two arguments: the path of the source file and the path of the destination file. 

if (rename('/path/to/source/file.txt', '/path/to/destination/file.txt')) {
    echo 'File moved successfully!';
} else {
    echo 'Failed to move file.';
}
// In this example, the rename() function moves the file /path/to/source/file.txt to /path/to/destination/file.txt. If the move is successful, the script prints "File moved successfully!"; otherwise, it prints "Failed to move file."

// Note that if the destination file already exists, rename() will overwrite it.

// Both copy() and rename() return true if the operation is successful and false otherwise. You can use this return value to check whether the file was copied or moved successfully.