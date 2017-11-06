<?php

$target_dir = "/var/www/html/models/input/";

/*EXTRA PARAMETERS
$parameter2 = $_POST['parameter2'];
$parameter3 = $_POST['parameter3'];
*/

if (isset($_FILES['data'])) {
	$target_file = $target_dir . basename($_FILES['data']['name']);

	if (move_uploaded_file($_FILES['data']['tmp_name'], $target_file)) {
		## CHECK IF A PARAMETER IS SPECIFIED
		if(isset($_POST['parameter1'])) {
			$parameter1 = (int)$_POST['parameter1'];
			#$command = "/var/www/html/controllers/Algorithm/EXECUTABLE_NAME";
		}
		else {
			#$command = "/var/www/html/controllers/Algorithm/EXECUTABLE_NAME";
		}
		exec($command);
	}
	$output_filename = "/var/www/html/models/output/subset_" . basename($_FILES['data']['name']);
	#`mv /var/www/html/models/output/subset_reads.fastq $output_filename`;
	#`tar -Cczf /var/www/html/models/output/compressed_output.tgz /var/www/html/models/output/*.fastq`;
}

header('Location: ../views/results_page.php');
