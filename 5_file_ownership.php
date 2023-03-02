<?php
// file ownership refers to which user or group has ownership of a file on the server's file system. Each file on the file system is owned by a specific user and group, and these ownership settings can be used to control who can access or modify the file.

// In PHP, you can use the chown() function to change the owner of a file, and the chgrp() function to change the group ownership of a file. 

// change the owner of the file "myfile.txt" to user "john"
chown("myfile.txt", "john");

// change the group ownership of the file "myfile.txt" to group "users"
chgrp("myfile.txt", "users");
// In this example, the chown() function is used to change the owner of the file "myfile.txt" to the user "john", and the chgrp() function is used to change the group ownership of the file to the group "users".

// You can also use the fileowner() and filegroup() functions to get the current owner and group ownership of a file:


// get the owner of the file "myfile.txt"
$owner = fileowner("myfile.txt");

// get the group ownership of the file "myfile.txt"
$group = filegroup("myfile.txt");
// These functions will return the user ID and group ID of the file's owner and group ownership, respectively.

// In addition, you can use the posix_getpwuid() and posix_getgrgid() functions to get more information about the owner and group, such as their names:

// get the name of the file owner
$owner_info = posix_getpwuid($owner);
$owner_name = $owner_info['name'];

// get the name of the group owner
$group_info = posix_getgrgid($group);
$group_name = $group_info['name'];
// These functions will return an array of information about the user or group, which you can then use to extract the user or group name.