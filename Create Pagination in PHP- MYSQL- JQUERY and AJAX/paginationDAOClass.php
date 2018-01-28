<?php
	include("config.php");
	Class paginationClass{
		
		private $SetRecordLimit = 2 ;	
		
		// connect to mysql database...	
		public function DBConnect(){
			
			$dbhost = DB_SERVER; // set the hostname
			$dbname = DB_DATABASE ; // set the database name
			$dbuser = DB_USERNAME ; // set the mysql username
			$dbpass = DB_PASSWORD;  // set the mysql password
			
			try {
				$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$dbConnection->exec("set names utf8");
				$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $dbConnection;
				
			}
			catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}			
		}		
		
		// Display Pagination data page wise...
		public function displayData( $pageNumber ){			
			
			$SetOffSetLimit = $pageNumber * $this->SetRecordLimit ;			
			
			try {
				$dbConnection = $this->DBConnect();
				
				$stmt = $dbConnection->prepare('SELECT * FROM `POST` LIMIT :SetRecordLimit OFFSET :SetOffSetLimit');
				$stmt->bindParam(':SetRecordLimit', $this->SetRecordLimit , PDO::PARAM_INT);
				$stmt->bindParam(':SetOffSetLimit', $SetOffSetLimit , PDO::PARAM_INT);
				$stmt->execute();
				
				$Count = $stmt->rowCount(); 				
				
				if ($Count  > 0){
					while($data=$stmt->fetch(PDO::FETCH_ASSOC)) {
											
						echo '<div id="post-data"><h4>'.$data['POSTTITLE'].'</h4><div> '.$data['POSTDETAILS'].'</div></div>';
						
					}
				}				
			}
			catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}	
		}		
		// Get the Total Number Records...
		public function getTotalNumberOfRecords(){
			
			try {
				$dbConnection = $this->DBConnect();
				
				$stmt = $dbConnection->prepare('SELECT * FROM `POST`');
				
				$stmt->execute();
				
				$Count = $stmt->rowCount(); 				
				if ($Count  > 0){
					echo $total_groups = ceil($Count/$this->SetRecordLimit);					
					} else{
					echo "0" ;
				}
			}			
			catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}			
		}	
		
	}	
	
?>