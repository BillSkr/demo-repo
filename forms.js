function myFunction() {
    
    let valid = true;
    const form = document.getElementById("Όνομα");
    const message = document.getElementById("message");  

    inputs.forEach(input => {
        if (!input.checkvalidity()) {
            message.innerHTML = input.validationMessage;
            valid = false;
            return false;
        }
    });

    if (valid) {
        message.innerHTML = "Input OK";
        form.submit();
    }
    
   

    

}