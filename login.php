<?php session_start();
//require_once 'config.php';

// Is the user already logged in? Redirect him/her to the private page
if(isset($_SESSION['username']))
{
header("Location: library.php");
exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title>Library Login</title>

  <meta name="Author" Content="Bit Repository">
  <meta name="Keywords" Content="ajax, login, form, mootools">
  <meta name="Description" Content="A nice & simple AJAX Login Form">
  <script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
</head>

 <body>

<div class="header"></div>
<center>
	<a href="index.php"><img src="images/logo.png" height="200" width="auto" /></a>
	<div id="status">
		<div class="wrapstat">
			<br/>
			<fieldset style="width:300px; margin-top:30px; margin:auto;">
			<div style="margin-top:3px; height:4px; width:200px;"></div>
			<div class="headwrap">
				<div class="title">
					<img src="icons/admin.png" height="35" style="float:left; margin-left:8px; margin-top:2px;">
					<div style="float:left; font-size:20px; font-family:Verdana, Geneva, sans-serif; color:#FFF; margin-top:8px;">Login</div>
				</div>

				<div id="login_response"><!-- spanner --></div>

				<form id="login" name="login" method="post" action="do_login.php">
					<table align="center" width="300" border="0" style="margin-top:20px;">
						<tr>
							<td width="80" style="font-family:Verdana, Geneva, sans-serif; font-size:15px;">Username</td><td>
								<select id="name" name="username" style="width:200px; padding:5px;">
									<option></option>
									<?php
									include('database/config.php');
									$sql="SELECT * FROM user";
									$rs=mysql_query($sql);
									while($get=mysql_fetch_array($rs)){ ?>
									<option><?php echo $get['username']; ?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td style="font-family:Verdana, Geneva, sans-serif; font-size:15px;">Password</td>
							<td align="left"><input type="password" name="password" style="width:200px; padding:5px;"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input id="submit" type="submit" name="submit" value="Login">
								<div id="ajax_loading"><img align="absmiddle" src="images/loading.gif">&nbsp;Processing...</div>
							</td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
	</div>
</center>
</body>
</html>