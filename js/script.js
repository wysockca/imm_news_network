var update = document.getElementById("btn");
var cookieMsg = document.getElementById("msg");

btn.addEventListener("click", changeText, false);

function changeText(e){
	cookieMsg.innerHTML = "Cookies were accepted. Would you like to revoke? ";

	var aTag = document.createElement("a");
	aTag.innerHTML = "Yes, revoke.";
	cookieMsg.appendChild(aTag);
}

var visitorData = [
	{month:"May", numVisitors:"58"},
	{month:"June", numVisitors:"80"},
	{month:"July", numVisitors:"165"},
	{month:"August", numVisitors:"247"},
	{month:"September", numVisitors:"394"},
	{month:"October", numVisitors:"536"}
];

var row = document.createElement("tr");

for(var i = 0; i<visitorData.length; i++){
	var monthCol = document.createElement("td");
	var visitorCol = document.createElement("td");

	monthCol.innerHTML = visitorData[i].month;
	visitorCol.innerHTML = visitorData[i].numVisitors;

	row.appendChild(monthCol);
	row.appendChild(visitorCol);
}

document.getElementById("visitors").appendChild(row);
console.log(row);