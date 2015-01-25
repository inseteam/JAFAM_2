function gethomephp(home)
{ document.getElementById("content").innerHTML = home; }

AjaxGet('api/home.php',gethomephp);

function getformphp(form)
{ document.getElementById("input_forms").innerHTML = form; }

AjaxGet('api/forms.php',getformphp);
