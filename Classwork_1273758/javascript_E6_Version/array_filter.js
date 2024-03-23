var num = [2,3,9,1,11,14,16,18,20];
var result = num.filter((currentValue,index,arr) => {
    console.log(index);
    console.log(arr);
    return currentValue > 11;
    ;
})
console.log(result);