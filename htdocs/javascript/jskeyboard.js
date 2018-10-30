var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.canvas.width = 1000;
ctx.canvas.height = 700;

var img = new Image();
img.src = "../images/kitty.jpg";
var catX = 10;
var catY = 10;
img.onload = function() {
    ctx.drawImage(img, catX, catY, 150, 100);
}

window.addEventListener("keydown", moveImage, false);

function moveImage(event) {
    switch(event.keyCode) {
        //left key pressed
        case 37:
            if(catX > 5){
                catX -= 5;
            }
            break;
        //up key pressed
        case 38:
            if(catY > 5){
                catY -= 5;
            }
            break;
        //right key pressed
        case 39:
            if(catX < ctx.canvas.width - 150){
                catX += 5;
            }
            break;
        //down key pressed
        case 40:
            if(catY < ctx.canvas.height - 100){
                catY += 5;
            }
            break;
        default:
            break;            
    }
    ctx.drawImage(img, catX, catY, 150, 100);
}

