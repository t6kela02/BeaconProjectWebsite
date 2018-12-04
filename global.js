function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("demo").innerHTML = xhttp.responseText;
    } else {
		var err = "error";
		document.getElementById("demo").innerHTML = xhttp.err;
	}
  };
  xhttp.open("GET", "GetDataOut.php", true);
  xhttp.send();
}
