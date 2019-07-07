<?php
$path = '/dir1/myfile.php';
$file = 'file1.txt';

/*// Return filename
echo basename($path);*/


/*// Return filename without ext
echo basename($path, '.php');*/

/*// Return the dir name from the path
echo dirname($path);*/

/*// Check if the file exists
echo file_exists($file1); // returns 1 if the file exists and null otherwise*/

/*// Get abs path
echo realpath($file1);*/

/*// Check to see if file
echo is_file($file1);*/

// the difference between is_file and file_exists is that, although both return 1 (true)
// if their argument is a file, is_file returns null (false) if its arguments is a directory while
// file_exists would return 1 (true) for a a directory.

/*// Check if writable
echo is_writable($file);*/

/*// Check if readable
echo is_readable($file);*/

/*// Get file size
echo filesize($file);*/

/*// Create a directory
mkdir('testing');*/

/*// Remove dir if empty
rmdir('testing');*/

/*// Copy file
echo copy('file1.txt', 'file.txt');*/

/*// Rename file
rename('file.txt', 'myfile.txt');*/

/*// Delete File
unlink('myfile.txt');*/

/*// Write from file to string
echo file_get_contents($file);*/

/*// Write a string to file
echo file_put_contents($file, 'Goodbye World');*/

/*// append to file
$current = file_get_contents($file);

$current .= 'Goodbye World';

file_put_contents($file, $current);*/

/*// Open File for reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));

echo $data;*/

// Open file for writing, you can use an existing file or create a new file in fopen
$handle = fopen('file2.txt', 'w');
$txt = 'John Doe';
fwrite($handle, $txt);
$txt = ' Steve Smith';
fwrite($handle, $txt);
fclose($handle);




