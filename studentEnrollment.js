//Created By Ashwani Koul
//Styudent ID:- 700671753.


function validation(){
	//function for validation
	
	var email =  document.getElementById("email").value;
	var fName = document.getElementById("fName").value;
	var lName =  document.getElementById("lName").value;
	var ucmId = document.getElementById("ucmId").value;
	
	
	
	if(!isNaN(fName)){
		//if username is Number
		document.getElementById("errorFname").innerHTML = "**First Name must be Character(A-Z)";
		return false;
	}
	else if((fName.length<=1)||(fName.length>=32)){
		//if First name is less than 1 or greater than 32 character
		document.getElementById("errorFname").innerHTML = "**First Name must be between 1 to 32 Character";
		return false;
	}
	if(!isNaN(lName)){
		//if Last name is Number
		document.getElementById("errorLname").innerHTML = "**Last Name must be Character(A-Z)";
		return false;
	}
	else if((lName.length<=1)||(lName.length>=32)){
		//if Last name is less than 1 or greater than 32 character
		document.getElementById("errorLname").innerHTML = "**Last Name must be between 1 to 32 Character";
		return false;
	}
	if(email ==""){
		//if Email is not Valid
		document.getElementById("errorEmail").innerHTML = "**Please Enter your Email-Id";
		return false;
	}
	else if(email.indexOf("@")<=0){
		//if @ sign is on First Position
		document.getElementById("errorEmail").innerHTML = "**Email Cannot Start with '@'";
		return false;
	}
	else if(email.indexOf(".")!=(email.length-4)){
		//if position of " . " is not on last fourth and third position
		document.getElementById("errorEmail").innerHTML = "**Invalid Email-Id";
		return false;
	}
	else if(email.toLowerCase().indexOf("o")!=(email.length-5) || email.toLowerCase().indexOf("m")!=(email.length-6) ||
		    email.toLowerCase().indexOf("c")!=(email.length-7) || email.toLowerCase().indexOf("u")!=(email.length-8) ){
		//if position of "ucmo" is not on last seventh, sixth, fifth and fourth position
		document.getElementById("errorEmail").innerHTML = "**Enter UCM Email-Id only";
		return false;
	}
	if (ucmId ==""){
		//if username is less than or greater than 9 digit
		document.getElementById("errorId").innerHTML = "**Please Enter you Student Id";
		return false;
	}
	else if(isNaN(ucmId)){
		//if username is blank
		document.getElementById("errorId").innerHTML = "**Input must be Number";
		return false;
	}
	else if(ucmId.indexOf('7') != 0 && ucmId.indexOf('0')!=1){
		// if user Id isn't start with 700
		document.getElementById("errorId").innerHTML = "**UCM Id must Start with 700XXXXXX";
		return false;
	}
	else if (ucmId.length!= 9){
		//if username is less than or greater than 9 digit
		document.getElementById("errorId").innerHTML = "**UCM Id must be 9 digit";
		return false;
	}
	
	else {
		return true;
		
	}
	
}



