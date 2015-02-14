if (window.innerWidth && window.innerWidth <= 480) {
	$(document).ready(function(){
		$('#createForm').addClass('hide');
	});
	function toggleMenu() {
		$('#createForm').toggleClass('hide');
	}
}
