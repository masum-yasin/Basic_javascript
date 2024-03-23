
    // function number (n) {
    //     return n
    //  }
//    let number =  (m,n)=> m+n;
    
//      console.log(number(30,20));
var javascript =  {
    name: "javascript",
    labraries: ["React","Angular","vue"],
    printLibraries: function(){
    //   
        this.labraries.forEach((a)=>
            console.log(`${this.name} loves ${a}`)
        )
    }
} 
javascript.printLibraries();