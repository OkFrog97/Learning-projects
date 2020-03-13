function every (m, pred) {
    for (let el in m) {
        if (pred(el)==false) return false;
    }
    return true;
}

let a = [1, 2, 3, 4, 5];

//return false
console.log(every(a, el => el % 2 == 0));