var menuLocation = 0;
var contentClassNameActive;
var contentClassNameNormal;
var menuClassNameActive;
var menuClassNameNormal;
resetMenuVariables();
function resetMenuVariables() {
	if (menuLocation == 0) {
		contentClassNameActive = "contentHoverHorizontal";
		contentClassNameNormal = 'content';
		menuClassNameActive = "menuHorizantalHover";
		menuClassNameNormal = "menuHorizantalNormal";
	}
	else {
		if (menuLocation == 1) {
			contentClassNameActive = "contentHoverVertical";
			contentClassNameNormal = 'content';
			menuClassNameActive = "menuVerticalHover";
			menuClassNameNormal = "menuVerticalNormal";
		}
	}
}
function expand() {
	setMenuCellClassName(menuClassNameActive);
	document.getElementsByClassName(contentClassNameNormal).item(0).className = contentClassNameActive;

}
function collapse() {
	setMenuCellClassName(menuClassNameNormal);
	document.getElementsByClassName(contentClassNameActive).item(0).className = contentClassNameNormal;
}

function setMenuCellClassName(s) {
	var classLoc = document.getElementsByClassName('menu').item(menuLocation);
	var a = classLoc.querySelectorAll('td');
	for (var i = 0; i < a.length; i++) {
		a[i].className = s;
	}
}