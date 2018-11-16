//created by Anand Jat
//Id: 7006783474

function validation(){
	//function for validation
	var ucmId = document.getElementById("ucmId").value;
	var email =  document.getElementById("email").value;
	var pass =  document.getElementById("password").value;
	var rePass = document.getElementById("rePassword").value;
	var fName = document.getElementById("fName").value;
	var lName =  document.getElementById("lName").value;
	var ucmId = document.getElementById("ucmId").value;
	var pass =  document.getElementById("password").value;
	
	
	if(!isNaN(fName)){
		//if username is Number
		document.getElementById("errorFname").innerHTML = "**First Name must be Character(A-Z)";
		return false;
	}else if((fName.length<=1)||(fName.length>=32)){
		//if First name is less than 1 or greater than 32 character
		document.getElementById("errorFname").innerHTML = "**First Name must be between 1 to 32 Character";
		return false;
	}
	if(!isNaN(lName)){
		//if Last name is Number
		document.getElementById("errorLname").innerHTML = "**First Name must be Character(A-Z)";
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
	else if(!(email.toLowerCase().endsWith("ucmo.edu")) ){
		//if position of "ucmo" is not on last seventh, sixth, fifth and fourth position
		document.getElementById("errorEmail").innerHTML = "**Enter UCM Email-Id only";
		return false;
	}
	if (ucmId ==""){
		//if username is less than or greater than 9 digit
		document.getElementById("errorId").innerHTML = "**Please Enter you Student Id";
		return false;
	}else if(!ucmId.startsWith('700')){
		//if student id must start with 700
		document.getElementById("errorId").innerHTML = "**Student Id must start with '700'";
		return false;
	}
	else if(isNaN(ucmId)){
		//if username is blank
		document.getElementById("errorId").innerHTML = "**Input must be Number";
		return false;
	}else if (ucmId.length!= 9){
		//if username is less than or greater than 9 digit
		document.getElementById("errorId").innerHTML = "**UCM Id must be 9 digit";
		return false;
	}
	if ((pass.length<=5)||(pass.length>20)){
		//if password is less than 4 digit
		document.getElementById("errorPass").innerHTML = "**Password Length must be between 5 to 20 digit";
		return false;
	}
	else if ((rePass.length<=5)||(rePass.length>20)){
		//if password is less than 4 digit
		document.getElementById("errorPass").innerHTML = "**Password Length must be between 5 to 20 digit";
		return false;
	}
	else if (pass != rePass){
		//if password is less than 4 digit
		document.getElementById("errorPass").innerHTML = "**Your Password does not Match";
		return false;
	}
	else {
		return true;
	}
	
}