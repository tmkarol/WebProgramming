<!doctype html>
<html lang="en">
    <head>
        <title>JS Mouse</title>
        <meta charset="UTF-8">
        <meta name="author" content="Tracy Karol">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <script src="jsmouse.js" defer></script>
        <link rel="stylesheet" type="text/css" href="../csci445.css"/>
    </head>
    <body>
         <?php
            $selectedPage = 'jsmouse';
            require '../templateHeader.php';?>
        <section>
            <h1>HTML5 Canvas</h1>
            <canvas id="myCanvas" style="border: solid"></canvas>
            <br/>
            <button id="myButton">Make me sad</button>
        </section>
        <?php require '../templateFooter.php';?>
    </body>
</html>