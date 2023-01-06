const time = new Date().getHours();
const welcomeMessages = ["Good morning,", "Good afternoon,", "Good evening,"];

let welcome = "";

if (time < 12){ 
    welcome = welcomeMessages[0];
}
else if (time < 18){ 
    welcome = welcomeMessages[1];
}
else{
    welcome = welcomeMessages[2];
    console.log("hello")
}