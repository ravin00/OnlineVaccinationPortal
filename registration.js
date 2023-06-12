
function validateRegistration() {
    // Retrieve form input values
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var country = document.getElementById("country").value;
    var vaccine = document.getElementById("vaccine").value;

    // Performs form validation
    if (firstName === "" || lastName === "" || email === "" || phoneNumber === "" || country === "" || vaccine === "") {
        alert("Please fill in all fields.");
        return false;
    }

    // Additional validation or form submission logic can be added here

    alert("Registration successful!");
    return true;
}