<?php

$reader = new XMLReader();

$doc = new DOMDocument;

// read file external xml file...
if (!$reader->open("user-data.xml")) {
    die("Failed to open 'user-data.xml'");
}

// reading xml data...
while($reader->read()) {
  if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'employee') {
  
    $node = simplexml_import_dom($doc->importNode($reader->expand(), true));
   
    echo "<pre>";
	//get employee join date
    echo $address = $reader->getAttribute('joindate')."<br/>";   
	// get username
    echo $node->username."<br/>";
	// get employee id
	echo $node->empid."<br/>";
	// get employee age
	echo $node->age."<br/>";
	//get employee salary	
	
	echo "</pre>";
    
   }
}
$reader->close();

?>