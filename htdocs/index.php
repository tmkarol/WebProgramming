<!--Author: Tracy Karol-->
<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="author" content="Tracy Karol">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" type="text/css" href="csci445.css" />
    </head>
    <body>
        <?php
            $selectedPage = 'index';
            require 'templateHeader.php';?>
        <section>
            <h2 class="section_header">Welcome to the website!</h2>
            <p>Here is where I'll be posting all of my assignments this semester</p>
        </section>
        <hr/>
        <?php require 'templateFooter.php';?>
    </body>
</html>