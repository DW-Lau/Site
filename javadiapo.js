var background=["images/slider/bg1.jpg","images/slider/bg2.jpg"];

var bgNumber=0;
var bgLength= background.length-1;

function changeBg(x){
	bgNumber +=x;
	if (bgNumber> bgLength){
		bgNumber=0;
	}
	if (bgNumber<0) {
		bgNumber=bgLength;
	}
	document.getElementById("diapo").src=background[bgNumber];
	return false;
}