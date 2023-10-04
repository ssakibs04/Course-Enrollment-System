// form.addEventListener("click", function (event) {
//     event.preventDefault();
//     checkData();
// });

//Retrieving html element
// const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const mobile = document.getElementById("mobile");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");


function validation() {

    checkData();
    //implementing functrion to validate field
    function checkData() {
        const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const mobileValue = mobile.value.trim();
        const passwordValue = password.value.trim();
        const cpasswordValue = cpassword.value.trim();

        //validation for username
        if (usernameValue == "") {
            setError(username, "Username can't be blank");
        } else {
            setSuccess(username);
        }
        //validation for email
        if (emailValue == "") {
            setError(email, "Email can't be blank");
        } else if (!isEmail(emailValue)) {
            setError(email, "Email is not valid");
        }
        else {
            setSuccess(email);
        }
        //validation for mobile
        if (mobileValue == "") {
            setError(mobile, "Mobile can't be blank");
        } else if (!isMobile(mobileValue)) {
            setError(mobile, "Mobile number is not valid");
        }
        else {
            setSuccess(mobile);
        }

        //validation for password
        if (passwordValue == "") {
            setError(password, "Password can't be blank");
        }
        else {
            setSuccess(password);
        }

        //validation for confirm password
        if (cpasswordValue == "") {
            setError(cpassword, "Password can't be blank");
        } else if (passwordValue !== cpasswordValue) {
            setError(cpassword, "Password does not matched");
        }
        else {
            setSuccess(cpassword);
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

    //mobile validation using regular expression
    function isMobile(m) {
        var pattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        return pattern.test(m);
    }
}
