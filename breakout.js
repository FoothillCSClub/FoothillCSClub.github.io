// All calculations are made using the size of a grid as the
// unit of measurement, then scaled to pixels for display,
// to prevent physics anomalies when resizing.
var ctx = canvas.getContext('2d'),
    level = 0,
    levelCurr = [],
    bricks,
    lives = 0,
    score = 0,
    multi,
    combo,
    ballOnPaddle,
    paddleX,
    paddleXOld,
    paddleWidth,
    paddleHeight = 0.5,
    x,          // coordinates of center of ball
    y,
    dx,         // delta of ball
    dy,
    r = 0.4,    // radius of ball
    v,          // velocity of ball
    g,          // gravity
    k = 0.9,    // kinetic coefficient of restitution
    gxOld = 0,  // floored grid coordinates of ball
    gyOld = 0,
    gw,         // horizontal grid count
    gh,         // vertical grid count
    gU,         // size of a grid
    color = {
        background: '#111',
        brick: '#090',
        debug: 'red'
    },
    pause = false,
    gravity = false,
    kinetics = false,
    debug = false;

initLevel(1);

function initLevel(n) {
    if (n) {
        if (n-1 < levels.length) {
            level = n-1;
            score = 0;
            while (lives < 4)
                addLife(lives);
        }
        else return;
    }
    // Convert 2D char array to boolean array
    bricks = 0;
    gw = 0;
    gh = levels[level].length;
    levelCurr.length = 0;
    for (var i = 0; i < gh; i++) {
        var jlen = levels[level][i].length;
        gw = gw < jlen ? jlen : gw;
        levelCurr[i] = [];
        for (var j = 0; j < jlen; j++)
            levelCurr[i][j] = levels[level][i][j] !== ' ' ? (bricks++, true) : false;
    }
    ballOnPaddle = true;
    // Center ball and paddle on load for touchscreens
    paddleX = (gw-(0.03*gw+2.5))/2;
    paddleWidth = 0.03*gw+2.5;
    x = gw/2;
    dx = 0;
    dy = 0;
    v = 0.003*gw+0.1;
    g = v*0.004
    combo = 0;
    multi = 0;
    multiDisp.innerHTML = '×'+multi;
    comboDisp.innerHTML = '×'+combo;
    scoreDisp.innerHTML = score;
    vDebug.innerHTML = v.toFixed(3);
    bricksDebug.innerHTML = bricks;
    resizeCanvas();
}

// Resize on viewport size change
function resizeCanvas() {
    canvas.width = window.innerWidth > window.innerHeight*1.5 ? window.innerHeight*1.5 : window.innerWidth;
    canvas.height = canvas.width/2;
    container.style.width = canvas.width+'px';
    document.body.style.fontSize = canvas.width*0.02+'px';
    ctx.fillStyle = color.background;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    gU = canvas.width/gw;
    ball.style.width = r*2*gU+'px';
    ball.style.height = r*2*gU+'px';
    paddle.style.top = canvas.offsetTop+canvas.height-(paddleHeight+1)*gU+'px';
    paddle.style.width = paddleWidth*gU+'px';
    paddle.style.height = paddleHeight*gU+'px';
    ctx.fillStyle = color.brick;
    ctx.shadowColor = color.brick;
    ctx.shadowBlur = 3;
    // Draw bricks
    for (var i = 0; i < gh; i++) {
        for (var j = 0; j < gw; j++) {
            if (levelCurr[i][j])
                ctx.fillRect(j*gU+1, i*gU+1, gU-2, gU-2);
        }
    }
    ctx.fillStyle = color.background;
    ctx.strokeStyle = debug ? color.debug : color.background;
    ctx.shadowColor = color.background;
    paddle.style.left = paddleX*gU+'px';
    if (ballOnPaddle)
        y = gw/2-1-paddleHeight*1.6-r;
}

document.addEventListener('keydown', function(e) {
    // Select level with number keys
    if (e.keyCode > 48 && e.keyCode < 58)
        initLevel(e.keyCode-48);
    // Select level with numpad
    else if (e.keyCode > 96 && e.keyCode < 106)
        initLevel(e.keyCode-96);
    else if (e.keyCode === 71)
        gravity = !gravity;
    else if (e.keyCode === 75)
        kinetics = !kinetics;
    else if (e.keyCode === 80)
        pause = !pause;
    else if (e.keyCode === 68)
        toggleDebug();
}, false);

function toggleDebug() {
    debug = !debug;
    if (debug) {
        divDebug.style.visibility = 'visible';
        ctx.strokeStyle = color.debug;
    }
    else {
        divDebug.style.visibility = 'hidden';
        resizeCanvas();
    }
}

// Paddle follows mouse
document.addEventListener('mousemove', function(e) {
    movePaddle((e.clientX-container.offsetLeft)/gU);
});

// Paddle follows touch
document.addEventListener('touchmove', function(e) {
    movePaddle((e.changedTouches[0].clientX-container.offsetLeft)/gU);
});

function movePaddle(ex) {
    if (ex > paddleWidth/2 && ex < gw-paddleWidth/2) {
        paddleXOld = paddleX;
        paddleX = ex-paddleWidth/2;
        if (ballOnPaddle) { x = ex; }
        paddle.style.left = paddleX*gU+'px';
    }
}

