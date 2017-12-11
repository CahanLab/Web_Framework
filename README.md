# RDR Web Framework

RDR is a method for adding a front end to a bioinformatics command line tool that is flexible, computationally effecient, cost-effective, and above all, conducive to reproduciblility.

The following walkthrough assumes basic knowledge of Linux, virutal machines, as well basic web development concepts.

This walkthrough will show you how to adapt our base framework for a simple application.
Our downsampling script will take a directory of FASTQ files and take a random sample of reads from each file. Downsampling could be useful when a downstream analysis tool is able to take advantage of the inherent low-dimensionality of gene expression data.

### Architecture:
Our framework utilizes a Model-View-Controller like framework. The server's filesystem is under /var/www/html. Here we have our models, views, controllers, and assets directories.

### The Front Page:
Name your app! Provide a brief description or whatever you want... Specify the parameter values here as well. All of this can be done by editing the front_page.html document in /var/www/html/views/

For the purposes of the downsampling application we will add a form element to specify the number of reads desired.

You can add the following HTML tag to the front page
```html
<input type="text" name="parameter1" placeholder="Input Read Depth [Default 5000000]"/>
```


