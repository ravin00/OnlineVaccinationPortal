// Function to scroll back to the top of the page
function toTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  
  // Event listener for the form submission
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var NIC = document.getElementById('NIC').value;
    var phone = document.getElementById('phone').value;
    var vaccineType = document.getElementById('vaccine-type').value;
    var date = document.getElementById('date').value;

    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('NIC').value = '';
    document.getElementById('vaccine-type').selectedIndex = 0;
    document.getElementById('date').value = '';
  
    // Perform form validation (you can add more validation if needed)
    if (name === '' || email === '' || NIC === '' || phone === '' || vaccineType === '' || date === '') {
      alert('Please fill in all fields.'); // Display an error message
      return; // Stop further execution
    }
  
    // Create an object to store the form data
    var formData = {
      name: name,
      email: email,
      NIC: NIC,
      phone: phone,
      vaccineType: vaccineType,
      date: date
    };
  

    // Display a success message
    alert('Form submitted successfully!');
    // Redirect to a different HTML page
window.location.href = 'appointmentDisplay.php';

  });
  
  // Function to scroll to the top of the page when the "Back to Top" button is clicked
  function toTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  