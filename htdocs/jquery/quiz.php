<!--Author: Tracy Karol-->
<!doctype html>
<html lang="en">
    <head>
        <title>jQuery Quiz</title>
        <meta charset="UTF-8">
        <meta name="author" content="Tracy Karol">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" type="text/css" href="../csci445.css" />
        <script src="quiz.js" defer></script>
        <script src="jquery.js"></script>        
    </head>
    <body>
        <?php
            $selectedPage = 'quiz';
            require '../templateHeader.php';?>
        <div id="gameCompleted">
            <img id="completedImage" src="../images/excitedCat.jpg" alt="Excited cat">
            <p>Congrats! You're finished!</p>
        </div>
        <aside>
            <p>Question History</p>
            <ul></ul>
        </aside>
        <section>
            <label>Question</label>
            <div class="q-aBox" id="questionDisplay"></div>
            <label>Answer</label>
            <div class="q-aBox" id="answerDisplay">
                <div class="radioButtons">
                    <input type="radio" name="true" id="true"> True<br/>
                    <input type="radio" name="false" id="false"> False<br/>
                </div>
                <input type="submit" name="answer" value="Check Answer">
                <span id="answerWarning">Must select an answer!</span>
            </div>
        </section>
        <section id="qBoxes">
            <div class="qBox" id="Breeds">Cat Breeds</div>
            <div class="qBox" id="Biology">Cat Biology</div>
            <div class="qBox" id="History">Cat History</div>
            <div class="qBox" id="Lifestyle">Cat Lifestyle</div>
        </section>
        <hr/>
        <?php require '../templateFooter.php';?>
    </body>
</html>