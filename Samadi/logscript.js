//login button
function myFunction()
{
  var un = document.forms["myForm"]["Username"].value;
  var pw = document.forms["myForm"]["password"].value;
  if(un != "" && pw != "")
  {
    alert("correct!!!");
  }
  else{
    alert("invalid username and password");
  }
}