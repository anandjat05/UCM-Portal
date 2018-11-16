//created by Anand Jat
//Id: 700673474
function validation(){
	//funtion for validation
	var ucmId = document.getElementById("ucmId").value;
	var pass =  document.getElementById("password").value;
	
	if(isNaN(ucmId)){
		//if username is blank
		document.getElementById("errorId").innerHTML = "**Input must be Number";
		return false;
	}
	else if ((ucmId == "")||(ucmId.length!= 9)){
		//if username is less than or greater than 9 digit
		document.getElementById("errorId").innerHTML = "**UCM Id must be 9 digit";
		return false;
	}
	else if(!ucmId.startsWith('700')){
		//if student id must start with 700
		document.getElementById("errorId").innerHTML = "**Student Id must start with '700'";
		return false;
	}
	else if ((pass.length<=0)){
		//if password is less than 4 digit
		document.getElementById("errorPassword").innerHTML = "**Please Enter your Password";
		return false;
	}
	else if ((pass.length<=5)||(pass.length>20)){
		//if password is less than 4 digit
		document.getElementById("errorPassword").innerHTML = "**Password Length must be between 5 to 20 digit";
		return false;
	}
	else {
		return true;
	}
	
}