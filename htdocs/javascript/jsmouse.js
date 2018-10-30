var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.canvas.height = 600;
ctx.canvas.width = 600;
var centerX = canvas.width / 2;
var centerY = canvas.height / 2;
var picRadius = 100;
var makeHappy = false;
var button = document.getElementById("myButton");

drawFace(true);

function drawFace(happy) {
    // Draw main face circle
    ctx.fillStyle = "#eff237";
    ctx.beginPath();
    ctx.arc(centerX, centerY, picRadius, 0, 2*Math.PI);
    ctx.lineWidth = 5;
    ctx.stroke();
    ctx.fill();

    //Draw left eye circle
    if(happy){
        ctx.fillStyle = "#9ff9f2";
    } else {
        ctx.fillStyle = "#0918a0";
    }
    ctx.beginPath();
    ctx.arc(centerX - 30, centerY - 30, 15, 0, 2*Math.PI);
    ctx.lineWidth = 1;
    ctx.stroke();
    ctx.fill();

    //Draw right eye circle
    ctx.beginPath();
    ctx.arc(centerX + 30, centerY - 30, 15, 0, 2*Math.PI);
    ctx.stroke();
    ctx.fill();

    //Draw smile half circle
    ctx.beginPath();
    if(happy){
        ctx.arc(centerX, centerY + 30, 40, 0, Math.PI);
    } else {
        ctx.arc(centerX, centerY + 50, 40, Math.PI, 0);
    }
    ctx.lineWidth = 3;
    ctx.stroke();
}

function writeButtonText(happy){
    if(happy){
        button.innerHTML = "Make me sad";
    } else {
        button.innerHTML = "Make me happy";
    }
}

canvas.addEventListener("mousedown", changePicture, false);

button.addEventListener("mousedown", changePicture, false);

function changePicture(event) {
    if(event.srcElement === button){
         drawFace(makeHappy);
        writeButtonText(makeHappy);
        if(makeHappy){
            makeHappy = false;
        } else {
            makeHappy = true;
        }
    } else {
        var dx = event.x - (centerX + 10);
        var dy = event.y - (centerY + 70);
        if(Math.sqrt((dx*dx)+(dy*dy)) <= picRadius) {
            drawFace(makeHappy);
            writeButtonText(makeHappy);
            if(makeHappy){
                makeHappy = false;
            } else {
                makeHappy = true;
            }
        }
    }
}