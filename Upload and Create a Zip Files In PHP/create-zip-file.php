
<?php
	
if( isset($_POST['submit']) )  {
	
	$filename = $_FILES['uploadzip']['name'];
	$source = $_FILES["uploadzip"]["tmp_name"];
	$type = $_FILES["uploadzip"]["type"];	
	
	//echo sizeof($filename) ;
	
	//check file is selected for upload
	if(isset($_FILES['uploadzip']['name']) != ""){
	
	     //First check whether zip extension is enabled or not
		if(extension_loaded('zip')) {
		
			//create the directory named as "images"
			$folderLocation = "images" ; 
			if (!file_exists($folderLocation)) {
				mkdir($folderLocation, 0777, true);
			}		
         
			$zip_name = time().".zip"; // Zip file name 
			$zip = new ZipArchive;
			if ($zip->open($zip_name, ZipArchive::CREATE) == TRUE){          
			
				foreach($_FILES["uploadzip"]["tmp_name"] as $key=>$tmp_name){
					$temp = $_FILES["uploadzip"]["tmp_name"][$key];
					$actualfile = $_FILES["uploadzip"]["name"][$key];
					// moving image files to temporary locati0n that is "images/"
					move_uploaded_file($temp, $folderLocation."/".$actualfile);
					// adding image file to zip
					$zip->addFile($folderLocation."/".$actualfile, $actualfile );
   
				} 
			// All files are added, so close the zip file.
			$zip->close();
		  }
       
		}
		// push to download the zip
		header('Content-type: application/zip');
		header('Content-Disposition: attachment; filename="skptricks.zip"');
		readfile($zip_name);
		// remove zip file is exists in temp path
		unlink($zip_name);
		//remove image directory once zip file created
		removedir($folderLocation);	
	}
	
}	
 // user defined function to remove directory with their content
function removedir($dir) {
  if (is_dir($dir)) {
    $objects = scandir($dir);
    foreach ($objects as $object) {
      if ($object != "." && $object != "..") {
        if (filetype($dir."/".$object) == "dir") 
           rrmdir($dir."/".$object); 
        else unlink   ($dir."/".$object);
      }
    }
    reset($objects);
    rmdir($dir);
  }
 }	
	
?>