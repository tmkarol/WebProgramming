<header>
    <h1>My name is Tracy Karol!</h1>
</header>
    <nav>
        <a <?php if($selectedPage == "index"){echo 'href="#" class="selected-menu"';}
            else{echo 'href="/index.php"';}?>>Home</a>
        <a <?php if($selectedPage == "aboutme"){echo 'href="#" class="selected-menu"';}
            else{echo 'href="/aboutme/aboutme.php"';} ?>>About Me</a>
        <div class="dropdown">
            <a href="#">CSS Tutorials</a>
            <div class="dropdown-content">
                <a href="/csstutorials/turtlecoders.html">Turtle Coders</a>
                <a href="/csstutorials/posEx.html">Position Example</a>
                <a href="/csstutorials/floatExBoxes.html">Box Model</a>
                <a href="/csstutorials/clearEx.html">Float and Clear</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Javascript</a>
            <div class="dropdown-content">
                <a <?php if($selectedPage == "jsmouse"){echo 'href="#" class="selected-menu"';}
                    else{echo 'href="/javascript/jsmouse.php"';} ?>>JS Mouse</a>
                <a <?php if($selectedPage == "jskeyboard"){echo 'href="#" class="selected-menu"';}
                    else{echo 'href="/javascript/jskeyboard.php"';} ?>>JS Keyboard</a>
            </div>
        </div>
        <a <?php if($selectedPage == "quiz"){echo 'href="#" class="selected-menu"';}
            else{echo 'href="/jquery/quiz.php"';} ?>>jQuery</a>
        <div class="dropdown">
            <a href="#">PHP</a>
            <div class="dropdown-content">
                <a <?php if($selectedPage == "form"){echo 'href="#" class="selected-menu"';}
                    else{echo 'href="/php/form.php"';} ?>>Form</a>
                <a <?php if($selectedPage == "io"){echo 'href="#" class="selected-menu"';}
                    else{echo 'href="/php/io.php"';} ?>>File I/O</a>
            </div>
        </div>
    </nav>