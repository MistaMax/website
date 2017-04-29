function s(obj, part, value) {
	obj.style.part = value;
}
function setClassName(a, b) {
	var c = a + " div";
	var abc = document.querySelectorAll(c);
	for (var i = 0; i < abc.length; i++) {
		abc[i].className = b;
	}
}