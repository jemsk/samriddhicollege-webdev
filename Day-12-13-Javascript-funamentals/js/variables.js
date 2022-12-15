/*
📗 Lesson #5 Learning Variables 
*/

//delaring variables.

// var a = 10 // We dont use var but it still works
// const pi = 3.1416
// let height = 10
// let weight
// weight = 12.5
// let pi = 44 // Can't do this 🚨🚨🚨 ❌

// let 5👆💀👊 = "No emojis in variable declartion "
// let this_is_a_variable = "This is snake case declaration style"
// let camelCaseVariable = "This is camel case variable declaration style"

let speedOfLight = 3.0e8; //" 3 X 10 ^ 8 m/s"
console.log("The speed of ⚡⚡⚡  is ", speedOfLight);

let yearToday = 2022; // this is integer number
let myGrade = 3.5; // Float number
let studyCourse = "Javascript"; // String
let firstThreeMonthArray = ["Jan", "Feb", "March"]; // array
// console.log("This is array ", firstThreeMonthArray);

let youAreSmart = true; //Boolean
let youAreDumb = false; //Boolean
let thisIsNull = null; //null
let iDontKnow = undefined; //undefined
let emptyObject = {};
let orphanVariable ;
// console.log(orphanVariable)


/************************************************************* 
 * 🚨🚨🚨🚨🚨🚨
 * In javascript everything is Object In JavaScript, 
 * almost "everything" is an object.
 * 🚨🚨🚨🚨🚨🚨
 * **/


let secondThreeMonthArray = Array("April", "May", "June"); // array again

console.log("This is array as well", secondThreeMonthArray);

let thisIsJSON = { "First 3 Months": firstThreeMonthArray
, "Second 3 Months": secondThreeMonthArray
};

let person = {

    'name': "Jane Doe",
    'age' : 25
}

console.log ("This is JSON - JavaScript Object Notation - OBJECT")
// console.log ( thisIsJSON)

console.log ("⏩ Type of thisIsJSON  👉" , typeof(thisIsJSON))
console.log ("⏩ Type of firstThreeMonthArray 👉 " , typeof(firstThreeMonthArray))
console.log ("⏩ Type of youAreDumb 👉 " , typeof(youAreDumb))
console.log ("⏩ Type of studyCourse 👉 " , typeof(studyCourse))
console.log ("⏩ Type of speedOfLight 👉 " , typeof(speedOfLight))
console.log ("⏩ Type of myGrade 👉 " , typeof(myGrade))
console.log ("⏩ Type of iDontKnow 👉 " , typeof(iDontKnow))
console.log ("⏩ Type of orphanVariable 👉 " , typeof(orphanVariable))
console.log ("⏩ Type of emptyObject 👉 " , typeof(emptyObject))


/****
👉 Booleans can be objects (if defined with the new keyword)
👉 Numbers can be objects (if defined with the new keyword)
👉 Strings can be objects (if defined with the new keyword)
👉 Dates are always objects
👉 Maths are always objects
👉 Regular expressions are always objects
👉 Arrays are always objects
👉 Functions are always objects
👉 Objects are always objects
**************************************************************
*/

let objNumber = new Number(3.5);
let objString = new String("This is a String Object not a primitive data type");

console.log ("👉  objNumber == myGrade " , objNumber == myGrade)

// console.log ("JS is crazy🤪🤪🤪")

console.log ("👉  objNumber === myGrade " , objNumber === myGrade)

console.log ("⏩ Type of objNumber 👉 " , typeof(objNumber))
console.log ("⏩ Type of objString 👉 " , typeof(objString))

// console.log("Find the difference")
// console.log ("This is inside a quote 👉 objNumber ")
// console.log (`This is inside backtick 👉 ${objNumber}`)



