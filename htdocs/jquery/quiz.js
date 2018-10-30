$(document).ready(function(){
    //CSS styling of elements on page
    $("aside").css({"float": "left", "background-color": "#387cea", "height": "547px", "color": "#ffffff", "padding": "20px", "font-size": "25px", 
        "border-bottom-left-radius": "5px"});
    $("label").css({"font-size": "25px", "display": "inline-block", "margin-left": "45%", "margin-top": "50px", "margin-bottom": "5px", 
        "color": "#0a14ce"});
    $(".q-aBox").css({"background-color": "#d1e1fc", "height": "100px", "width": "50%", "border-radius": "10px", "margin-left":"37%"});
    $("input").css({"margin":"10px"});
    $(".radioButtons").css("visibility", "hidden");
    $(":submit").css({"position": "relative", "bottom": "5px","background-color": "#ceb7f4", "border-radius": "5px", "padding": "3px", 
        "border-style": "solid", "border-color": "#5d3c96"});
    $(".qBox").css({"margin": "50px", "display": "inline-block", "background-color": "#ceb7f4", "padding": "20px", "border-radius": "10px", 
        "border-color": "#5d3c96", "border-style": "solid", "color": "#2e1756"});
    $("#qBoxes").css({"margin-left": "30%"});
    $("#questionDisplay").css({"color": "#0a14ce", "font-size": "20px", "font-weight": "bold", "display": "flex", "align-items": "center",
        "justify-content": "center"});
    $("#answerWarning").css({"visibility": "hidden"});
    $("ul").css({"margin-left": "50px", "margin-top": "15px", "font-size": "20px"});
    $("#completedImage").css({"width": "500px", "height": "532px"});
    $("#gameCompleted").css({"color": "#6d08a8", "position": "absolute", "left": "30%", "font-weight": "bold", "font-size": "40px", 
        "margin-top": "10px", "background-color" : "#ffffff", "border-radius": "5px", "visibility": "hidden"});
});

//Class for a question object
function Question(text, answer, id){
    this.text = text; //question string
    this.answer = answer; //true/false answer
    this.id = id; //id that matches the question button's id
    this.answered = false; //whether the question has been answered or not
}

//array of possible Questions
var questions = [];
questions.push(new Question("All calico cats are females", true, "Breeds"));
questions.push(new Question("Cats sleep 8 hours a day", false, "Lifestyle"));
questions.push(new Question("Cat domestication began 7,000 years ago", true, "History"));
questions.push(new Question("Cats have more chromosomes than humans", false, "Biology"));

//question that is currently being displayed to user
var currentQ;

function resetGame(){
    //resets all Questions to be not answered yet
    for(q in questions){
        questions[q].answered = false;
    }
    //resets the question buttons to be visible and with appropriate colors
    $(".qBox").css({"display": "inline-block", "background-color": "#ceb7f4", "border-color": "#5d3c96", "color": "#2e1756", 
        "visibility": "visible"});

    //gets rid of question history
    $("li").remove();

    //makes submit button visible (set to hidden when game completes)
    $(":submit").css("visibility", "visible");

    //game starts with no current question
    currentQ = undefined;
}

$(".qBox").hover(function(){
    //if the button isn't active then hovering will change colors
    if($(this).css("color") != "rgb(24, 25, 94)"){
        $(this).css({"background-color": "#7845d1", "border-color": "#1d0742", "color": "#ffffff"});
    }
    if($("#questionDisplay").html() === ""){
        $("#questionDisplay").html("Click to see the question");
    }
}, function(){
    //remove selection text when not hovering over button and no question is diplayed
    if($("#questionDisplay").html() === "Click to see the question"){
        $("#questionDisplay").html("");
    }
    //if button is not an active button, should return to original colors after hover
    if($(this).css("color") === "rgb(255, 255, 255)"){
        $(this).css({"background-color": "#ceb7f4", "border-color": "#5d3c96", "color": "#2e1756"});
    }
});

$(".qBox").click(function(){
    //if there isn't already a question being displayed, this question button will become active
    if(currentQ === undefined || currentQ.answered){
        $(".qBox").css({"background-color": "#ceb7f4", "border-color": "#5d3c96", "color": "#2e1756"});
        $(this).css({"background-color": "#0dddd3", "border-color": "#1d0742", "color": "#18195e"});

        //loop through and find matching Question object 
        for(var i = 0; i < questions.length; ++i){
            if(questions[i].id == $(this).attr('id')){
                currentQ = questions[i];
            }
        } 

        $("#questionDisplay").html(currentQ.text);
        $(".radioButtons").css("visibility", "visible");    
    } else {
        //if there is a current question, alert the user to answer the question
        window.alert("Question needs to be answered!");
    }
});

//if a radio button is pressed, other needs to be unchecked and the warning must go away
$('#true').click(function(){
    $("#false").prop('checked', false);
    $("#answerWarning").css("visibility", "hidden");
});

$('#false').click(function(){
    $("#true").prop('checked', false);
    $("#answerWarning").css("visibility", "hidden");
});

$(":submit").click(function(){
    //if there isn't an answer selected, show a warning
    if($("#false").prop('checked') === false && $("#true").prop('checked') === false){
        $("#answerWarning").css("visibility", "visible");
        return;
    }

    $("#questionDisplay").html("");
    currentQ.answered = true;

    //save the user's answer
    var userAnswer;
    if($("#false").prop('checked')){
        userAnswer = false;
    } else {
        userAnswer = true;
    }

    $(".radioButtons").css("visibility", "hidden");
    $("#true").prop("checked", false);
    $("#false").prop("checked", false);

    //add question to question history with check or x based on whether user was correct or wrong
    if(userAnswer === currentQ.answer){
        $("ul").append("<li>" + currentQ.id + " &#9989</li>");
    } else {
        $("ul").append("<li>" + currentQ.id + " &#10060</li>");       
    }
    $("li").css("margin-top", "50px");

    //once there are four questions in the history, the game is complete
    if($("li").length === 4){
        $(":submit").css("visibility", "hidden");
        $("#gameCompleted").css("visibility", "visible");
    }

    //remove appropriate question box, but if there's only one question button left, just hide it to keep the spacing correct
    if($(".qBox:visible").length > 1){
        $("#" + currentQ.id).css("display", "none");
    } else {
        $("#" + currentQ.id).css("visibility", "hidden");
    }
})

var numClicks = 0; //used to keep track of double click

$("#gameCompleted").click(function(){
    ++numClicks;
    if(numClicks > 1){
        numClicks = 0;
        //animate the graphic and reset the game after
        $("#gameCompleted").animate({opacity: 0}, 3000, function(){
            resetGame();
            $("#gameCompleted").css({"opacity": "1", "visibility": "hidden"});
        });
    }
})