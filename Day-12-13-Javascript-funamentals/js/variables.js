/*
๐ Lesson #5 Learning Variables 
*/

//delaring variables.

// var a = 10 // We dont use var but it still works
// const pi = 3.1416
// let height = 10
// let weight
// weight = 12.5
// let pi = 44 // Can't do this ๐จ๐จ๐จ โ

// let 5๐๐๐ = "No emojis in variable declartion "
// let this_is_a_variable = "This is snake case declaration style"
// let camelCaseVariable = "This is camel case variable declaration style"

let speedOfLight = 3.0e8; //" 3 X 10 ^ 8 m/s"
console.log("The speed of โกโกโก  is ", speedOfLight);

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
 * ๐จ๐จ๐จ๐จ๐จ๐จ
 * In javascript everything is Object In JavaScript, 
 * almost "everything" is an object.
 * ๐จ๐จ๐จ๐จ๐จ๐จ
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

console.log ("โฉ Type of thisIsJSON  ๐" , typeof(thisIsJSON))
console.log ("โฉ Type of firstThreeMonthArray ๐ " , typeof(firstThreeMonthArray))
console.log ("โฉ Type of youAreDumb ๐ " , typeof(youAreDumb))
console.log ("โฉ Type of studyCourse ๐ " , typeof(studyCourse))
console.log ("โฉ Type of speedOfLight ๐ " , typeof(speedOfLight))
console.log ("โฉ Type of myGrade ๐ " , typeof(myGrade))
console.log ("โฉ Type of iDontKnow ๐ " , typeof(iDontKnow))
console.log ("โฉ Type of orphanVariable ๐ " , typeof(orphanVariable))
console.log ("โฉ Type of emptyObject ๐ " , typeof(emptyObject))


/****
๐ Booleans can be objects (if defined with the new keyword)
๐ Numbers can be objects (if defined with the new keyword)
๐ Strings can be objects (if defined with the new keyword)
๐ Dates are always objects
๐ Maths are always objects
๐ Regular expressions are always objects
๐ Arrays are always objects
๐ Functions are always objects
๐ Objects are always objects
**************************************************************
*/

let objNumber = new Number(3.5);
let objString = new String("This is a String Object not a primitive data type");

console.log ("๐  objNumber == myGrade " , objNumber == myGrade)

// console.log ("JS is crazy๐คช๐คช๐คช")

console.log ("๐  objNumber === myGrade " , objNumber === myGrade)

console.log ("โฉ Type of objNumber ๐ " , typeof(objNumber))
console.log ("โฉ Type of objString ๐ " , typeof(objString))

// console.log("Find the difference")
// console.log ("This is inside a quote ๐ objNumber ")
// console.log (`This is inside backtick ๐ ${objNumber}`)



