//cookies alert
var update = document.getElementById("btn");
var cookieMsg = document.getElementById("msg");

update.addEventListener("click", changeText, false);

function changeText(e){
	cookieMsg.innerHTML = "Cookies were accepted. Would you like to revoke? ";

	var aTag = document.createElement("a");
	aTag.innerHTML = "Yes, revoke.";
	cookieMsg.appendChild(aTag);
}


//visitors table
var visitorData = [
	{month:"May", numVisitors:"58"},
	{month:"June", numVisitors:"80"},
	{month:"July", numVisitors:"165"},
	{month:"August", numVisitors:"247"},
	{month:"September", numVisitors:"394"},
	{month:"October", numVisitors:"536"}
];

for(var i = 0; i<visitorData.length; i++){

	var row = document.createElement("tr");

	var monthCol = document.createElement("td");
	var visitorCol = document.createElement("td");

	monthCol.innerHTML = visitorData[i].month;
	visitorCol.innerHTML = visitorData[i].numVisitors;

	row.appendChild(monthCol);
	row.appendChild(visitorCol);

	document.getElementById("visitors").appendChild(row);
}

console.log(row);

//high contrast 
var hContrastOn = document.getElementById("hContrastOn");
var hContrastOff = document.getElementById("hContrastOff");
var onBtn = document.getElementById("onBtn");
var offBtn = document.getElementById("offBtn");

onBtn.addEventListener("click", changeStyle, false);

function changeStyle(e){
	document.body.style.backgroundColor = "#191919";
	document.body.style.color = "#fff";
	document.body.style.backgroundImage = "none";
	document.body.style.lineHeight = "1.5em";
	document.body.style.letterSpacing = "1px";

	var links = document.getElementsByTagName("a");
    for(var i=0;i<links.length;i++){
 		links[i].style.color = "#f4e542";  
    } 

    var main = document.getElementsByTagName("main");
    for(var i=0;i<main.length;i++){
 		main[i].style.backgroundColor = "#000"; 
 		main[i].style.padding = "30px"; 
    }

    var articles = document.getElementsByTagName("article");
    for(var i=0;i<articles.length;i++){
 		articles[i].style.backgroundColor = "#000";  
    }
};