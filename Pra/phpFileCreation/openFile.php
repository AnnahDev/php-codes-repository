<?php
// Read content of the text file
$file_content = fopen("example.txt");

// Display the content on the web page
echo nl2br($file_content);  // nl2br() converts newlines to <br> tags for display
?>
