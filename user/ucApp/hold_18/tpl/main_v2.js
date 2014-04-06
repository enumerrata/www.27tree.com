isNS4 = (document.layers) ? true : false;
isIE4 = (document.all && !document.getElementById) ? true : false;
isIE5 = (document.all && document.getElementById) ? true : false;
isNS6 = (!document.all && document.getElementById) ? true : false;
var curX, curY, curX2, curY2, boxX, boxY, moving=0, touch=0;
var gametime=0, started=0, speed;
var starttime, endtime, finaltime=0; //pass finaltime to popup window to ask for initials
var enemyxdir = new Array(1,1,1,1);
var enemyydir = new Array(1,1,1,1);
var initParam_box_offset = getRandOffset();

var posYcache = [];
var posXcache = [];
//对象缓冲池

var parent_timing = null;
var toDay = null;
if (isNS4 || isNS6){
    document.captureEvents(Event.MOUSEUP|Event.MOUSEDOWN|Event.MOUSEMOVE);
}

document.onmousedown = start;
document.onmousemove = checkLocation;

function calctime() {
    return (new Date().getTime() - starttime - 0)/1000;
}

function giveposX(divname) {
    if(undefined === posYcache[divname])
        posYcache[divname] = $('#'+divname);
    return parseInt(posYcache[divname].css('left') + "");
}

function giveposY(divname) {
    if(undefined === posYcache[divname])
        posYcache[divname] = $('#'+divname);
    return parseInt(posYcache[divname].css('top') + "");
}

function setposX(divname, xpos) {
    if(undefined === posYcache[divname])
        posYcache[divname] = $('#'+divname);
    posYcache[divname].css('left',xpos);
}

function setposY(divname, ypos) {
    if(undefined === posYcache[divname])
        posYcache[divname] = $('#'+divname);
    posYcache[divname].css('top',ypos);
}

function givesize(divname, dimension) {
    if(undefined !== posYcache[divname]){
        return dimension == 'x' ? parseInt(posYcache[divname].width()) : parseInt(posYcache[divname].height()) + "";
    } else if(undefined !== posXcache[divname]){
        return dimension == 'x' ? parseInt(posXcache[divname].width()) : parseInt(posXcache[divname].height()) + "";
    }
    return false;
}

function checktouching(num) {

    var enemy = "enemy" + num + ""
    var difX = giveposX('box') - giveposX(enemy) - 0; // -0 converts to integer
    var difY = giveposY('box') - giveposY(enemy) - 0;

    if (difX > (-1 * givesize('box', 'x')) && difX < givesize(enemy, 'x') && difY > (-1 * givesize('box', 'y')) && difY < givesize(enemy, 'y')) {
        touch = 1;
    }
    else touch = 0;

}

function movenemy(num,step_x,step_y){

    var enemy = "enemy" + num + ""
    var enemyx = givesize(enemy, 'x');
    var enemyy = givesize(enemy, 'y');

    if (giveposX(enemy) >= (450 - enemyx) || giveposX(enemy) <= 0) {
        enemyxdir[num] = -1 * enemyxdir[num];
    }
    if (giveposY(enemy) >= (450 - enemyy) || giveposY(enemy) <= 0) {
        enemyydir[num] = -1 * enemyydir[num];
    }

    var newposx = giveposX(enemy) + (step_x*enemyxdir[num]) + 0;
    var newposy = giveposY(enemy) + (step_y*enemyydir[num]) + 0;

    setposX(enemy, newposx);
    setposY(enemy, newposy);

    checktouching(num + "");
    if (touch == 1) {
        reset();
    }
}

function movenemies() {
    
    if(started == 0) return;
    parent_timing.html(calctime());
    gametime = gametime + 1

    if (gametime >= 0 && gametime < 100) speed = 80;
    else if (gametime >= 100 &&  gametime < 200) speed = 60;
    else if (gametime >= 200 &&  gametime < 300) speed = 40;
    else if (gametime >= 300 &&  gametime < 400) speed = 30;
    else if (gametime >= 400 &&  gametime < 500) speed = 20;
    else speed = 10;

    movenemy(0,-10,initParam_box_offset[0]);
    movenemy(1,-12,-initParam_box_offset[1]);
    movenemy(2,initParam_box_offset[2],-13);
    movenemy(3,initParam_box_offset[3],11);

    setTimeout(movenemies,speed);
}

function start(e) {
    //init game set
    if (started == 0) {
        moving = 1;
        started = 1;
        parent_timing = $('#countTime',window.parent.document);
        toDay = new Date();
        starttime = toDay.getTime();
        movenemies();
    }

    curX = (isNS4 || isNS6) ? e.pageX : window.event.x ;
    curY = (isNS4 || isNS6) ? e.pageY : window.event.y ;

    curX2 = eval(curX - 40);
    curY2 = eval(curY - 40);

    boxX = eval(curX - 20);
    boxY = eval(curY - 20);

    var boxleft = giveposX('box');
    var boxtop = giveposY('box');

    if (curX > boxleft && curX2 < boxleft && curY > boxtop && curY2 < boxtop) {

        setposX('box', boxX);
        setposY('box', boxY);

        if (isNS4 || isNS6){
            document.captureEvents(Event.MOUSEMOVE);
        }
    }
}

function reset(e){
    moving=0;
    started = 0;
    $('#record_submit_btn',window.parent.document).show();
}

function checkLocation(e){
    curX = (isNS4 || isNS6) ? e.pageX : window.event.x ;
    curY = (isNS4 || isNS6) ? e.pageY : window.event.y ;
    boxX = eval(curX - 20);
    boxY = eval(curY - 20);
    checktouching('1');
    if (moving == 1 && touch == 0){
        setposX('box',boxX);
        setposY('box',boxY);
        if (curY > 69 && curX > 69 && curY < 381 && curX < 381) return false;
        else {
            reset();
        }
    }
    else if (touch == 1){
        reset();
    }
}

function getRandOffset(){
    var _arr = [];
    for(var i = 0 ;i < 4 ; i++){
        _arr.push(parseInt((Math.random() * 10 + 15)));
    }
    return _arr;
}