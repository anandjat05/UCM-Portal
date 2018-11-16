//Function used for GO TO TOP button.
window.addEventListener("load", function(){
	document.getElementById("goBackToTopButton").addEventListener("click", function(){
		document.body.scrollTop = 0;//For Safari
		document.documentElement.scrollTop = 0;//For chrome,FireFox
	}, false);
}, false);//Function Closes.