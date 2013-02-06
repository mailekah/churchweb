/*Util*/
function e(id){
	return document.getElementById(id);
}
function checkIE(version){
	var patt=new RegExp("MSIE "+version+"\.");
	
	return patt.test(navigator.userAgent);
	
}

/*Cookies*/
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}




/*Main*/

$(function(){ onLoad()});

function onLoad(){
	//load email
	var emailAddr = "kris" + "." + "r" + "." +"m" + "@gmail.com";
	$('.email').html(emailAddr);
	$('.email').attr("href","mailto:"+emailAddr);
	
	prettyPrint();
	if (typeof (window.doIEAlert) == 'function'){
		doIEAlert();
	}
	
	if (window.innerWidth > 660 && !checkIE(10) && readCookie('kmitchell-menuAnim') == null){
		startMenuAnim();
	}
	
	var supportsOrientationChange = "onorientationchange" in window,
    orientationEvent = "orientationchange";

window.addEventListener(orientationEvent, function() {
	location.reload();
}, false);
	
}
function startMenuAnim(){
	var f = $fx('#description-p').fxAdd({type: 'opacity', from: 1, to: 100, step: 2, delay: 10});
	var menu = e('menu');
	var nL = menu.getElementsByTagName("li");
	var menuAA = [];
	for (var i = 0; i < nL.length;i++){
		var nfx = $fx(nL[i]).fxAdd({type: 'opacity', from: 1, to: 100, step: 2, delay: 7});
		nfx.fxAdd({type:'margin-top', from: -20, to: 0, step: 1, delay: 15});
		menuAA.push(nfx);	
	}
	
	f.fxRun(function(){
		menuAnim(menuAA,0);
	},1);
}

function menuAnim(animA,id){
	if (animA[id] == null){
		finishedMenuAnim();
		return;
	}
	animA[id].fxRun(function(){menuAnim(animA,id+1)},1);
}

function finishedMenuAnim(){
	createCookie("kmitchell-menuAnim","true",0);
}


