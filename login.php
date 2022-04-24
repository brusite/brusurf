<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">





<script type="text/javascript">
// PASSWORD PROTECTION SCRIPT

function TheLogin() {

var password = 'admin';

if (this.document.login.pass.value == password) {
  top.location.href="pages/index.html";
}
else {
  window.alert("Incorrect password, please try again.");
  }
}

</script>





</head>

<body>

<br><br><br><br>





<div style="text-align: center; margin: 0 auto; color: #0000FF; font: normal 20px arial, sans-serif;">
Enter your password:<br>
<form name="login" style="margin: 5px 0px 0px 0px;">
<input type="text" name="pass" size="17" onkeydown="if(event.keyCode==13) return false;" style="width: 150px;"><br>
<input type="button" value="Click to Login" style="width: 134px; height:35px; margin: 8px auto 8px auto;" onclick="javascript:TheLogin(this.form)">
</form>

</div>





<br><br><br>

</body>
</html>
