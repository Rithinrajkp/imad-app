<?php
session_start()
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Admin Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<style type="text/css">
  h2{
	  color:#8633FF;
  }
 </style>
</head>

<body>
<script language="javascript">
function check()
{

 if(document.form1.loginid.value=="")
  {
    alert("Plese Enter your Login ID");
	document.form1.loginid.focus();
	return false;
  }
  
   var pattern1=/^[a-z]{3}$/
   if(!loginid.value.match(pattern1)|| loginid.value.length==0)
    {
         alert("Please enter a valid Login ID")
         return false;
    }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
}
</script>


<form name="form1" method="post" action="login.php"onsubmit="return check();">
<br/><br/><br/>
<h2 align="center">Admin Login </h2>
<table width="300" border="0" align="center">
  <tr>
    <td width="106"><span class="style2"></span></td>
    
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="style2">Login ID </td>
    <td width="149"><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input name="pass" type="password" id="pass"></td>
  </tr>
  
  
        
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>

</body>
</html>
