<?php
// Function to get last modified time of a file
function getFileModifiedTime($filePath) {
    return file_exists($filePath) ? filemtime($filePath) : time();
}
