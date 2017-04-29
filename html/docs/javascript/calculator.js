/*this is the code for the actual calculator:
<div class="calculator" onDblClick="toggleCal(this);">
<div id="screen" class="calInput">
</div>
<table class="cal">
<tr>
<td onClick="MyClick('1');" class="calButton">1</td>
<td onClick="MyClick('2');" class="calButton">2</td>
<td onClick="MyClick('3');" class="calButton">3</td>
<td onClick="Operator('+');" class="calButton">+</td>
</tr>
<tr>
<td onClick="MyClick('4');" class="calButton">4</td>
<td onClick="MyClick('5');" class="calButton">5</td>
<td onClick="MyClick('6');" class="calButton">6</td>
<td onClick="Operator('*');" class="calButton">*</td>
</tr>
<tr>
<td onClick="MyClick('7');" class="calButton">7</td>
<td onClick="MyClick('8');" class="calButton">8</td>
<td onClick="MyClick('9');" class="calButton">9</td>
<td onClick="Operator('/');" class="calButton">/</td>
</tr>
<tr>
<td onClick="Clear('0');" class="calButton">C</td>
<td onClick="MyClick('0');" class="calButton">0</td>
<td onClick="MyClick('.');" class="calButton">.</td>
<td onClick="Operator('-');" class="calButton">-</td>
</tr>
<tr>
<td onClick="DoSum();" class="calButton">=</td>
</tr>
</table>
</div>
*/
//simple cal thing
/*
var clk=0;
function toggleCal(s)
{
	var td=s;
	var t=td.getElementsByTagName('table').item(0);
	var d=td.getElementsByTagName('div').item(0);
	if(clk==0)
	{
	t.className = "calActive";
	Clear('0');
	clk=1;
	}
	else
	{
		if(clk==1)
		{
			t.className = "cal";
	d.innerHTML="Double Click to open calculator";
	clk=0;
		}
		else
		{
			clk=0;
		}
	}
}
var Overall="", First="", Second="", Opp="";
function Clear(t)
{
    First = "";
    Second = "";
    Opp = "";
    Overall = "";
    document.getElementById('screen').innerHTML = t;
}
function Init()
{
    Clear('Double Click to open calculator');
}
function MyClick($key)
    { var Display="";
if(Opp == ""){
    First = First + $key;
    document.getElementById('screen').innerHTML = First;
    }else{
    Second = Second + $key;
    Display = document.getElementById('screen').innerHTML;
    document.getElementById('screen').innerHTML = First + ' ' + Opp + ' ' + Second;
         }
	}
function Operator($sign)
{       var Display="";
    Opp = $sign;
// See if the first and second factors have values ie: there has already been an equation
if(First != "" && Second != "") DoSum();
    Display = document.getElementById('screen').innerHTML;
	Opp = $sign
    document.getElementById('screen').innerHTML = Display + ' ' + Opp + ' ';
}
function DoSum()
{  
    var string;
    result=0;
if(First != "" && Second != "" && Opp != "")
  {
        string = First + ' ' + Opp + ' ' + Second;
    Overall = eval(string);
    document.getElementById('screen').innerHTML = Overall;
    // Now clear the First, Second and Opp variables for further use
    First = Overall;
    Second = "";
    Opp = "";
}
}
*/
//complex calculator put in this:
/*
<div class="calculator" id="calculator">
<div id="calInput" class="screen">
</div>
<div class="keys">
<table class="cal" id="cal">
<tr>
<td class="calButton">1</td>
<td class="calButton">2</td>
<td class="calButton">3</td>
<td class="operator">+</td>
</tr>
<tr>
<td class="calButton">4</td>
<td class="calButton">5</td>
<td class="calButton">6</td>
<td class="operator">*</td>
</tr>
<tr>
<td class="calButton">7</td>
<td class="calButton">8</td>
<td class="calButton">9</td>
<td class="operator">/</td>
</tr>
<tr>
<td class="clear">C</td>
<td class="calButton">0</td>
<td class="calButton">.</td>
<td class="operator">-</td>
</tr>
<tr>
<td class="calButton">(</td>
<td class="calButton">)</td>
<td class="calButton">sqrt</td>
<td class="calButton">abs</td>
</tr>
<tr>
<td class="eval">=</td>
</tr>
</table>
</div>
</div>
<div id="toggleCal" class="defaultButton" onClick="toggleCal(this);">Toggle Calculator Visibility</div>
*/
// Get all the keys from document
var clk=0;
function toggleCal()
{
	var t=document.getElementById("cal");
	var d=document.getElementById("calInput");
	if(clk==0)
	{
	t.className = "calActive";
	d.innerHTML='0';
	clk=1;
	}
	else
	{
		if(clk==1)
		{
			t.className = "cal";
	d.innerHTML="";
	clk=0;
		}
		else
		{
			clk=0;
		}
	}
}
var keys = document.querySelectorAll('#calculator td');
var operators = ['+', '-', 'x', '/'];
var decimalAdded = false;

