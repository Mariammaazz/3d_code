$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

var count=0;
function swap(selected){
    document.getElementById("coketab").style.display="none";
    document.getElementById("fantatab").style.display="none";
    document.getElementById("spritetab").style.display="none";

    document.getElementById(selected).style.display="block";
}
function swap3d(selected){
    document.getElementById("coke3d").style.display="none";
    document.getElementById("fanta3d").style.display="none";
    document.getElementById("sprite3d").style.display="none";

    document.getElementById(selected).style.display="block";
    document.getElementById("model_text").innerHTML= convertToUpper(selected) + " Can 3D Model Displays Here"
}

function convertToUpper(text){
    text = text.slice(0,-2);
    var newstring=text.charAt(0).toUpperCase() + text.substr(1).toLowerCase();
    return newstring;
}

function changeLook(){
    document.getElementById('theme').style.backgroundColor='#770000';
    document.getElementById('theme').style.fontFamily= "arial,sans-serif";
    document.getElementById('theme').style.color="white";

}
function countUp(){
    count+=1;
    document.getElementById("result").innerHTML=count;
}
function countDown(){
    if(count!==0){
        count-=1;
        document.getElementById("result").innerHTML=count;
    }else{
        document.getElementById("result").innerHTML=0;
    }
    
}
function changeColor(newColor){
    var elem=document.getElementById("para1");
    elem.style.color=newColor;
}
