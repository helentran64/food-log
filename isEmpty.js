function isEmpty(){
    if (document.forms["userRegistration"].name.value == ""){
        document.getElementById("errorMessage").innerHTML = "please enter your name";
        return false;
    }
    else{
        return true;
    }
}