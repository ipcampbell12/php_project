let my_val = 400;

const myArr = [1, 2, 3, 4, 5];

// pass by value
function changeVal(val) {
    return val += 10;
}


// assingns this updated value to a new spot in memory
const newVal = changeVal(my_val);

console.log(newVal);


//pass by reference
function changeValRef(arr, idx) {
    arr[idx] += 10;
}


changeValRef(myArr, 0);


// 1 should be changed to 11
console.log(myArr);