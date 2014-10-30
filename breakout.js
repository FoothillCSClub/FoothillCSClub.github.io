// All calculations are made using the size of a grid as the
// unit of measurement, then scaled to pixels for display,
// to prevent physics anomalies when resizing.
var ctx = canvas.getContext("2d"),
    level = 0,
    levelCurr = [],
    bricks = 0,
    lives = 3,
    score = 0,
    ballOnPaddle,
    paddleX,
    paddleXOld,
    paddleWidth = 4,
    paddleHeight = 0.5,
    x,          // coordinates of center of ball
    y,
    dx,         // delta of ball
    dy,
    r = 0.4,    // radius of ball
    v = 0.25,   // velocity of ball
    gxOld = 0,  // floored grid coordinates of ball
    gyOld = 0,
    gw,         // horizontal grid count
    gh,         // vertical grid count
    gU,         // size of a grid
    color = {
        background: "#111",
        brick0: "#0C0",
        brick1: "#050",
        brickB: "#090"
    };

initLevel();

function initLevel(n) {
    if (n) {
        if (n-1 < levels.length) { level = n-1; }
        else { return; }
    }
    // Convert 2D char array to boolean array
    gw = 0, gh = levels[level].length;
    for (var i = 0; i < gh; i++) {
        var jlen = levels[level][i].length;
        gw = gw < jlen ? jlen : gw;
        levelCurr[i] = [];
        for (var j = 0; j < jlen; j++) {
            levelCurr[i][j] = levels[level][i][j] != " " ? (bricks++, true) : false;
        }
    }
    ballOnPaddle = true;
    // Center ball and paddle on load for touchscreens
    paddleX = (gw-(0.03*gw+2.5))/2;
    x = gw/2;
    dx = 0;
    dy = 0;
    resizeCanvas();
}

// Resize on viewport size change
function resizeCanvas() {
    canvas.width = window.innerWidth > window.innerHeight*1.5 ? window.innerHeight*1.5 : window.innerWidth;
    canvas.height = canvas.width/2;
    container.style.width = canvas.width+"px";
    document.body.style.fontSize = canvas.width*0.02+"px";
    ctx.fillStyle = color.background;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    gU = canvas.width/gw;
    paddleWidth = 0.03*gw+2.5;
    v = 0.003*gw+0.1;
    ball.style.width = r*2*gU+"px";
    ball.style.height = r*2*gU+"px";
    paddle.style.top = canvas.height-paddleHeight*gU+"px";
    paddle.style.width = paddleWidth*gU+"px";
    paddle.style.height = paddleHeight*gU+"px";
    ctx.strokeStyle = color.brickB;
    // Draw bricks
    for (var i = 0; i < gh; i++) {
        var grad = ctx.createLinearGradient(0,i*gU+1,0,(i+1)*gU-2);
        grad.addColorStop(0, color.brick0);
        grad.addColorStop(1, color.brick1);
        ctx.fillStyle = grad;
        for (var j = 0; j < gw; j++) {
            if (levelCurr[i][j]) {
                ctx.fillRect(j*gU+1, i*gU+1, gU-2, gU-2);
                ctx.strokeRect(j*gU+1, i*gU+1, gU-2, gU-2);
            }
        }
    }
    ctx.strokeStyle = color.background;
    ctx.fillStyle = color.background;
    paddle.style.left = canvas.offsetLeft+paddleX*gU+"px";
    if (ballOnPaddle) {
        y = gw/2-paddleHeight*1.6-r;
    }
}

// Select level with number keys
document.addEventListener("keyup", function(e) {
    if (e.keyCode > 48 && e.keyCode < 58) {
        initLevel(e.keyCode-48);
    }
    // Numpad 1-9
    else if (e.keyCode > 96 && e.keyCode < 106) {
        initLevel(e.keyCode-96);
    }
}, false);

// Move paddle to mouse
document.addEventListener("mousemove", function(e) {
    var ex = (e.clientX-canvas.offsetLeft)/gU;
    if (ex > paddleWidth/2 && ex < gw-paddleWidth/2) {
        paddleXOld = paddleX;
        paddleX = ex-paddleWidth/2;
        if (ballOnPaddle) { x = ex; }
        paddle.style.left = canvas.offsetLeft+paddleX*gU+"px";
    }
});

// Launch ball if on paddle
function mouseClick() {
    if (ballOnPaddle) {
        ballOnPaddle = false;
        // Transfer some paddle inertia to ball
        if (Math.abs(paddleX-paddleXOld) > 0.1) {
            // Restrict angle between (pi/2)-1 and (pi/2)+1 using sigmoid function
            var angle = 2/(1+Math.exp((paddleX-paddleXOld)))+0.57;
            dx = v*Math.cos(angle);
            dy = -v*Math.sin(angle);
        }
        else {
            dx = v*Math.cos(1);
            dy = -v*Math.sin(1);
        }
    }
}

