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
}
	
## IF THE FASTQ FILES ARE LOCATED ON S3...
if(isset($_POST['access-id'])) {
        ## GRAB CREDENTIALS
        $region = "us-east-1";
        $access_id = $_POST['access-id'];
        $secret_id = $_POST['secret-id'];
        $s3_path = $_POST['s3-path'];
        ## SET ENVIRONMENT VARIABLES
        putenv("AWS_ACCESS_KEY_ID=$access_id");
        putenv("AWS_SECRET_ACCESS_KEY=$secret_id");
        putenv("AWS_DEFAULT_REGION=$region");
        putenv("AWS_DEFAULT_OUTPUT=json");
        ## WHERE TO FIND FILES
        $s3_path = $_POST['s3-path'];
        ## BUILD COMMAND
        $cmd = "aws s3 cp s3://" . $s3_path . " /var/www/html/models/input/ --recursive";
	## EXECUTE COMMAND
        shell_exec($cmd);
}

## 
$output_filename = "processed_" . basename($_FILES['data']['name']);
$output_dir = "/var/www/html/models/output/";
$out_cmd = "tar -czf /var/www/html/models/output/compressed_output.tgz -C $output_dir $output_filename";
shell_exec($out_cmd);


header('Location: ../views/results_page.php');
