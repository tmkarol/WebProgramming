//Change the image that appears for the book selected
function handleOption() {
    $("#book").css({"width": "200px", "height": "260px"});
    switch($("select").find(":selected").val()) {
        case "Hunger Games":
            $("#book").attr("src", "../images/hungergames.jpg");
            break;
        case "Twilight":
            $("#book").attr("src", "../images/twilight.jpg");
            break;
        case "The Great Gatsby":
            $("#book").attr("src", "../images/greatGatsby.jpg");
            break;
        case "The Fault in our Stars":
            $("#book").attr("src", "../images/tfios.jpg");
            break;
    }
}

//Removes image when reset 
function resetHandler() {
    $("#book").attr("src", "").css({"width": "0", "height": "0"});
}

//Validates fields before submission
$("form").submit(function(){
    var first = $("#first").val();
    var last = $("#last").val();
    var email = $("#email").val();
    var quantity = $("#quantity").val();
    var re = RegExp("^([a-zA-Z'\\s])+$");
    if(!re.test(first)) {
        window.alert("First name must only include letters, spaces, and apostrophes");
        return false;
    }
    if(!re.test(last)) {
        window.alert("Last name must only include letters, spaces, and apostrophes");
        return false;
    }
    if(quantity <= 0){
        window.alert("Quantity must be greater than zero");
        return false;
    }
    if(!$("#yes").prop("checked") && !$("#no").prop("checked")) {
        window.alert("Must select donation option");
        return false;
    }
});

//Only one radio button selected at a time
$("#yes").click(function(){
    $("#no").prop('checked', false);
});

$("#no").click(function(){
    $("#yes").prop("checked", false);
});
