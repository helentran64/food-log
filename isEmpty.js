function isEmpty(){
    if (document.forms["userRegistration"].name.value == ""){
        document.getElementById("errorMessage").innerHTML = "please enter your name";
        return false;
    }
    else{
        return true;
    }
}

function isLogEmpty(){
    if (document.forms["foodLog"].foodName.value == ""){
        document.getElementById("foodNameErrorMessage").innerHTML = "please enter the name of the food";
        return false;
    }
    else{
        return true;
    }
}