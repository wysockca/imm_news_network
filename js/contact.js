//contact form
var sendMsgBtn = document.getElementById("sendMsgBtn");
sendMsgBtn.addEventListener("click", addMsgFunction, false);

function addMsgFunction(e) {
	var myRequest = new XMLHttpRequest; 
	myRequest.onreadystatechange = function(){     
	    
		if(myRequest.readyState === 4){        
			//console.log(myRequest.responseText);// modify or populate html elements based on response.
			var responseObj = JSON.parse(myRequest.responseText);
			console.log(responseObj.success);
		} 
	document.getElementById("contactForm").style.display = "none";
	document.getElementById("msgSent").style.display = "block";
};

var fNameInput = document.getElementById("fNameInput");
var lNameInput = document.getElementById("lNameInput");
var emailInput = document.getElementById("emailInput");
var subjectInput = document.getElementById("subjectInput");
var msgInput = document.getElementById("msgInput");
var techInput = document.getElementById("techInput");
var indInput = document.getElementById("indInput");
var desInput = document.getElementById("desInput");
var writerInput = document.getElementById("writerInput");
var contribInput = document.getElementById("contribInput");
var adminInput = document.getElementById("adminInput");

myRequest.open("POST", "process-contact.php", true); //true means it is asynchronous // Send urls through the url
myRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

myRequest.send("firstName=" + fNameInput.value+
	"&lastName=" + lNameInput.value+
	"&email=" + emailInput.value+
	"&subject=" + subjectInput.value+
	"&message=" + msgInput.value+
	"&interest=" + techInput.value+
	"&interest=" + indInput.value+
	"&interest=" + desInput.value+
	"&role=" + writerInput.value+
	"&role=" + contribInput.value+
	"&role=" + adminInput.value); 
}