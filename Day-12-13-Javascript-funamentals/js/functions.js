function areaOfRectangle(length, breadth)
{
    return length * breadth;
}

let area = areaOfRectangle(10, 20);
console.log("Area of rectangle is ", area);

function ourOwnPowFunc(num, pow = 2)
{
    return num ** pow;
}

let elevenSquare = ourOwnPowFunc(11)
console.log("Eleven Power of Two is", elevenSquare)
console.log("Eleven Power of Three is", ourOwnPowFunc(11, 3))


function normalFunction()
{
    console.log ("🔥🔥🔥🔥")

}
normalFunction()
console.log(normalFunction, typeof(normalFunction));


let functionCanBeVariables = function () {
    console.log ("😕😮🥴🤪")
}


functionCanBeVariables()
console.log(functionCanBeVariables, typeof(functionCanBeVariables));



let arrowOperatorFunction = (length, breadth) => {
    console.log ("👨 Confusing.... 😕😕😕")

}
arrowOperatorFunction()
console.log(arrowOperatorFunction, typeof(arrowOperatorFunction));