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
        <title>PHP Form Submission</title>
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
        <div id="receipt">
            <p>Order Submitted By: <?php echo $_POST["first"], ' ', $_POST["last"];?></p>
            <br/>
            <p>Order Submitted At: <?php echo $_POST["time"];?></p>
            <br/>
            <p>Book purchased: <?php echo$_POST["products"];?></p>
            <br/>
            <p>Price per book: <?php echo "$", getPrice($_POST["products"]);?></p>
            <p>Quantity: <?php echo $_POST["quantity"];?></p>
            <p>Subtotal: <?php $subtotal = round($_POST["quantity"]*getPrice($_POST["products"]), 2, PHP_ROUND_HALF_UP); 
                echo "$", $subtotal;?></p>
            <p>Tax: <?php $tax = round(.07 * $subtotal, 2, PHP_ROUND_HALF_UP); echo "$", $tax;?></p>
            <p>Donation: <?php 
                if($_POST["donation"] == "yes"){
                    $donation = ceil($subtotal + $tax) - ($subtotal + $tax);
                } else{
                    $donation = 0.00;
                } 
                echo "$", $donation; ?></p>
            <p>Total: <?php echo "$", ($subtotal + $tax + $donation)?></p>
            <br/>
            <br/>
            <p>Thank you! A confirmation email has been sent to <?php echo $_POST["email"];?></p>
        </div>
        <?php require '../templateFooter.php';?>        
    </body>
</html>