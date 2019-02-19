// JavaScript Document

function menuAnimate() {
    var x = document.getElementById("navbar");
    if (x.className === "menu") {
        x.className = "menu responsive";
    }
    else {
        x.className = "menu";
    }
    var y = document.getElementById("changeMenu");
    if (y.className === "fa fa-bars"){
        y.className = "fa fa-times";
    }
    else {
        y.className = "fa fa-bars";
    }
}

function getEventAmount() {

    var eventAmount = document.getElementById("formEvent").value;

    if (eventAmount === "Poster Presentation") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 300.";
    }
    if (eventAmount === "Paper Presentation") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 300.";
    }
    if (eventAmount === "CAD Ovation") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 150.";
    }
    if (eventAmount === "Quickfix") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 300.";
    }
    if (eventAmount === "Logiq") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 100.";
    }
    if (eventAmount === "Civiq.") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 300.";
    }
    if (eventAmount === "It's Debatble") {
        document.getElementById("showEventAmount").innerHTML = "Amount to be paid for the event is Rs. 200.";
    }
    if (eventAmount === "Prototypical") {
        document.getElementById("showEventAmount").innerHTML = "No entry fee for this event.";
    }
    if (eventAmount === "None") {
        document.getElementById("showEventAmount").innerHTML = "";
    }
}

function getWorkshopAmount(){
    
    var workshopAmount = document.getElementById("formWorkshop").value;
    
    if (workshopAmount === "E-TABS") {
        document.getElementById("showWorkshopAmount").innerHTML = "Amount to be paid for the workshop is Rs. 1000."
    }
    if (workshopAmount === "BIM-REVIT") {
        document.getElementById("showWorkshopAmount").innerHTML = "Amount to be paid for the workshop is Rs. 1000."
    }
    if (workshopAmount === "None") {
        document.getElementById("showWorkshopAmount").innerHTML = ""
    }
}

var countDownDate = new Date("March 13, 2019 10:00:00").getTime();
var z = setInterval(function() {
var now = new Date().getTime();
var distance = countDownDate - now;
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("countTimer").innerHTML ="Just " + days + "d " + hours + "h "
+ minutes + "m " + seconds + "s " + "till the fest.";

if (distance < 0) {
clearInterval(z);
document.getElementById("countTimer").innerHTML = "Almost, ready to reveal";
}
}, 1000);