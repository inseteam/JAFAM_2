var pageLoad;

buttonHome = function () {
	ajaxLoad("api/index.php");
};

buttonCreate = function () {
	ajaxLoad("api/create.php");
};

buttonAboutUs = function () {
	ajaxLoad("api/about_us.php");
};

buttonAboutCharts = function () {
	ajaxLoad("api/about_charts.php");
};

// when the page has finished loading all the elements should
// be in place, so they can be discovered and have events attached
// to them
pageLoad = function () {
	ajaxLoad("api/index.php");

	var homeButton = document.getElementById("home");
	if (homeButton) {
		homeButton.addEventListener("click", buttonHome, true);
	}
	var createButton = document.getElementById("createButton");
	if (createButton) {
		createButton.addEventListener("click", buttonCreate, true);
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
