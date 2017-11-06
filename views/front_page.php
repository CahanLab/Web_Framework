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
			<h1>HISAT2</h1>
			<p>Graph-based alignment of next generation sequencing reads to a population of genomes <br> Algorithm by the Salzberg Lab. Framework brought to you by the <a href="http://www.cahanlab.org/" target="blank">Cahan Lab</a></p>
		</header>
		<form action="../controllers/run.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="parameter1" placeholder="Input 1 Placeholder text"/>
			<!--<br>
			<input type="text" name="parameter2" placeholder="Input 2 Placeholder text"/>
			<br>
			<input type="text" name="parameter3" placeholder="Input 3 Placeholder text"/>-->
			<br>
			<div>
				<div id="vessel">					
					<div class="box" id="fastq-box">
						<input type="file" name="data" id="fastq-upload" class="inputfile" required/>
						<label for="fastq-upload"><span id="fastq"></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Upload</strong></label>
					</div>
				</div>
			</div>
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
