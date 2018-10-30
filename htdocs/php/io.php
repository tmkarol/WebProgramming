<?php 
    $myFile = fopen("itemlist.csv", "r") or die("Could not open file!");
    $list = fread($myFile, filesize("itemlist.csv"));
    $products = explode(",", $list);
    fclose($myFile);
?>

<script>
    function handleImage(){
        $("#book").css({"width": "200px", "height": "260px"});
        var products = <?php echo json_encode($products);?>;
        for(var i=0; i < products.length; i += 3){
            if(products[i] == ($("select").find(":selected").val())){
                $('#book').attr("src", "../images/" + products[i+2]);
            }
        }
    }
</script>

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
            $selectedPage = 'io';
            require '../templateHeader.php';?>
        <h2 class="section_header">Book Store</h2>
        <form action="io_submit.php" method="post">
            <fieldset>
                <legend>Personal Info</legend>
                First Name: <input type="text" name="first" id="first" required>*<br>
                Last Name: <input type="text" name="last" id="last" required>*<br>
                Email: <input type="email" name="email" id="email" required>*<br>
            </fieldset>
            <fieldset id="product">
                <legend>Product Info</legend>
                <img id="book" style="width: 0; height: 0;">
                Books: <select name="products" required onChange="handleImage();"> 
                    <option disabled selected value>select a book</option>
                    <?php for($i = 0; $i < count($products); $i +=3){
                            echo '<option value="', $products[$i], '">', $products[$i], " ($", $products[$i+1], ")", '</option>';
                        }
                    ?>
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