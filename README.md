# RDR Web Framework

RDR is a method for adding a front end to your bioinformatics command line tool that is flexible, computationally effecient, cost-effective, and above all, conducive to reproduciblility.

The following walkthrough assumes basic knowledge of Linux, virtual machines, as well as web development concepts. This walkthrough will show you how to adapt our base framework for a simple application.

We have made our 'downsampling' script, written in Python, available here. This script will take a random sample of reads from each FASTQ file. This is useful when a downstream analysis tool has been shown to require a smaller amount of reads than might be present in a FASTQ file (ie. a tool that is able to take advantage of the inherent low dimensionality of gene expression data).

### Launching our base framework (For the Developer):
- The base virtual machine is hosted by Amazon Web Services as an EC2 Amazon Machine Image (AMI). Currently it is only available in the US-East-1 region.
- Select the correct AMI
- Specify your instance type
- Specify your security group. Make sure it allows for incoming traffic through ports 20 (SSH for shell access) and port 80 (HTTP for browser access)

### Architecture Overview:
Our framework utilizes a Model-View-Controller like architecture. This effectively seperates the logic of your code. HTML files are found under 'views', server side scripts in PHP or whatever language your tool is written in belong under 'controllers', and data will be stored in 'Models'. The server's filesystem is under /var/www/html. Here we have our models, views, controllers, and assets directories.

### The Front Page:
![frontpage](http://localhost/framework_img/blank_front_page)
- Name your app! Provide a brief description or whatever you want... Specify the parameter values here as well. All of this can be done by editing the front_page.html document in /var/www/html/views/
- For the purposes of the downsampling application we will add a form element to specify the number of reads desired.
- You can add the following HTML tag to the front page:
```html
<input type="text" name="parameter1" placeholder="Input Read Depth [Default 5000000]"/>
```
- So now your front page should look something like this:

![frontpage](http://localhost/framework_img/downsample_front_page)

### Controllers:
- Now we can try adding the downsample executable to its proper location using scp. Your command should look something like this:
    - ```scp -i keyname.pem downsample_file ec2-user@ec2-public-DNS-compute-1.amazonaws.com:/var/www/html/controllers/Algorithm```
- Make sure that it is given the proper permissions so that apache is able to execute it:
    - ```sudo chown apache downsample_file``` 
    - ```sudo chmod +x downsample # This will make it appear as an executable to the operating system```

The run.php script takes care of the parameters specified in your front page form. It collects them to create a shell command that will feed input into your script.
So now we can build the command to execute the script. Change the line
```php
if(isset($_POST['parameter1'])) {
    $parameter1 = (int)$_POST['parameter1'];
    #$command = "/var/www/html/controllers/Algorithm/EXECUTABLE_NAME";
}
else {
    #$command = "/var/www/html/controllers/Algorithm/EXECUTABLE_NAME";
}
```

to 

```php
if (move_uploaded_file($_FILES['data']['tmp_name'], $target_file)) {
## CHECK IF A PARAMETER IS SPECIFIED
    if(isset($_POST['parameter1'])) {
        $parameter1 = (int)$_POST['parameter1'];
        $command = "/var/www/html/controllers/Algorithm/downfile -n $parameter1 $target_file";
    }
    else {
        $command = "/var/www/html/controllers/Algorithm/downfile $target_file";
    }
    exec($command);
}
```

### Setting I/O Paths:
- Now make sure that the executable is writing its output to the right place. In your the downsample script, replace this line:
    ```python
    with open("subset_"+fname, "w") as output:
    ```
    with
    
    ```python
    with open("/var/www/html/models/output/subset_"+fname, "w") as output:
    ```
### Running the application

### Make it available through Cloud Formation
- Cloud Formation makes use of stack templates for 

### Updating
- Make all the changes to your AMI
- Save a new AMI
- Update the stack template
- Amazon will store your image and you make the stack templates available
