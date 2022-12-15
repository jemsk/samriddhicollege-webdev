let arr = ['Jane', "joe", "jimmy"];



console.log(arr.length);

for (let i= 0; i< arr.length; i++)
{
    console.log('Vluae' , arr[i])
}

arr.forEach(function(item){
   
    console.log("Using foreach", item)
});


arr.forEach(
    (item) =>{
        console.log("using arrow operate", item)
    }
);


function parseItem(item)
{
    console.log(" PArseite", item);
}

arr.forEach(parseItem);

let colors = [
    {color:'red'},
    {color:'white'},
]