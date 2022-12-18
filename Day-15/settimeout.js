
const mytimeoutfunction = function() {
    console.log("Hello I am timeout 🕐")
}

setTimeout(mytimeoutfunction, 5000); //5 sec

// mytimeoutfunction();
// program to display time every 3 seconds
function showTime() {

    // return new date and time
    let dateTime= new Date();


    // returns the current local time
    let time = dateTime.toLocaleTimeString();

    console.log(time);


    // display the time after 3 seconds
    setTimeout(showTime, 1000);

}

// calling the function
showTime();
