function validateForm() {
    var nameVac = document.getElementById('vaccine-type').value;
    var typeVac = document.getElementById('choose-vaccine-type').value;
    var dosageVac = document.getElementById('dosage-of-vaccine').value;
    var nameComp = document.getElementById('name_comp').value;
  
    if (nameVac === 'Choose vaccine' || typeVac === 'Choose vaccine type' || dosageVac === 'Choose vaccine dosage' || nameComp.trim() === '') {
      alert('Please fill in all the required fields.');
      return false;
    }
  
    return true;
  }
  
  function toTop() {
    window.scrollTo(0, 0);
  }
  