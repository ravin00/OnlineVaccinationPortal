
  // Function to handle form submission
  function handleFormSubmit(event) {
    event.preventDefault(); // Prevent the form from submitting and refreshing the page
  
    // Get the form inputs
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var nic = document.getElementById('NIC').value;
    var vaccineType = document.getElementById('vaccine-type').value;
    var appointmentDate = document.getElementById('date').value;
  
    // Reset the form inputs
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('NIC').value = '';
    document.getElementById('vaccine-type').selectedIndex = 0;
    document.getElementById('date').value = '';
  }
  
  // Function to scroll to a specific section
  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
  }
  
  // Add event listener to the form submit event
  document.querySelector('form')?.addEventListener('submit', handleFormSubmit);
  

  //fuctions scroll the page to back to top
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  //knowing when the user reaches the end of the screen
  window.onscroll = () =>{
    if(window.innerHeight + window.scrollY >= document.body.offsetHeight){
     console.log("You are end of the page")
    }
  }

  //Taking the user back to top
  const toTop = () => window.scroll({top:0,behavior:'smooth'});

 