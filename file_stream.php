<?php
// In PHP, a file stream is a connection between a PHP script and a file on disk. It allows you to read from or write to a file in a more efficient and flexible way than simply using functions like file_get_contents() and file_put_contents(). With file streams, you can control how data is read or written, buffer data for improved performance, and manipulate the file pointer to move around within the file.

// Here's an example of how to use file streams in PHP:


// Open the file in read-only mode
$handle = fopen('example.txt', 'r');

// Read the file contents
$data = '';
while (!feof($handle)) {
  $data .= fread($handle, 8192);
}

// Close the file handle
fclose($handle);

// Print the file contents
echo $data;

// In this example, we start by opening a file handle using the fopen() function. We pass in the name of the file we want to open ('example.txt') and the mode we want to open the file in ('r', which stands for read-only).

// We then use a while loop and the feof() function to read the file contents into a variable. We read 8192 bytes at a time using the fread() function, which reads data from the file handle. We concatenate each chunk of data onto the $data variable until we reach the end of the file.

// After reading the file contents, we close the file handle using the fclose() function.

// Finally, we print the file contents to the screen using the echo statement.

// You can also use file streams to write data to a file:


// Open the file in write mode
$handle = fopen('example.txt', 'w');

// Write some data to the file
fwrite($handle, "Hello, world!");

// Close the file handle
fclose($handle);

// In this example, we open the file in write mode ('w') using the fopen() function. We then write some data to the file using the fwrite() function, and close the file handle using the fclose() function.

// File streams can be very powerful, and there are many additional functions you can use to manipulate file streams, such as fseek(), ftell(), fflush(), and stream_set_blocking(). Additionally, file streams can be used to read and write binary data, handle remote files using protocols like HTTP and FTP, and more.


// File modes: When opening a file with fopen(), you can specify the mode you want to use to open the file. The available modes are:
// 'r': read-only mode
// 'w': write-only mode, truncating the file if it exists or creating a new file if it doesn't exist
// 'a': write-only mode, appending data to the end of the file if it exists or creating a new file if it doesn't exist
// 'x': write-only mode, creating a new file and failing if the file already exists
// 'c': write-only mode, creating a new file if it doesn't exist or opening the file for writing if it does exist
// You can also specify whether you want to read or write binary data by appending a 'b' to the mode, such as 'rb' for read-only binary mode.

// File pointers: When you open a file handle with fopen(), PHP sets a file pointer to the beginning of the file. You can use the fseek() function to move the file pointer to a specific position in the file, or the ftell() function to get the current position of the file pointer. This can be useful for reading or writing specific sections of a file.

// Buffered I/O: By default, PHP uses buffered I/O when reading or writing to a file stream. This means that data is read or written in chunks, which can improve performance. However, you can control the buffering behavior using the stream_set_read_buffer() and stream_set_write_buffer() functions.

// Remote files: PHP also supports file streams for remote files, such as files accessed over HTTP or FTP. To read or write to a remote file, you simply use a URL instead of a local file path when calling fopen(). For example:


$handle = fopen('http://example.com/example.txt', 'r');
// This will open the file example.txt on the example.com website for reading.

