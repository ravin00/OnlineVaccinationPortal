function validateForm() {
    var firstName = document.getElementById('first_name').value;
    var lastName = document.getElementById('last_name').value;
    var phone = document.getElementById('phone').value;
    var date = document.getElementById('date').value;
    var vaccineType = document.getElementById('vaccine-type').value;
    var facName = document.getElementById('fac_name').value;
    var address = document.getElementById('address').value;

    var errors = [];

    if (firstName.trim() === '') {
      errors.push('First name is required.');
    }
    if (lastName.trim() === '') {
      errors.push('Last name is required.');
    }
    if (phone.trim() === '') {
      errors.push('Phone number is required.');
    }
    if (date.trim() === '') {
      errors.push('Please choose a date.');
    }
    if (vaccineType === 'Choose') {
      errors.push('Please choose a vaccine type.');
    }
    if (facName.trim() === '') {
      errors.push('Facility name is required.');
    }
    if (address.trim() === '') {
      errors.push('Address is required.');
    }

    // Display the error messages
    if (errors.length > 0) {
      var errorString = errors.join('\n');
      alert(errorString);
      return false;
    }

    return true;
  }