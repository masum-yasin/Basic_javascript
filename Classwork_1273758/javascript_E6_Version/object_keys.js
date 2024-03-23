var x = 5;
var y = 10;

var myobj = {
    name : "Javascript",
    estd : 1995,
    founded:"Brenden",
    ranking:"1",
    level : "High Level Language",
    x:x,
    y:y,
    z: x * y,
}
// var value = Object.values(myobj)
// console.log(value);
// var keys = Object.keys(myobj);
// console.log(keys);
var totalresult = Object.entries(myobj);
console.log(totalresult);
