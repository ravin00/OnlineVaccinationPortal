function validateForm() {
    var docName = document.getElementById("doc_name").value;
    var visCenter = document.getElementById("vis_center").value;
    var visDate = document.getElementById("vis_date").value;
    var visTime = document.getElementById("vis_time").value;
    var vacAvail = document.getElementById("vac_avail").value;

    // Perform form validation checks here
    // Example validation: Check if required fields are empty
    if (docName === "" || visCenter === "" || visDate === "" || visTime === "" || vacAvail === "Choose") {
        alert("Please fill in all the required fields.");
        return false; // Prevent the form from being submitted
    }

    

    return true; // Allow the form to be submitted
}