// Launch ball if on paddle
function mouseClick(e) {
    if (ballOnPaddle && e.button === 0) {
        ballOnPaddle = false;
        // Transfer some paddle inertia to ball
        if (Math.abs(paddleX-paddleXOld) > 0.4) {
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
    forum_label.style.color = '#0C0';
}

function mouseLinkOut() {
    document.querySelector('.forum_icon').classList.remove('forum_icon_hover');
    forum_label.style.color = '#CCC';
}

function addLife(n) {
    if (lives++ > 0) {
        var life = document.createElement('div');
        life.className = 'life';
        life.style.left = n-1+'em';
        livesDisp.appendChild(life);
    }
}

// Check brick collision
// TODO: Fix occasional wrong bounce direction
// TODO: Recurse collision detection until ball has traveled full delta distance
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
        bounce = 'x';
    }
    if (yEdgeDist < Math.abs(dy) && yCenterDist*dy > 0) {
        var yVectFrac = 1-Math.abs(yEdgeDist/dy);
        // Contact occurs at greatest valid fraction of delta vector
        if (yVectFrac > vectFrac) {
            vectFrac = yVectFrac;
            centerness = Math.abs(xCenterDist-dx*vectFrac);
            bounce = 'y';
        }
    }
    if (debug)
        // Visualize grids checked by collision detection
        ctx.strokeRect(gridX*gU+3, gridY*gU+3, gU-6, gU-6);
    // Disqualify result if no contact occured
    return [vectFrac > 0 ? vectFrac : 1, centerness < 0.5+r ? centerness : 1, bounce];
}

function deleteBrick(gridX, gridY) {
    levelCurr[gridY][gridX] = false;
    score += ++multi * (++combo+9);
    multiDisp.innerHTML = '×'+multi;
    comboDisp.innerHTML = '×'+combo;
    scoreDisp.innerHTML = score;
    bricksDebug.innerHTML = --bricks;
    ctx.fillRect(gridX*gU, gridY*gU, gU, gU);
    ctx.strokeRect(gridX*gU, gridY*gU, gU, gU);
    if (!bricks && levels[level+1]) {
        level++;
        initLevel();
    }
}

// Handle collision and move ball every 10 ms
setInterval(function() {
    if (pause) { return; }
    var gx = Math.floor(x-0.5),
        gy = Math.floor(y-0.5);
    // Constant gravitational force
    if (gravity && !ballOnPaddle)
        dy += g;
    // Continue if ball only intersects previous grids
    if (gy > 0 && gy < gh-1 && (gx !== gxOld || gy !== gyOld)) {
        var deleteX,
            deleteY,
            minVectFrac = 1,
            minCenterness = 1,
            bounce;
        for (var i = gx+Math.floor(dx); i <= gx+Math.ceil(dx); i++) {
            for (var j = gy+Math.floor(dy); j <= gy+Math.ceil(dy); j++) {
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
            x += dx*minVectFrac;
            y += dy*minVectFrac;
            if (bounce === 'y') { dy *= kinetics ? -k : -1; }
            else { dx *= kinetics ? -k : -1; }
            deleteBrick(deleteX, deleteY);
        }
    }
    // Check sidewall collision
    if (x+dx < r || x+dx > gw-r)
        dx *= -1;
    // Check ceiling collision
    else if (y+dy < r)
        dy *= -1;
    else if (y+dy > gw/2-1-paddleHeight-r) {
        combo = 0;
        comboDisp.innerHTML = '×'+combo;
        // Check paddle collision
        if (x+r > paddleX && x-r < paddleX+paddleWidth) {
            // Angle ball between 0.57 and 2.57 radians based on location of paddle hit
            var angle = (paddleX+paddleWidth+r-x)/(paddleWidth+r*2)*2+0.57;
            dx = v*Math.cos(angle);
            dy = -v*Math.sin(angle);
        }
        // Check floor collision
        else if (y+dy > gw/2-r) {
            ballOnPaddle = true;
            x = paddleX+paddleWidth/2;
            y = gw/2-1-paddleHeight*1.6-r;
            dx = 0;
            dy = 0;
            lives -= lives > 0 ? 1 : 0;
            if (lives > 0)
                livesDisp.removeChild(livesDisp.lastChild);
            multi = 0;
            multiDisp.innerHTML = '×'+multi;
            if (!lives && level !== levels.length-1) {
                level = levels.length-1;
                score = 0;
                initLevel();
            }
        }
    }
    gxOld = gx;
    gyOld = gy;
    x += dx;
    y += dy;
    if (debug) {
        xDebug.innerHTML = x.toFixed(15);
        yDebug.innerHTML = y.toFixed(15);
        gxDebug.innerHTML = gx;
        gyDebug.innerHTML = gy;
        dxDebug.innerHTML = dx.toFixed(15);
        dyDebug.innerHTML = dy.toFixed(15);
        ctx.strokeRect(x*gU, y*gU, 0.1, 0.1);
    }
    // Move ball
    ball.style.left = (x-r)*gU+'px';
    ball.style.top = (y-r)*gU+canvas.offsetTop+'px';
}, 10);
