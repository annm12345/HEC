<?php
$directory = 'labels'; // Replace with the actual directory path

// Get the list of files in the directory
$fileList = scandir($directory);

// Filter out directories and hidden files
$fileList = array_filter($fileList, function($file) {
  return !is_dir($file) && !in_array($file, ['.', '..']);
});

// Convert the file list to JSON format
$fileListJson = json_encode(array_values($fileList));

echo $fileListJson;
?>
