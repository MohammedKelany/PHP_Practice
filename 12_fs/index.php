<?php
// Magic constants
echo __DIR__ . PHP_EOL . "<br>";
echo __FILE__ . PHP_EOL . "<br>";
// Create directory
// mkdir('test');
// Rename directory
// rename("test", "new_test");
// Delete directory
// rmdir("test");
mkdir('test/test2');
// Read files and folders inside directory
$dir = scandir('./');
echo '<pre>';
var_dump($dir);
echo '</pre>';
// file_get_contents, file_put_contents
// $file = file_get_contents('lorem.txt');
// file_put_contents('lorem.txt', "NEW WORD <br> $file");
// echo $file . PHP_EOL . "<br>";
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// echo file_exists("test");
// is_dir
// echo is_dir('test');
// filemtime
// filesize
// disk_free_space
// diskfreespace();
// file
// file("test");