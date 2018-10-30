<?php
function getPrice($book) {
    switch($book){
        case 'Hunger Games':
            return 15.44;
            break;
        case 'Twilight':
            return 10.99;
            break;
        case 'The Great Gatsby':
            return 20.38;
            break;
        case 'The Fault in our Stars':
            return 11.54;
            break;
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>PHP Form</title>
        <meta charset="UTF-8">
        <meta name="author" content="Tracy Karol">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" type="text/css" href="../csci445.css"/>
        <link rel="stylesheet" type="text/css" href="php.css"/>
        <script src="../jquery/jquery.js"></script>
        <script type="text/javascript" src="form.js" defer></script>  
    </head>
    <body>
        <?php
            $selectedPage = 'form';
            require '../templateHeader.php';?>
        <h2 class="section_header">Book Store</h2>
        <form action="form_submit.php" method="post">
            <fieldset>
                <legend>Personal Info</legend>
                First Name: <input type="text" name="first" id="first" required>*<br>
                Last Name: <input type="text" name="last" id="last" required>*<br>
                Email: <input type="email" name="email" id="email" required>*<br>
            </fieldset>
            <fieldset id="product">
                <legend>Product Info</legend>
                <img id="book" style="width: 0; height:0;">
                Books: <select name="products" onChange="handleOption();" required> 
                    <option disabled selected value>select a book</option>
                    <option value="Hunger Games">Hunger Games ($<?php echo getPrice('Hunger Games')?>)</option>
                    <option value="Twilight">Twilight ($<?php echo getPrice('Twilight')?>)</option>
                    <option value="The Great Gatsby"> The Great Gatsby ($<?php echo getPrice('The Great Gatsby')?>)</option>
                    <option value="The Fault in our Stars">The Fault in our Stars ($<?php echo getPrice('The Fault in our Stars')?>)</option>
                </select>*
                <br>
                Quantity: <input type="text" name="quantity" id="quantity" required>*
                <br/>
                <br/>
                <p>Do you want to round up to the nearest dollar for a donation?*<p>
                <input type="radio" name="donation" id="yes" value="yes"> Yes, donate<br/>
                <input type="radio" name="donation" id="no" value="no"> No, don't donate<br/>
                <input id="time" type="hidden" name="time" value=<?php date_default_timezone_set("America/Denver"); 
                    echo date("l&#32;F&#32;d,&#32;Y&#32;h:i&#32;a");?>>
                <br/>
                <p>*Required fields</p>
            </fieldset>
            <div id="buttons">
                <input class="formButton" type="reset">
                <input class="formButton" type="submit">
            </div>
        </form>
        <?php require '../templateFooter.php';?>
    </body>
</html>