/* 
* This script is to simply check the fields of the form before sending
* Author: Webguy@bewebbled.com
*
*/
	function checkform()
	{
		var alert_msg = '';
		category_check = document.getElementById('orderFormShoeCategory');
		design_check = document.getElementById('orderFormShoeDesign');
		color_check = document.getElementById('orderFormShoeColor');
		size_check = document.getElementById('orderFormShoeSize');
		qty_check = document.getElementById('orderFormShoeQty');
		name_check = document.getElementById('orderFormName');
		email_check = document.getElementById('orderFormEmail');
		add_check = document.getElementById('orderFormAdd');
		add2_check = document.getElementById('orderFormAdd2');
		mobile_check = document.getElementById('orderFormMob');
		phone_check = document.getElementById('orderFormPhone');
		if (category_check.value == '[select one]' || category_check.value == '')
		{
			alert_msg = alert_msg + 'CATEGORY field is required.\n';
		}
		if (design_check.value == '[select category first]' || design_check.value == '[select one]' || design_check.value == '')
		{
			alert_msg = alert_msg + 'DESIGN field is required.\n';
		}
		if (color_check.value == '[select one]' || color_check.value == '')
		{
			alert_msg = alert_msg + 'COLOR field is required.\n';
		}
		if (size_check.value == '')
		{
			alert_msg = alert_msg + 'SIZE field is required.\n';
		}
		if (name_check.value == '')
		{
			alert_msg = alert_msg + 'NAME field is required.\n';
		}
		if (email_check.value == '')
		{
			alert_msg = alert_msg + 'EMAIL field is required.\n';
		}
		if (add_check.value == '')
		{
			alert_msg = alert_msg + 'ADDRESS field/s is required.\n';
		}
		if (mobile_check.value == '')
		{
			alert_msg = alert_msg + 'MOBILE PHONE field is required.\n';
		}
		if (phone_check.value == '')
		{
			alert_msg = alert_msg + 'LANDLINE PHONE field is required.\n';
		}
		if (alert_msg != '')
		{
			alert(alert_msg + '\nPlease try again.\n');
			return false;
		}
	}
	
// END CHECK FORM

function undercon() {
	alert("Hi!  Our site will be up soon so please visit us again, ok?");
	return false;
}
function formNotReady() {
	alert("Hi!  Our apologies for the system error.  Please contact us accordingly.");
	window.location.assign("./?page=contactUs");
}
function systemProblem() {
	alert("Hi!  Our apologies for the inconvenience but our order form is currenty down.\n\nPlease contact us or meail us instead.\n\n(Redirecting to Contact Us page...)");
	window.location.assign("./?page=contactUs");
}

// Order Form Order Details onChange of category
function categoryFillUp() {
	var x = document.getElementById("orderFormShoeCategory").selectedIndex;
	var y = document.getElementById("orderFormShoeCategory").options;
	var txt = y[x].text;
	if (x == 0) {
		window.location.assign('./?page=orderPage');
	} else {
		window.location.assign('./?page=orderPage&category=' + txt.toLowerCase());
	}
}

// Order From Order Details from view page
function categoryFillUp2() {
	var x = document.getElementById("orderFormShoeCategory").selectedIndex;
	var y = document.getElementById("orderFormShoeCategory").options;
	var xx = document.getElementById("orderFormShoeDesign").selectedIndex;
	var yy = document.getElementById("orderFormShoeDesign").options;
	var txt1 = y[x].text;
	var txt = yy[xx].text;
	if (xx == 0) {
		window.location.assign('./?page=orderPage&category=' + txt1.toLowerCase());
	} else {
		window.location.assign('./?page=orderPage&category=' + txt1.toLowerCase() + '&design=' + txt.toLowerCase());
	}
}

/* Image w/ popup tooltip for text description or images v1.0
* Created: May 27rd, 2011. This notice must stay intact for usage
* Author: Webguy@bewebbled.com combined scripts from various scripts
* Part contributor is Dynamic Drive at http://www.dynamicdrive.com/
*
* use on theKey:
* onmouseover="showObj(objId)" onmouseout="closetime"
*/

// set the object variable (drop down menu div, tool tip div, img tool tip div, etc..)
var theObj = 0;

var theKey			= 0;			// the object initiating script theObj
var objType			= 0;			// type of object display: 0 for drop down menu, 1 for tool tip
var timeout1		= 100;			// time delay for the hidden object to pop out
var timeout2		= 300;			// time delay for the object to hide again
var opentimer		= 0;			// set variable for window object timeout
var closetimer		= 0;			// set variable for window object timeout

// show theObj
function showObj(objID,me) {
	theKey = me;
	// cancel close timeout if from another theKey
	cancelclosetime();
	// get div element by id
	if (typeof objID == "string") {
		objID = document.getElementById(objID);
		//if (theObj) theObj.style.visibility = 'visible'; //=============== WORKING
	}
	// close any other theObj open usually from another theKey
	if (theObj && theObj != objID) theObj.style.visibility = 'hidden';
	// get the ID and show theObj using time delay
	theObj = objID;
	opentimer = window.setTimeout(opentime, timeout1);
}

// move theObj near mouse before showing via updatePos
function opentime() {
	if (theObj) theObj.style.visibility = 'visible';
}

// hiding theObj
function close() {
	if (theObj) theObj.style.visibility = 'hidden';
	// reset var
	theObj = 0;
}

// closing theObj on mouseout
function closetime() {
	closetimer = window.setTimeout(close, timeout2);
}

// cancel close timer (this is when mouse hovers out of theKey on to theObj
function cancelclosetime() {
	if (closetimer) {
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close theObj when click-out
document.onclick = close;

