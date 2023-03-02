<?php
/*
Study reference :
https: //www.php.net/manual/en/function.chmod

file permissions are used to control who can read, write, or execute a file on the server's file system. Each file on the file system has a set of permissions that determine what actions can be taken on that file by different users or groups.

Here are the three main types of file permissions in PHP:

Read permission: Allows a user to read the contents of a file.
Write permission: Allows a user to modify the contents of a file.
Execute permission: Allows a user to execute a file (run it as a script).
Each permission can be granted or denied to three types of users: the file owner, members of the file's group, and all other users (also known as "world" or "other").

 👀👀In PHP, file permissions are represented as a three-digit number, where each digit represents the permissions for one of the three types of users. The first digit represents the permissions for the file owner, the second digit represents the permissions for members of the file's group, and the third digit represents the permissions for all other users.
*/ 

// set read, write, and execute permissions for the file owner
chmod("myfile.txt", 0700);

// set read and execute permissions for the file owner,
// read-only permissions for members of the file's group,
// and no permissions for all other users
chmod("myfile.txt", 0740);
// In the first example, the chmod() function is used to set read, write, and execute permissions for the file owner of the file called "myfile.txt". The number 0700 represents these permissions: the file owner has read, write, and execute permissions, while members of the file's group and all other users have no permissions.

// In the second example, the chmod() function is used to set more specific permissions for the file called "myfile.txt". The number 0740 represents these permissions: the file owner has read and execute permissions, but not write permissions; members of the file's group have read-only permissions, but no write or execute permissions; and all other users have no permissions at all.

// You can also use the fileperms() function to get the current permissions of a file:


// get the current permissions of the file called "myfile.txt"
$perms = fileperms("myfile.txt");

// convert the permissions to a human-readable format
echo substr(sprintf('%o', $perms), -4);
// This code gets the current permissions of the file called "myfile.txt" using the fileperms() function and converts them to a human-readable format using the sprintf() and substr() functions. The output will be a four-digit number representing the file's permissions in octal format (e.g. 0644 for read and write permissions for the file owner, and read-only permissions for all other users).