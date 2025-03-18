<?php
require 'vendor/autoload.php';  // Autoload the PhpWord package

use PhpOffice\PhpWord\PhpWord;  // Import PhpWord class

$phpWord = new PhpWord();  // Create a new Word document
$phpWord->addSection()->addText('Hey, this is a Word file created with PHP!');  // Add a section and text

$phpWord->save('myfile.docx');  // Save the document as 'myfile.docx'

echo "Word file created!";
?>
