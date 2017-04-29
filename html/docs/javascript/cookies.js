function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i].trim();
    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
  }
  return "";
}
function checkCookie(cname) {
  var cook = getCookie(cname);
  if (cook != "") {
    alert("Welcome again " + cook);
  }
  else {
    cook = prompt("Please enter your name:", "");
    if (cook != "" && cook != null) {
      setCookie(cname, cook, 9999);
    }
  }
}