// resize header to size of browser window

var ready = (callback) => {
	if (document.readyState != "loading") callback();
	else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => { 
	document.querySelector(".header").style.height = window.innerHeight + "px";
})

// set modal time delay before loading

function callmodel() {
	$('#demo-modal').modal();
};

function callmodel2() {
	$('#demo-modal2').modal();
};