// Add onclick event to all the keys and perform operations
for(var i = 0; i < keys.length; i++) {
	keys[i].onclick = function(e) {
		// Get the input and button values
		var input = document.querySelector('.screen');
		var inputVal = input.innerHTML;
		var btnVal = this.innerHTML;
		
		// Now, just append the key values (btnValue) to the input string and finally use javascript's eval function to get the result
		// If clear key is pressed, erase everything
		if(btnVal == 'C') {
			input.innerHTML = '0';
			decimalAdded = false;
		}
		
		// If eval key is pressed, calculate and display the result
		else if(btnVal == '=') {
			var equation = inputVal;
			var lastChar = equation[equation.length - 1];
			var error=false;
			var lpos=0;
			var rpos=0;
			var lpar=0;
			var rpar=0;
			var condition='';
			// Replace all instances of abs with Math.abs and sqrt respectively. This can be done easily using regex and the 'g' tag which will replace all instances of the matched character/substring
				for(var a=0;a<equation.length;a++)
				{
					if(equation[a]=='(')lpar++;
					if(equation[a]==')')rpar++;
				}
				if(lpar!=rpar)
				{
					error=true;
					if(lpar>rpar)condition="too many (";
					if(lpar<rpar)condition="too many )";
				}
					
			if(error==false)
			{
			equation = equation.replace(/abs/g, 'Math.abs').replace(/sqrt/g, 'Math.sqrt');
			
			// Final thing left to do is checking the last character of the equation. If it's an operator or a decimal, remove it
			if(operators.indexOf(lastChar) > -1 || lastChar == '.')
				equation = equation.replace(/.$/, '');
			
			if(equation)
				input.innerHTML = eval(equation);
				
			decimalAdded = false;
			}
			else
			{
				var displayError="Error: ";
				displayError+=condition;
				window.alert(displayError);
			}
		}
		else if(btnVal=="")
		{
			
		}
		else if(btnVal=="")
		{
			
		}
		
		// Basic functionality of the calculator is complete. But there are some problems like 
		// 1. No two operators should be added consecutively.
		// 2. The equation shouldn't start from an operator except minus
		// 3. not more than 1 decimal should be there in a number
		
		// We'll fix these issues using some simple checks
		
		// indexOf works only in IE9+
		else if(operators.indexOf(btnVal) > -1) {
			// Operator is clicked
			// Get the last character from the equation
			var lastChar = inputVal[inputVal.length - 1];
			
			// Only add operator if input is not empty and there is no operator at the last
			if(inputVal != '' && operators.indexOf(lastChar) == -1) 
				input.innerHTML += btnVal;
			
			// Allow minus if the string is empty
			else if(inputVal == '' && btnVal == '-') 
				input.innerHTML += btnVal;
			
			// Replace the last operator (if exists) with the newly pressed operator
			if(operators.indexOf(lastChar) > -1 && inputVal.length > 1) {
				// Here, '.' matches any character while $ denotes the end of string, so anything (will be an operator in this case) at the end of string will get replaced by new operator
				input.innerHTML = inputVal.replace(/.$/, btnVal);
			}
			
			decimalAdded =false;
		}
		
		// Now only the decimal problem is left. We can solve it easily using a flag 'decimalAdded' which we'll set once the decimal is added and prevent more decimals to be added once it's set. It will be reset when an operator, eval or clear key is pressed.
		else if(btnVal == '.') {
			if(!decimalAdded) {
				input.innerHTML += btnVal;
				decimalAdded = true;
			}
		}
		
		// if any other key is pressed, just append it
		else {
			input.innerHTML += btnVal;
		}
		
		// prevent page jumps
		e.preventDefault();
	} 
}