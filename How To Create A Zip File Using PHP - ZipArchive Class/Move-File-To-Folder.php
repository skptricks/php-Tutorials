<?php	
$zip = new ZipArchive;
if ($zip->open('skptricks-zip.zip',  ZipArchive::CREATE) == TRUE)
{
    // Add files to the zip file
    $zip->addFile('File1.txt', 'Folder1/File1.txt');
    $zip->addFile('File2.txt','Folder2/File2.txt'); 
 
    // All files are added, so close the zip file.
    $zip->close();
}
?>