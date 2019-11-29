<!DOCTYPE html>
<html>
<body>
<a href='#information' >Change</a>
<a href='#login'>Login</a>
<div id="demo">
<h2>Single page application</h2>
</div>
<script>
function loadView(pageName) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", pageName, true);
  xhttp.send();
}
window.onhashchange = function() 
{ 
var hash = location.hash.substr(1);
switch(hash){
    case "information":
    loadView('information.php?id=2');
    break;
    case "login":
    loadView('login.php');
    break;
}
}
</script>
</body>
</html>


