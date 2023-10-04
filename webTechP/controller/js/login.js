function validation() {
    
    //Retrieving html element
    const email = document.getElementById("email");
    const password = document.getElementById("password");

    checkData();
    //implementing functrion to validate field
    function checkData() {
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();

        //validation for email
        if (emailValue == "") {
            setError(email, "Email can't be blank");
        } else if (!isEmail(emailValue)) {
            setError(email, "Email is not valid");
        }
        else {
            setSuccess(email);
        }

        //validation for password
        if (passwordValue == "") {
            setError(password, "Password can't be blank");
        }
        else {
            setSuccess(password);
        }

    }

    //adding html and css property to the username input field  to make the validation more understandable
    function setError(input, msg) {
        const parentBox = input.parentElement;
        //replacing input_field class to error
        parentBox.className = "input_field error";
        //adding error message
        const message = parentBox.querySelector("small");
        message.innerText = msg;
        //adding error icon
        const icon = parentBox.querySelector(".fa-exclamation-circle");
        icon.style.visibility = "visible";


    }
    //adding html and css property to the username input field to make the validation more understandable
    function setSuccess(input) {
        const parentBox = input.parentElement;
        parentBox.className = "input_field success";
        //removing previously added error message
        const message = parentBox.querySelector("small");
        message.innerText = "";
        //removing previously added error icon
        const icon1 = parentBox.querySelector(".fa-exclamation-circle");
        icon1.style.visibility = "hidden";
        //adding success icon
        const icon2 = parentBox.querySelector(".fa-check-circle");
        icon2.style.visibility = "visible";


    }

    //email validation using regular expression
    function isEmail(e) {
        var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return filter.test(e);
    }

}
