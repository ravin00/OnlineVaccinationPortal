function validateForm() {
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var phoneNum = document.getElementById("phone_num").value;
    var country = document.getElementById("country").value;
    var preVacTyp = document.getElementById("pre_vac_typ").value;

    // Perform form validation checks here
    if (firstName === "" || lastName === "" || email === "" || phoneNum === "" || country === "Choose" || preVacTyp === "Choose") {
        alert("Please fill in all the required fields.");
        return false; // Prevent the form from being submitted
    }


    return true; // Allow the form to be submitted
}