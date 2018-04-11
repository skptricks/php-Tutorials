<?php	
$zip = new ZipArchive;
if ($zip->open('skptricks-zip.zip', ZipArchive::CREATE) == TRUE)
{
    // Add files to the zip file
    $zip->addFile('File1.txt');
    $zip->addFile('File2.txt');
 
    // Add File3.txt file to zip and rename it to File5.txt
    $zip->addFile('File3.txt', 'File5.txt');
 
    // Add a file newFile.txt file to zip by adding specified text in newFile.txt
    $zip->addFromString('newFile.txt', 'text to be added to the new.txt file');
 
    // All files are added, so close the zip file.
    $zip->close();
}
?>