const btnStart = document.querySelector('.start');
const btnStop = document.querySelector('.stop');
const btnReset = document.querySelector('.reset');

let hrs = min = sec = ms = 0,startTimer;

btnStart.addEventListener('click',()=>{

        btnStart.classList.add('start-active');
        btnStop.classList.remove('stop-active');

    startTimer=setInterval(()=>{
        ms++;
        if(ms==100){
            sec++;
            ms=0;
        }
        if(sec==60){
            min++;
            sec=0;
        }
        if(min==60){
            hrs++;
            min=0;
        }
        
        updateDisplay();
    },10);
});

btnStop.addEventListener('click',()=>{
    clearInterval(startTimer);
    btnStart.classList.remove('start-active');
    btnStop.classList.add('stop-active');

});

btnReset.addEventListener('click',()=>{
    hrs = min = sec = ms = 0;
    clearInterval(startTimer);
    updateDisplay();
    btnStart.classList.remove('start-active');
    btnStop.classList.remove('stop-active');
});

function updateDisplay(){
    // formatted display
    let phrs=hrs<10?'0'+hrs:hrs;
    let pmin=min<10?'0'+min:min;
    let psec=sec<10?'0'+sec:sec;
    let pms=ms<10?'0'+ms:ms;
    // output
    document.querySelector('.hrs').innerText=phrs;
    document.querySelector('.min').innerText=pmin;
    document.querySelector('.sec').innerText=psec;
    document.querySelector('.ms').innerText=pms;
}