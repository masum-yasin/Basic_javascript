// for(var i =1; i<20; i++){
//     console.log(i);
//     if(i>10){
//         break;
//     }
// }
// var numbers = 0;
// while(numbers<20){
//     console.log('please give me even number');
//     numbers++;
//     if(numbers> 4){
//         break;
//     }
// }
// var numbers = [45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 110, 120]
//  for(var i =0; i<numbers.length; i++){
//     var number = numbers[i]
//     if(number>100){
//         break;
//     }
//     console.log(number);
//  }
var numbers = [45, 50, 60, 65, 75, 80, 85, 90, 100, 105, ]
for(var i = 0; i<numbers.length; i++){
    var number = numbers[i];
    if(number>50){
        continue;
    }
    console.log(number);
}
