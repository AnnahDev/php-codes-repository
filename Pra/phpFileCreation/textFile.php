<?php
// Open a file for writing (create or overwrite)
$file = fopen("example.txt", "w"); // "w" mode opens the file for writing

// Check if the file is opened successfully
if ($file) {
    // Write data to the file
    fwrite($file, "This is a sample text file created using PHP.\n ");
    fwrite($file, "PHP allows for file creation and writing operations.");

    // Close the file after writing
    fclose($file);

    echo "Text file created and data written successfully.";
} else {
    echo "Failed to create the file.";
}


echo "Current directory: " . getcwd();

?>