function myFunction() {
    const inpobj = document.getElementById("Όνομα");
    const message = document.getElementById("message");  
    if (!inpobj.checkvalidity()) {
        message.innerHTML = inpobj.validationMessage;
    }else{
        message.innerHTML = "Input Ok";
    }    

    

}