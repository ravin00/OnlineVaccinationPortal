function validateForm() {
    var first_name = document.forms["orderForm"]["first_name"].value;
    var last_name = document.forms["orderForm"]["last_name"].value;
    var phone = document.forms["orderForm"]["phone"].value;
    var date = document.forms["orderForm"]["app_date"].value;
    var vac_type = document.forms["orderForm"]["vac_type"].value;
    var fac_name = document.forms["orderForm"]["fac_name"].value;
    var address = document.forms["orderForm"]["address"].value;

    var errors = [];

    if (first_name === "") {
        errors.push("First name is required.");
    }
    if (last_name === "") {
        errors.push("Last name is required.");
    }
    if (phone === "") {
        errors.push("Phone number is required.");
    }
    if (date === "") {
        errors.push("Please choose a date.");
    }
    if (vac_type === "Choose") {
        errors.push("Please choose a vaccine type.");
    }
    if (fac_name === "") {
        errors.push("Facility name is required.");
    }
    if (address === "") {
        errors.push("Address is required.");
    }

    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }

    return true;
}