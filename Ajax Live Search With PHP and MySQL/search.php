<html>
<head>
<script src="jquery-3.2.1.min.js"></script>
<style>
#search-data{
	padding: 10px;
	border: solid 1px #BDC7D8; 
	margin-bottom: 20px;	
	display: inline;
	width: 80%;
	
}
.search-result{
	border-bottom:solid 1px #BDC7D8;
	padding:10px;
	font-family:Times New Roman;
	font-size: 20px;color:blue;	
}
#display-button{
	position:relative;
	width:80px;
	height:38px;
	float:right;
	left:-55px;
	text-align:center;
	float:right;
	left:-55px;
	background-color:#4683ea;	
}

</style>
<script>
// on click search results...
$(document).on("click", "#display-button" , function() { 
     var value = $("#search-data").val(); 
	 if (value.length != 0) {
		//alert(99933);
        searchData(value);
    } else {     
         $('#search-result-container').hide();
    } 	 
});

// This function helps to send the request to retrieve data from mysql database...
function searchData(val){
	$('#search-result-container').show();
	$('#search-result-container').html('<div><img src="preloader.gif" width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');
	$.post('controller.php',{'search-data': val}, function(data){
					
		if(data != "")
			$('#search-result-container').html(data);
        else				
		$('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
	}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
					
	alert(thrownError); //alert with HTTP error
									
	});
}


</script>
</head>
<body>
<div style="width: 700px;margin:40px auto;">

<div id="search-box-container" >
<label > How To Integrate Live Search In PHP And MySQL With JQuery : </label><br><br>
<input  type="text" id="search-data" name="searchData" placeholder="Search By Post Title (word length should be greater than 3) ..." autocomplete="off" />
<div id="display-button" style="">  <img style="padding:7px;" src="search.png"  />  </div> 
</div>

<div id="search-result-container" style="border:solid 1px #BDC7D8;display:none; ">
</div>


</div>

</body>

</html>