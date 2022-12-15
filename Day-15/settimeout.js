
const mytimoutfunciton = function() {
    console.log("Hello I am timeout 🕐")
}

const timeOutExample = setTimeout(mytimoutfunciton, 5000);

// program to display time every 3 seconds
function showTime() {

    // return new date and time
    let dateTime= new Date();
    console.log (number);


    // returns the current local time
    let time = dateTime.toLocaleTimeString();

    console.log(time);


    // display the time after 3 seconds
    setTimeout(showTime, 3000);

}

// calling the function
showTime();