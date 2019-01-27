// JavaScript Document

function menuAnimate(){
    var x = document.getElementById("navbar");
    if(x.className === "menu"){
        x.className += " responsive";
    }
    else {
        x.className = "menu";
    }
    var y = document.getElementById("changeMenu");
    if(y.className === "fa fa-bars"){
        y.className = "fa fa-times";
    }
    else {
        y.className = "fa fa-bars";
    }
}

window.onscroll = function() {scrollMenu()};

function scrollMenu() {
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("container").style.top = "0px";
    } else {
    document.getElementById("container").style.top = "-100px";
    }
}