<?php
// PHP file delete
/*
You can delete a file for dicrease space, cleaning up, manage temporary file
*use for deleting unlink()

*/
$file = "test4.txt";

if (unlink($file)) {
    echo "The file was deleted successfully";
} else {
    echo "The file could not be deleted.";
}

//symlink() function
$target = "test8.txt";
$link = "test7.lnk";
symlink($target, $link);

echo readlink($link);

unlink("test.lnk");

//rename 
//01.reaname() 
//rename("test5.txt", "test10.txt");
//02. copy
copy("test3.txt", "test10.txt");
unlink("test3.txt");
