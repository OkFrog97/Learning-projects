function userRange (start, end) {
    let rangeMas = [];
    for (let i = start; i <= end; i++) {
        rangeMas.push(i);
    }
    return rangeMas;
}

function userSum (numbers) {
    let sum = 0;
    for (let number of numbers){
        sum += number;
    }
    return sum;   
}

console.log(userSum(userRange(1, 10)));

function userRangeWithSteps (start, end, step = 1){
    let rangeMas = [];
    for (let i = start; i <= end; i += step) {
        rangeMas.push(i);
    }
    return rangeMas;
}
