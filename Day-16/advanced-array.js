let numbers = [1 ,2 , 3, 4, 5, 10]


function square (number)
{
    return number ** 2;
}


let squareOfNumber = numbers.map(function (i) {
    return i * i;
});

console.log(squareOfNumber);

let cubeOfNumbers = numbers.map((number) => {
    return number ** 3
})

console.log(squareOfNumber)
console.log(cubeOfNumbers)


let someRandomNumbers = [1, 10, 25, 3, 15, 22, 33, 20, 11, 8]

let filteredEvenNumbers = someRandomNumbers.filter( (number) => {
    // return true;

    if ( number % 2 == 0) {
        return true;
    }
    // return number % 2 == 0
})


console.log("Filtered Numbers", filteredEvenNumbers);



let myFuncttion = (total, currNumber, index, arr) => {
    console.log(index);
    // return total + 1;
    return total + currNumber;
}

let sumOfNumbers = someRandomNumbers.reduce(myFuncttion, 0)


console.log('sum of all numbers is', sumOfNumbers)

// //realistic examples

const COMPLETE = true;
const NOT_COMPLETE = false;
const tasks =[
    {'task': "Learn Basic of JS", 'status': COMPLETE},
    {'task': "Learn Array", 'status': COMPLETE},
    {'task': "Learn Php", 'status': NOT_COMPLETE},
    {'task': "Learn Python", 'status': COMPLETE},
    {'task': "Learn DSA", 'status': NOT_COMPLETE},
]

const completedTask = tasks.filter((task) => {
    if (task.status == NOT_COMPLETE) 
    {
        return true;

    }
})

console.log(completedTask)
console.log(completedTask.length)