<!-- // Semangat prof -salman -->
<?php 
//   include 'koneksiDB.php';
?>

<html>
<head>
	<title>Login</title>
</head>

<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="login">
  		<h1>Session</h1>
    	<form method="post" action="proseslogin.php">
    		<input type="text" name="username" placeholder="Username" required="required" />
        	<input type="password" name="password" placeholder="Password" required="required" />
        	<!-- <button type="submit">Submit</button> -->
        	<table class="btn_submit">
        		<tr>
        			<!-- <td><input class="button" type="submit" name="btn_cookies" value="Submit Cookies"></td> -->
        			<td colspan="2"><input class="button" type="submit" name="btn_session" value="Login"></td>
        		</tr>
        	</table>
        	<p>
        	
        	</p>
    	</form>
	</div>

</body>
</html>