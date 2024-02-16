const clock = document.querySelector('.clock');


function runClock(){
    var time  = new Date();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds  = time.getSeconds();

    var txt = "AM";
    if(hours>12){
        hours = hours-12;
        txt = "PM";
    }
    else if(hours == 0){
        hours = 12;
        txt = "AM";
    }

    hours=hours<10?"0"+hours:hours;
    minutes=minutes<10?"0"+minutes:minutes;
    seconds=seconds<10?"0"+seconds:seconds;

    clock.innerHTML = `${hours} : ${minutes} : ${seconds} ${txt}`;
}


setInterval(runClock,1000);