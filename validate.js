function validate() {
    let name = document.getElementById("name").value, email = document.getElementById("email").value, password = document.getElementById("password").value, confirmPassword = document.getElementById("confirmPassword").value;
    let atSign = email.indexOf("@"), dot = email.lastIndexOf(".");
    let error = document.getElementById("error"), passwordConfirm = document.getElementById("passwordConfirm");
    
    if (name == null || name == "") {
        error.innerHTML = "Enter Name";
    }
    if (name == null || name == "")
    {
        error.innerHTML = "Enter a name";
        return false;
    }
    if (atSign < 1 || dot < atSign + 2 || dot + 2 >= email.length) {
        error.innerHTML = "Enter a valid email";
        return false;
    }
    if (password.length < 8) {
        error.innerHTML = "Must be at least 8 characters";
        return false;
    }
    if (password != confirmPassword) {
        passwordConfirm.innerHTML = "Passwords don't match";
        return false;
    }
    alert("Form submitted!");
    return true;
}