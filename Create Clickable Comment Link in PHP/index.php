<html >
<head>
<link rel="stylesheet" type="text/css" href="design.css">
<script src="jquery.min.js"></script>
</head>
<script>
$(document).ready(function() {
	
  $( "#submitform" ).on( "click", function() {
	
	var message = $('textarea').val();	
	
	if( message.length == "0" ){
	   $(".errorMsg").show();
	   
	}
	else{	
		
		//ajax request	
		dataString="link="+message ;

		$.ajax({
		type: "POST",
		url: "controller.php" ,
		data: dataString,
		cache: false,
		beforeSend: function(){ 		
		 $( "#loading" ).show();
		},
		success: function(html){		
          $( "#display-results" ).prepend( "<div id='message' >"+ html + "</div>"  );
		  $( "#loading" ).hide();
		  $('textarea').val("");	
		}
		}); 	
		
	}   
  }); 
});



</script>

<body>
<center> <b> Create Clickable Comment Link. </b> </center>

<div id="mainbox" >
<textarea  rows="4" cols="65"></textarea>
<div class="errorMsg" >*Please enter the text.</div>
<div id="loading" style="display:none;" >Please Wait...</div>
<input type="button" class="button" id="submitform" value="Submit">
</div>

<div id="display-results"></div>

</body>

</html>