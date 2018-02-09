<!DOCTYPE HTML>
<html lang="en">
	<head>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity=integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
		<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/upload-file.css"
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<title>Sample App</title>
	</head>

	<body>
		<header id="header">
			<h1>Sample App</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse. Brought to you by the <a href="http://www.cahanlab.org/" target="blank">Cahan Lab</a></p>
		</header>
		<form action="../controllers/run.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="parameter1" placeholder="Input 1 Placeholder text"/>
			<br>
			<p>For S3 Transfers:</p>
			<input type="text" name="access-id" placeholder="Access ID"/>
			<br>
			<input type="text" name="secret-id" placeholder="Secret Access ID"/>
			<br>
			<input type="text" name="s3-path" placeholder="Path to files on S3, eg. bucket_name/path/to/fastq/"/>
			<br>
			<!--<br>
			<input type="text" name="parameter2" placeholder="Input 2 Placeholder text"/>
			<br>
			<input type="text" name="parameter3" placeholder="Input 3 Placeholder text"/>-->
			<br>
			<input type="file" name="data" />
			<br>
			<!-- Submit Button-->
			<br>
	  		<input type="submit" value="Submit">
		</form>
		<span class="logo"><img src="../images/logo.png" alt =""></span>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<!-- Popper -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<!-- Bootstrap Javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>

</html>
