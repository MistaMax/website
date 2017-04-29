//this is for keyCodes unicode
var keyboard_keys=new Array();
//arrow keys
keyboard_keys[37]='leftKey';
keyboard_keys[38]='upKey';
keyboard_keys[39]='rightKey';
keyboard_keys[40]='downKey';
//number keys
keyboard_keys[48]='0';
keyboard_keys[49]='1';
keyboard_keys[50]='2';
keyboard_keys[51]='3';
keyboard_keys[52]='4';
keyboard_keys[53]='5';
keyboard_keys[54]='6';
keyboard_keys[55]='7';
keyboard_keys[56]='8';
keyboard_keys[57]='9';
//letter keys
keyboard_keys[65]='a';
keyboard_keys[66]='b';
keyboard_keys[67]='c';
keyboard_keys[68]='d';
keyboard_keys[69]='e';
keyboard_keys[70]='f';
keyboard_keys[71]='g';
keyboard_keys[72]='h';
keyboard_keys[73]='i';
keyboard_keys[74]='j';
keyboard_keys[75]='k';
keyboard_keys[76]='l';
keyboard_keys[77]='m';
keyboard_keys[78]='n';
keyboard_keys[79]='o';
keyboard_keys[80]='p';
keyboard_keys[81]='q';
keyboard_keys[82]='r';
keyboard_keys[83]='s';
keyboard_keys[84]='t';
keyboard_keys[85]='u';
keyboard_keys[86]='v';
keyboard_keys[87]='w';
keyboard_keys[88]='x';
keyboard_keys[89]='y';
keyboard_keys[90]='z';
keyboard_keys[13]='Enter';
//initiate keyboard events using this function
//initKeyBoardKeys();

function getKeys(e)
{
	var k=e.keyCode;
	return keyboard_keys[k];
}

function displayKeys(e)
{
	var a=getKeys(e);
	alert(a);
}
var articleZoom=0;
var locked=1;
function keyFunctions(e)
{
	var k=getKeys(e);
	if(locked==0)
	{
	if(k=='a')
	{
		zoomToArticle();
	}
	else
	{
		if(k=='m')
		{
			if(articleZoom==0)
			{
			changeMenuLoc();
			}
			else
			{
				alert("If you desire to change the menu location, then exit out of article zoom mode by pressing a");
			}
		}
		else
		{
			if(k=='l')
			{
				lockScreen();
			}
		}
	}
	}
}

function initKeyBoardKeys()
{
	document.onkeydown = keyFunctions;
}
function zoomToArticle()
{
	var title=document.getElementsByTagName("header");
	if(articleZoom==0)
	{
		document.getElementsByClassName("menu").item(0).className='menuHidden';
		title.item(0).className="mainHidden";
		document.getElementsByClassName('titlebackground').item(0).className='titlebackgroundHidden';
		document.getElementsByClassName('navbackg').item(0).className='navbackgHidden';
		document.getElementsByClassName('content').item(0).className="contentZoom";
		articleZoom=1;
	}
	else
	{
		if(articleZoom==1)
		{
			document.getElementsByClassName('contentZoom').item(0).className="content";
			document.getElementsByClassName('navbackgHidden').item(0).className='navbackg';
			document.getElementsByClassName('titlebackgroundHidden').item(0).className='titlebackground';
			title.item(0).className="main";
			document.getElementsByClassName("menuHidden").item(0).className='menu';
		articleZoom=0;
		}
	}
}
var menuLoc=0;
function changeMenuLoc()
{
	
}

function lockScreen()
{
	if(locked==0)
	{
		document.getElementsByClassName("loaderEnded").item(0).className="loader";
		document.getElementsByClassName("textInput2Hidden").item(0).value='';
		document.getElementsByClassName("textInputHidden").item(0).className="textInput";
		document.getElementsByClassName("textInput2Hidden").item(0).className="textInput2";
		document.getElementsByClassName("loginHidden").item(0).className="login";
	document.getElementsByClassName("login2Hidden").item(0).className="login2";
document.getElementsByClassName("lockScreenButtonHidden").item(0).className="lockScreenButton";
	locked=1;
	}
}

function displayunicode(e){
var unicode=e.keyCode? e.keyCode : e.charCode
alert(unicode)
}