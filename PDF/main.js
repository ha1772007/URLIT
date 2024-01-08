var i = 1;
var data = {
    added: true
};

function clickAndLoad() {
    if(i < 11){
        data[i] = document.getElementsByClassName('text-sm font-medium unselectable')[0].getElementsByTagName('span')[0].innerHTML;
        document.getElementsByClassName('Button_root__KTqL7 Button_secondary__a4QEU w-52')[0].click();
        i++;
        setTimeout(clickAndLoad, 1000); // Wait for 1 second before next iteration
    } else {
        console.log(data);
    }
}

clickAndLoad();






var i = 1;
var data = {
    added: true
};

function clickAndLoad() {
    if(i < 11){
        data[i] = document.getElementsByClassName('text-base font-medium mobile:text-sm unselectable')[0].getElementsByTagName('div')[0].innerHTML;
        var ans= 1;
        while(ans<5){
        data[i] = data[i] + ' <br>' + i+ ' ' + document.getElementsByClassName('flex  items-center py-3 px-4 rounded border')[i].getElementsByClassName('text-[#575757] mobile:text-sm')[0].getElementsByTagName('div')[0].innerHTML;
            ans++;
        }

        if(i<10){
        document.getElementsByClassName('Button_primary__F_0jY w-52')[0].click();
        }
        i++;
        setTimeout(clickAndLoad, 2000); // Wait for 1 second before next iteration
    } else {
        console.log(data);
    }
}

clickAndLoad();


// Here is some text
var i = 1;
var data = {
    added: true
};

function clickAndLoad() {
    if(i < 11){
        data[i] = document.getElementsByClassName('text-base font-medium mobile:text-sm unselectable')[0].getElementsByTagName('div')[0].innerHTML;
        var ans= 0;
        while(ans<4){
        data[i] = data[i] + ' <br>' + i+ ' ' + document.getElementsByClassName('flex  items-center py-3 px-4 rounded border')[ans].getElementsByClassName('text-[#575757] mobile:text-sm')[0].getElementsByTagName('div')[0].innerHTML;
            ans++;
        }

        if(i<10){
        document.getElementsByClassName('Button_primary__F_0jY w-52')[0].click();
        }
        i++;
        setTimeout(clickAndLoad, 3000); // Wait for 1 second before next iteration
    } else {
        console.log(data);
    }
}

clickAndLoad();







Final Code

var i = 1;
var data = {
    added: true
};

function clickAndLoad() {
    if(i < 11){
        data[i] = document.getElementsByClassName('text-base font-medium mobile:text-sm unselectable')[0].getElementsByTagName('div')[0].innerHTML;
        var ans= 0;
        while(ans<4){
        data[i] = data[i] + ' <br>' + (parseInt(ans) + 1).toString() + '. ' + document.getElementsByClassName('flex  items-center py-3 px-4 rounded border')[ans].getElementsByClassName('text-[#575757] mobile:text-sm')[0].getElementsByTagName('div')[0].innerHTML;
            ans++;
        }

        if(i<10){
        document.getElementsByClassName('Button_primary__F_0jY w-52')[0].click();
        }
        i++;
        setTimeout(clickAndLoad, 3000); // Wait for 1 second before next iteration
    } else {
        console.log(data);
    }
}

clickAndLoad();