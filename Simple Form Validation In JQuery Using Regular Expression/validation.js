$(document).ready(function() {	
$( "#submitform" ).on( "click", function() {
	
	var username = $('#username').val();
	var emailid = $('#emailid').val();
	var mobilenumber = $('#mobilenumber').val();
	var websiteurl = $('#websiteurl').val();
	var userpassword = $('#userpassword').val();
    // Hiding error messages	
	$('.errorMsg').hide();
	
	if(checkUsername(username) == false){	   
       $('#errorusername').show();	   
       return false;	   
	}else if(checkEmail(emailid) == false){	   
	   $('#erroremail').show();	
       return false;	  	   
	}else if(checkMobileNumber(mobilenumber) == false){	   
       $('#errormobile').show();		   
       return false;	  	   
	}else if(checkUrl(websiteurl) == false){	   
	   $('#errorwebsite').show();	
       return false;	  	   
	}else if(checkPassword(userpassword) == false){	   
	   $('#errorpassword').show();		   
       return false;	  	   
	}else{
		alert("successful")
	}
  
});
});
//function used to check valid email
function checkEmail(email)
{
    //regular expression for email
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    if(pattern.test(email)){
        return true;
    } else {
        return false;
    }
}

//function used to validate website URL
function checkUrl(url)
{
    //regular expression for URL
    var pattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
 
    if(pattern.test(url)){
        return true;
    } else {
        return false;
    }
}	

//function used to validate username
function checkUsername(username){
	//regular expression for username
    var pattern = /^[a-z0-9_-]{5,15}$/;
    if(pattern.test(username)){
        return true;
    }else{
        return false;
    }
}

//function used to validate password
function checkPassword(password){
	//regular expression for password
    var pattern = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;
    if(pattern.test(password)){
        return true;
    }else{
        return false;
    }
}
//function used to validate mobile number
function checkMobileNumber(mobile){
	//regular expression for mobile number
    var pattern = /^[0-9]{10}$/;
    if(pattern.test(mobile)){
        return true;
    }else{
        return false;
    }
}