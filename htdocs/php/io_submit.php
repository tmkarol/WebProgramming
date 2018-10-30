<?php 
    function getPrice() {
        $myFile = fopen("itemlist.csv", "r") or die("Could not open file!");
        $list = fread($myFile, filesize("itemlist.csv"));
        $products = explode(",", $list);
        fclose($myFile);
        for($i = 0; $i < count($products); $i +=3){
            if($products[$i] == $_POST["products"]){
                return $products[$i+1];
            }
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>PHP IO Submission</title>
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
            $selectedPage = 'io';
            require '../templateHeader.php';?> 
        <h2 class="section_header">Book Store</h2>
        <div id="receipt">
            <p>Order Submitted By: <?php echo $_POST["first"], ' ', $_POST["last"];?></p>
            <br/>
            <p>Order Submitted At: <?php echo $_POST["time"];?></p>
            <br/>
            <p>Book purchased: <?php echo $_POST["products"];?></p>
            <br/>
            <p>Price per book: <?php echo "$", getPrice();?></p>
            <p>Quantity: <?php echo $_POST["quantity"];?></p>
            <p>Subtotal: <?php $subtotal = round($_POST["quantity"]*getPrice()); 
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
        <?php 
            $myFile = fopen($_SERVER['DOCUMENT_ROOT']."/php/orders.csv", "a") or die("Could not open file!"); 
            $text = $_POST["first"] + "," + $_POST["last"] + "," + $_POST["time"] + "," + $_POST["products"] + getPrice($_POST["products"]) + $_POST["quantity"] + $subtotal + $tax + $donation + ($subtotal + $tax + $donation) + ",";
            fwrite($myFile, $text);
            fclose($myFile);
        ?>
    </body>
</html>