//
const names = ["jane", 'Joe', 'Julia', 'Horrace'] //mutable => changeable





console.log(names);

names.push('Amid')

const name = names.pop()
console.log(name)


We cannot do this since this is const
names = ['Messi', 'Mbappe'];


console.log(names);


console.log(names);

let name = names.pop();

console.log(name)
console.log(names);



const person = [];
person["firstName"] = "John";
person["lastName"] = "Doe";
person["age"] = 18;

console.log(person)
console.log(person.firstName)
// console.log(person["lastname"])

let isPersonArray  =Array.isArray(person);
let anotherWay = person instanceof Array;

console.log(isPersonArray)
console.log(anotherWay)

console.log("this is joinging", nameJoins )

console.log("Is joe in the array", names.includes('Joe'))
console.log("Is John in the array", names.includes('John'))
console.log("Sorted", names.sort())

let nameJoins = names.join( ' and ');

console.log(nameJoins);
