var xhr, target;

function ajaxLoad(URL){
  // find the element that should be updated
  target = document.getElementById("content");

  // create a request object
  xhr = new XMLHttpRequest();

  // initialise a request, specifying the HTTP method
  // to be used and the URL to be connected to.
  xhr.open("GET", URL, true);
  xhr.onreadystatechange = function(){
    if (xhr.status == 200){
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
}