function mouseLinkOver() {
    document.querySelector('.forum_icon').classList.add('forum_icon_hover');
    forum_label.style.color = "#0C0";
}

function mouseLinkOut() {
    document.querySelector('.forum_icon').classList.remove('forum_icon_hover');
    forum_label.style.color = "#CCC";
}

// Check brick collision
// TODO: Move ball to point of collision and recurse collision detection
function checkCollision(gridX, gridY) {
    var xCenterDist = (gridX+0.5)-x,    // distance between centers
        yCenterDist = (gridY+0.5)-y,
        xEdgeDist = Math.abs(xCenterDist)-(0.5+r),  // distance between edges
        yEdgeDist = Math.abs(yCenterDist)-(0.5+r),
        vectFrac = 0,                   // fraction of delta vector traveled until contact
        centerness = 1,                 // accuracy of contact, less is closer to center
        bounce;                         // direction of bounce
    // Check that brick is reachable and delta is heading towards brick
    if (xEdgeDist < Math.abs(dx) && xCenterDist*dx > 0) {
        vectFrac = 1-Math.abs(xEdgeDist/dx);
        centerness = Math.abs(yCenterDist-dy*vectFrac);
        bounce = "x";
    }
    if (yEdgeDist < Math.abs(dy) && yCenterDist*dy > 0) {
        var yVectFrac = 1-Math.abs(yEdgeDist/dy);
        // Contact occurs at greatest valid fraction of delta vector
        if (yVectFrac > vectFrac) {
            vectFrac = yVectFrac;
            centerness = Math.abs(xCenterDist-dx*vectFrac);
            bounce = "y";
        }
    }
    // DEBUG: Uncomment to see what grids are checked by collision detection
    //ctx.strokeStyle="red";
    //ctx.strokeRect(gridX*gU+3, gridY*gU+3, gU-6, gU-6);
    // Disqualify result if no contact occured
    return [vectFrac > 0 ? vectFrac : 1, centerness < 0.5+r ? centerness : 1, bounce];
}

function deleteBrick(gridX, gridY) {
    levelCurr[gridY][gridX] = false;
    score += 10;
    lives += score % 1000 == 0 ? 1 : 0;
    ctx.fillRect(gridX*gU, gridY*gU, gU, gU);
    ctx.strokeRect(gridX*gU, gridY*gU, gU, gU);
    if (!--bricks && levels[++level]) { initLevel(); }
}

// Handle collision and move ball every 10 ms
setInterval(function() {
    var gx = Math.floor(x-0.5),
        gy = Math.floor(y-0.5);
    // Continue if ball only intersects previous grids
    if (gy > 0 && gy < gh-1 && (gx != gxOld || gy != gyOld)) {
        var deleteX,
            deleteY,
            minVectFrac = 1,
            minCenterness = 1,
            bounce;
        for (var i = gx-1; i <= gx+1; i++) {
            for (var j = gy-1; j <= gy+1; j++) {
                if (levelCurr[j][i]) {
                    var result = checkCollision(i, j);
                    // Nominate brick with shortest collision vector for deletion
                    // When contacting 2 bricks simultaneously, check which one is closer
                    if (result[0] <= minVectFrac && result[1] < minCenterness) {
                        deleteX = i;
                        deleteY = j;
                        minVectFrac = result[0];
                        minCenterness = result[1];
                        bounce = result[2];
                    }
                }
            }
        }
        // Delete candidate brick if collision occured
        if (minVectFrac < 1) {
            deleteBrick(deleteX, deleteY);
            if (bounce == "y") { dy *= -1; }
            else { dx *= -1; }
        }
    }
    // Check sidewall collision
    if (x+dx < r || x+dx > gw-r) {
        dx *= -1;
    }
    // Check ceiling collision
    else if (y+dy < r) {
        dy *= -1;
    }
    // Check floor collision
    else if (y+dy > gw/2-paddleHeight-r) {
        if (x > paddleX && x < paddleX+paddleWidth) {
            // Angle ball between 0.57 and 2.57 radians based on location of paddle hit
            var angle = (paddleX+paddleWidth-x)/paddleWidth*2+0.57
            dx = v*Math.cos(angle);
            dy = -v*Math.sin(angle);
        }
        else {
            ballOnPaddle = true;
            x = paddleX+paddleWidth/2;
            y = gw/2-paddleHeight*1.6-r;
            dx = 0;
            dy = 0;
            if (!--lives) { initLevel(levels.length); }
        }
    }
    gxOld = gx;
    gyOld = gy;
    x += dx;
    y += dy;
    // Move ball
    ball.style.left = (x-r)*gU+canvas.offsetLeft+"px";
    ball.style.top = (y-r)*gU+"px";
}, 10);
