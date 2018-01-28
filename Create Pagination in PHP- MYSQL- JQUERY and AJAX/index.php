<?php include("controller.php"); ?>
<html lang="en">
	<head>	
		<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>
		<style type="text/css" >
			.wrapper{
			margin: 10px auto;
			text-align: center;
			}
			
			#pagination-demo{
			display: inline-block;
			margin-bottom: 1.75em;
			}
			#pagination-demo li{
			display: inline-block;
			}
			
			#post-data{
			width: 500px; border: 2px dotted #d6d7da; 
			padding: 0px 15px 15px 15px; 
			border-radius: 5px;font-family: arial; 
			line-height: 16px;color: #333333; font-size: 14px; 
			background: #ffffff;rgba(200,200,200,0.7) 0 4px 10px -1px;
			margin: 10px auto;
			}
			
		</style>
	</head>
	<body>
		
		<div id="load-data"> </div>
		
		<span id="loading"  style="position:relative;left:680px;"> <img src="loading.gif"  /> </span>
		
		<div class="wrapper">        
			<ul id="pagination-demo" ></ul> 
		</div>
		
		<script>
			$(document).ready(function() {	
				
				$('#pagination-demo').twbsPagination({
					totalPages: <?php $a = new paginationClass(); echo $a->getTotalNumberOfRecords();  ?>,
					visiblePages: 4,
					next: 'Next',
					prev: 'Prev',
					onPageClick: function (event, page) {           
						loadData(page-1);
					}
				});
				
				function loadData(pageno){
					
					//ajax request	
					dataString="pageNo="+ pageno ;
					
					$.ajax({
						type: "POST",
						url: "controller.php" ,
						data: dataString,
						cache: false,
						beforeSend: function(){ 		
							$( "#loading" ).show();						
						},
						success: function(html){							    
							$( "#load-data" ).html(  html );
							$( "#loading" ).hide();
						}
					}); 
					
				}
				loadData(0) ;
				
			});	
			
		</script>		
	</body>
</html>