// var a =["sakib","Tamim","Rofiq"];
// var b = a;
// // a.push("Mahmudulla")
// a =[]
// console.log(a);
// console.log(b);
var language = {
    name:"javascript",
    estd:1995,
    title:"High Level Language",

}

var language2 ={...language};
language.founder = "Brendan Eich";
console.log(language);
console.log(language2);