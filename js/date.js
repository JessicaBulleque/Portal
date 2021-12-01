const dateDisplay = document.getElementById('date');
const timeDisplay = document.getElementById('time');


function getCurrentTime(){
    var time=new Date();
    var hour=time.getHours();
    var min=time.getMinutes();
    var h=time.getHours();
    var pe= '';

    if (hour >12){
        hour = hour-12;
    }

    if (hour == 0){
        hour = 12;
    }

    if (h >= 12 && h <= 23){
        pe='pm';
    }

    else if (h <= 11 && h == 24) {
        pe='am';
    }
    timeDisplay.innerText=hour+':'+ min+' '+pe;
}

function getCurrentDate(){
    var date=new Date();
    var month=date.getMonth();
    var day=date.getDate();
    var dayNum=date.getDay();

    var mosName=['Jan','Feb','Mar','Apr','May','June','Jul','Aug','Sept','Oct','Nov','Dec'];
    var dayName=['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    for (let i = 0; i < mosName.length; i++){
        if (i==month){
            for (let j = 0; j < dayName.length; j++){

                if (j == dayNum){
                    dateDisplay.innerText = mosName[i]+'. '+day+' ('+dayName[j]+')';
                }
            }
        }
    }
    
}

getCurrentTime();
setInterval(getCurrentTime, 1000);

getCurrentDate();
