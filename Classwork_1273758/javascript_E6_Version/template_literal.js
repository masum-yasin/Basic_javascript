//  var str = "She is a famous person";
//  var str2 = "Karum is a Lazy Person";
//  var a = 10;
//  var b = 5;
//  console.log(`${str} and 
//  ${str2}
//  ${a+b}`);
//tag template literal//
var player1 ="sakib";
var player2 = "Tamim";
function modifiers(string,...value){
    const m =string.reduce((prev,current) => {
        return prev + current+(value.lenght)? "Mr."+value.shift(): ""
    },"")
}


console.log(`We have ${player1} and ${player2} in our Cricket Team`);