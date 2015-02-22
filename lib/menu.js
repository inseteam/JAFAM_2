if (window.innerWidth && window.innerWidth <= 480) {
	function toggleMenu() {
		if (document.getElementById('create_form').style.marginLeft != '-3.59em'){
			document.getElementById('create_form').style.marginLeft = '-3.59em';
		}
		else{
			document.getElementById('create_form').style.marginLeft = '-16.3em';
		}
	}
	function toggleTables() {
		ajaxLoad("api/table.php");
	}
	setInterval(toggleTables, 1000);
}
