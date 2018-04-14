
<?php
// including the upload the zip php script	
include 'create-zip-file.php';
?>
<html >
<head>
<link rel="stylesheet" type="text/css" href="design.css">
</head>

<body>	

<h3>Upload and create zip file</h3>
<form method="post" action="" name="login" enctype="multipart/form-data">
	
Choose a zip file to upload: <input type="file" name="uploadzip[]" multiple="" />
<input type="submit" name="submit" value="Upload" />

</form>


</body>

</html>