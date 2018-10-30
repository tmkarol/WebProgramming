<!doctype html>
<html lang="en">
    <head>
        <title>JS Keyboard</title>
        <meta charset="UTF-8">
        <meta name="author" content="Tracy Karol">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <script src="jskeyboard.js" defer></script>
        <link rel="stylesheet" type="text/css" href="../csci445.css" />
    </head>
    <body>
         <?php
            $selectedPage = 'jskeyboard';
            require '../templateHeader.php';?>
        <section>
            <h1>JS Keyboard</h1>
            <canvas id="myCanvas" style="border: solid; background-color: #ffffff;"></canvas>
        </section>
        <?php require '../templateFooter.php';?>
    </body>
</html>