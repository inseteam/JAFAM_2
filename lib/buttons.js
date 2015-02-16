var pageLoad, button, xhr, target;

function check(URL) {

	// find the element that should be updated
	target = document.getElementById("content");

	// create a request object
	xhr = new XMLHttpRequest();

	// initialise a request, specifying the HTTP method
	// to be used and the URL to be connected to.
	xhr.open("GET", URL, true);
	xhr.onreadystatechange = function()
	{ if (xhr.status == 200){
		if (xhr.readyState == 4){
			target.innerHTML = xhr.responseText;
		}
	}
	else if (xhr.status == 404){
		if (xhr.readyState == 4){
			target.innerHTML = "404 - Page not found.";
		}
	}
};
xhr.send();

document.getElementById('create_form').style.display = 'none';
document.getElementById('sub_navigation').style.display = 'none';
};

buttonHome = function () {
	button = check("api/index.php");
};

buttonCreate = function () {
	$(document).ready(function(){
		$('#content').html("")
	});
	document.getElementById('sub_navigation').style.display = 'block';
};

buttonMenu = function () {
	$(document).ready(function(){
		$('#content').html("")
	});
	if($('#create_form').css('display') == 'none')
		{
			document.getElementById('create_form').style.display = 'block';
		}
	else
		{
			document.getElementById('create_form').style.display = 'none';
		}
};

buttonAboutUs = function () {
	button = check("api/about_us.php");
};

buttonAboutCharts = function () {
	button = check("api/about_charts.php");
};

// when the page has finished loading all the elements should
// be in place, so they can be discovered and have events attached
// to them
pageLoad = function () {
	button = check("api/index.php");

	var homeButton = document.getElementById("home");
	if (homeButton) {
		homeButton.addEventListener("click", buttonHome, true);
	}
	var createButton = document.getElementById("createButton");
	if (createButton) {
		createButton.addEventListener("click", buttonCreate, true);
	}
	var createFormButton = document.getElementById('menu_button');
	if (createFormButton) {
		createFormButton.addEventListener("click", buttonMenu, true);
	}
	var aboutUsButton = document.getElementById("about_us");
	if (aboutUsButton) {
		aboutUsButton.addEventListener("click", buttonAboutUs, true);
	}
	var aboutChartsButton = document.getElementById("about_charts");
	if (aboutChartsButton) {
		aboutChartsButton.addEventListener("click", buttonAboutCharts, true);
	}
};

window.addEventListener("load", pageLoad);
