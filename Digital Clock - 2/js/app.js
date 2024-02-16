function runClock(){
    let time  = new Date();
    let hours = time.getHours();
    let minutes = time.getMinutes();
    let seconds  = time.getSeconds();

    let txt = "AM";
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

    let hrs = document.querySelectorAll('.hrs');
    let min = document.querySelectorAll('.min');
    let sec = document.querySelectorAll('.sec');

    hours = hours.toString();
    hrs[0].innerHTML = hours[0];
    hrs[1].innerHTML = hours[1];

    seconds = seconds.toString();
    sec[0].innerHTML = seconds[0];
    sec[1].innerHTML = seconds[1];

    minutes = minutes.toString();
    min[0].innerHTML = minutes[0];
    min[1].innerHTML = minutes[1];
    console.log(hrs[0]);
    console.log(hrs[1]);

}


setInterval(runClock,1000);