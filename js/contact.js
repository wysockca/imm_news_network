//contact form
var contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", addMsgFunction, false);

function addMsgFunction(e) {
	e.preventDefault();
	var myRequest = new XMLHttpRequest; 
	myRequest.onreadystatechange = function(){     
	    
		if(myRequest.readyState === 4){        
			//console.log(myRequest.responseText);// modify or populate html elements based on response.
			var responseObj = JSON.parse(myRequest.responseText);
			console.log(responseObj.success);
		} 
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

	// console.log("firstName=" + fNameInput.value+
	// 	"&lastName=" + lNameInput.value+
	// 	"&email=" + emailInput.value+
	// 	"&subject=" + subjectInput.value+
	// 	"&message=" + msgInput.value+
	// 	"&tech=" + techInput.checked+
	// 	"&industry=" + indInput.checked+
	// 	"&design=" + desInput.checked+
	// 	"&writerrole=" + writerInput.checked+
	// 	"&contribrole=" + contribInput.checked+
	// 	"&adminrole=" + adminInput.checked);

	myRequest.send("firstName=" + fNameInput.value+
		"&lastName=" + lNameInput.value+
		"&email=" + emailInput.value+
		"&subject=" + subjectInput.value+
		"&message=" + msgInput.value+
		"&tech=" + techInput.checked+
		"&industry=" + indInput.checked+
		"&design=" + desInput.checked+
		"&writerrole=" + writerInput.checked+
		"&contribrole=" + contribInput.checked+
		"&adminrole=" + adminInput.checked); 

	contactForm.remove();
	var newPTag = document.createElement("p");
	var newH2Tag = document.createElement("h2");
	newH2Tag.innerHTML = "Thank you!"
	newPTag.innerHTML = "Your message has been sent, and we will get back to you shortly.";
	document.getElementById("msgPg").appendChild(newH2Tag);
	document.getElementById("msgPg").appendChild(newPTag);
}