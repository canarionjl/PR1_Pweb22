/* jshint esversion: 6 */
/* jshint browser: true */

function setIntervalTimer(TimeHandler, timeRepeat, timeEnd){
    var interval = setInterval(TimeHandler, timeRepeat);
    setTimeout(()=>{
        window.clearInterval(interval);
    },timeEnd);
}
function buton1click(){
    document.getElementById('textarea').value += document.getElementById('text-1').value+"\n";
}
function buton2click(){
    var text2 = parseInt(document.getElementById('text-2').value);
    if(61 > text2 && text2 > 0){
        setIntervalTimer(buton1click,1000,text2*1000);
    }else{
        alert(text2+ ' no es un número o no está entre 1 y 60 ');
    }
}

function buton3click(){
    document.getElementById('button2').style = document.getElementById('text-1').value;
}


