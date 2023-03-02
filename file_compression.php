<?php
// File compression is the process of reducing the size of a file by encoding its contents in a more efficient way. In PHP, you can use several built-in functions to compress and decompress files. The two most common compression formats supported in PHP are ZIP and GZIP.


$filename = "example.txt";
$zipname = "example.zip";

// Create new ZIP archive
$zip = new ZipArchive();
if ($zip->open($zipname, ZipArchive::CREATE) !== TRUE) {
  exit("Cannot create ZIP archive");
}

// Add file to ZIP archive
$zip->addFile($filename);

// Close ZIP archive
$zip->close();

// Download compressed file
header("Content-Type: application/zip");
header("Content-Disposition: attachment; filename=$zipname");
header("Content-Length: " . filesize($zipname));
readfile($zipname);

// Delete compressed file
unlink($zipname);

// In this example, we start by defining a filename for the file we want to compress ($filename) and a name for the compressed file ($zipname). We then create a new ZipArchive object and use its open() method to create a new ZIP archive with the specified name.

// Next, we add the file we want to compress to the ZIP archive using the addFile() method. This method takes the filename of the file to add as its argument.

// After adding the file to the archive, we close the archive using the close() method.

// Finally, we send the compressed file to the user as a download using several header statements, and then delete the compressed file from the server using the unlink() function.

// Here's an example of how to decompress a file using PHP's built-in ZIP compression:


$zipname = "example.zip";
$extractTo = "extracted/";

// Open ZIP archive
$zip = new ZipArchive();
if ($zip->open($zipname) !== TRUE) {
  exit("Cannot open ZIP archive");
}

// Extract files from ZIP archive
$zip->extractTo($extractTo);

// Close ZIP archive
$zip->close();

// In this example, we start by defining the name of the compressed file we want to decompress ($zipname) and the directory where we want to extract the files to ($extractTo). We then create a new ZipArchive object and use its open() method to open the ZIP archive with the specified name.

// Next, we extract the files from the archive to the specified directory using the extractTo() method.

// Finally, we close the archive using the close() method.

// It's worth noting that ZIP compression is not the only way to compress files in PHP. You can also use PHP's built-in GZIP compression functions (gzcompress() and gzuncompress()) to compress and decompress files in the GZIP format. The process for compressing and decompressing files using GZIP is similar to the process for ZIP compression, but with different functions and arguments.