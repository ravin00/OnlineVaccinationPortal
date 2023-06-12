const validateLogin = () => 
{
    let loginError = document.getElementById("loginError");
    let email = document.getElementById("email").value;
    let atSign = email.indexOf("@"), dot = email.lastIndexOf(".");
    let loginPassword = document.getElementById("loginPassword").value;
    if (atSign < 1 || dot < atSign + 2 || dot + 2 >= email.length) {
        loginError.innerHTML = "Enter a valid email";
        return false;
    }
    if (loginPassword == null || loginPassword == "") {
        loginError.innerHTML = "Enter password";
        return false;
    }
    return true;
}