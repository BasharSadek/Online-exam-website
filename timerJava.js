var min = 1;
var sec = 30;

function runApp() {
    if (min == 0 && sec == 0) {
        clearInterval(t2);
    }
    else if (sec == 0) {
        min--;
        sec = 59;
    } else {
        sec--;
        var t = document.getElementById("idTimer");
        t.innerHTML = "Time =" + min + ":" + sec;
    }
}
function startTimer() {
    var t2 = setInterval(runApp, 1000);
}
function endTimer() {
    clearInterval(t2);
}
//var t2 = setInterval(runApp, 1000);
