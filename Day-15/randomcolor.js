function randomize (range) {
    return Math.floor(Math.random()* range)
}

const colors = [
    "red",
    "green",
    "#ccaacc", //hexcode
    'teal',
    'black',
    'white',
    'orange',
    'pink',
    'blue',
    '#ccc' //hexcode
];

let myRandomColor = colors[randomize(colors.length - 1)]
console.log("This is my random color", myRandomColor)