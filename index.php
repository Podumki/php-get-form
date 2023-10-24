<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> Welcome! </title>
</head>


<body>
	<div >
		<form action = "getdata.php" method = "post">
			<p><b>Please fill out the form:</b></p>
			<label for="hostname">Your Hostname:</label><br>
			<input type="text" id="hostname" name="hostname"><br>
			<label for="domain">Your Domain:</label><br>
			<input type="text" id="domain" name="domain"><br>
			<label for="ipadress">IP-Adress or DHCP:</label><br>
			<input type="text" id="ipadress" name="ipadress"><br>
			<label for="macadress">MAC-Adress:</label><br>
			<input type="text" id="macadress" name="macadress"><br>
			<label for="username">Your Username:</label><br>
			<input type="text" id="username" name="username"><br>
			<label for="password">Password:</label><br>
			<input type="text" id="password" name="password"><br>
			<p>Description<Br>
			<textarea id="description" name="description" cols="40" rows="3"></textarea></p>

			<p><input type="submit" value="Send">
			<input type="reset" value="Clear"></p>
		</form>
	</div>
</body>


</HTML>
