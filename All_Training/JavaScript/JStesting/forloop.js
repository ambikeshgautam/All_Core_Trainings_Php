<!DOCTYPE html>
<html>
<body>
<style>
li
{
list-style-type:none;
float:;
}
</style>

<h2>JavaScript Arrays</h2>

<p>The best way to loop through an array is using a standard for loop:</p>

<p id="demo"></p>
<p id="mydemo"></p>

<script>
var fruits, text, fLen, i;
fruits = ["Banana", "Orange", "Apple", "Mango"];
fLen = fruits.length;

text = "<ul>";
for (i = 0; i < 4; i++) {
  text += "<li>" + fruits[i] + "</li>";
}
text += "</ul> <br>";

document.getElementById("demo").innerHTML = text;
//================================================
//=================HERE IS ME======================


var num, content, nLen, i;//Declaration of variable
num = ["one", "two", "three", "Four", "Mango"];// array declaration
nLen = num.length;//calcuting length of array
content = "<ul>";//this is html content to print the value on display
for(i=0; i<nLen; i++){
content += "<li>"+num[i] +"</li>";//it will print all value in list
}
content +="</ul>";//Endiing of the unordered list
document.getElementById("mydemo").innerHTML =content;//print the value on id my demo .




</script>

</body>
</html>
