const searchinput = document.querySelector(".search");
const display   = document.querySelector(".result");
const thanks  = document.querySelector(".thanks");




function show(){
 display.innerHTML = this.value;
 var self = this
 setTimeout(function(){
    thanks.innerHTML = `you have typed: ${self.value}`;
 },1000)
}
searchinput.addEventListener("keyup",show)