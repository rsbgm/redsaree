/* Image w/ popup tooltip for text description or images v1.0
* Created: May 27rd, 2011. This notice must stay intact for usage
* Author: Webguy@bewebbled.com combined scripts from various scripts
* Part contributor is Dynamic Drive at http://www.dynamicdrive.com/
*
* use on theKey:
* onmouseover="showObj(objId,x)" onmouseout="closetime"
* use on theObj:
* onmouseover="cancelclosetime()" onmouseout="closetime"
*/

// set the object variable (drop down menu div, tool tip div, img tool tip div, etc..)
var theObj = 0;

var theKey			= 0;			// the object initiating script theObj
var objType			= 0;			// type of object display: 0 for drop down menu, 1 for tool tip
var timeout1		= 100;			// time delay for the hidden object to pop out
var timeout2		= 10;			// time delay for the object to hide again
var opentimer		= 0;			// set variable for window object timeout
var closetimer		= 0;			// set variable for window object timeout

// show theObj
function showObj(objID,x) {
	theKey = this;
	objType = x;
	// cancel close timeout if from another theKey
	cancelclosetime();
	// get div element by id
	if (typeof objID == "string") {
		objID = document.getElementById(objID);
		//if (theObj) theObj.style.visibility = 'visible'; =============== WORKING
	}
	// close any other theObj open usually from another theKey
	if (theObj && theObj != objID) theObj.style.visibility = 'hidden';
	// get the ID and show theObj using time delay
	theObj = objID;
	opentimer = window.setTimeout(opentime, timeout1);
}

// show theObj
function opentime() {
	if (theObj) theObj.style.visibility = 'visible';
	if (objType == 1) {
		theKey.onmousemove = updatePos;
		window.onscroll = updatePos;
	}
}

function updatePos() {
	//var measure = document.getElementById('bodyOrderPage');
	//var divX = measure.offsetLeft;
	//var divY = measure.offsetTop;
	//alert("Div left is "+divX+" and top is "+divY+"!");
	//alert(measure.offsetLeft || document.body.offsetLeft);
	var ev=arguments[0]?arguments[0]:event;
	var x=ev.clientX;
	var y=ev.clientY;
	diffX=50;
	diffY=180;
	theObj.style.left = x-2+diffX+document.body.scrollLeft+"px";
	theObj.style.top = y-2-diffY+document.body.scrollTop+"px";
	// theObj.onmouseout=hideMe;
}

// hiding theObj
function close() {
	if (theObj) theObj.style.visibility = 'hidden';
	// reset var
	theObj = 0;
}

// delay in closing theObj
function closetime() {
	closetimer = window.setTimeout(close, timeout2);
}

// cancel close timer (this is when mouse hovers out of theKey on to theObj
// applicable for drop down menus
// doesn't work on tool tip
function cancelclosetime() {
	if (closetimer) {
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close theObj when click-out
document.onclick = close;

