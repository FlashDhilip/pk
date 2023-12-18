function populateCities() {
  var stateDropdown = document.getElementById("state");
  var cityDropdown = document.getElementById("city");

  // Clear previous cities
  cityDropdown.innerHTML = "";

  // Get selected state
  var selectedState = stateDropdown.value;

  // Use a switch or if-else statements to populate cities based on the selected state
  switch (selectedState) {
    case "Select State":
      addCityOption("Select City");
      break;
    case "Tamilnadu":
      addCityOption("Select city"); 
      addCityOption("Chennai");
      addCityOption("Coimbatore"); 
      addCityOption("Madurai");
      addCityOption("Trichy"); 
      addCityOption("Dindigul");
      addCityOption("Karur"); 
      addCityOption("Theni");  
      break;
    case "Kerala":
      addCityOption("Select city"); 
      addCityOption("Thiruvananthapuram");
      addCityOption("Kochi"); 
      addCityOption("Kozhikode"); 
      addCityOption("Thrissur"); 
      break;
    case "Karnataka":
      addCityOption("Select city"); 
      addCityOption("Bengaluru"); 
      addCityOption("Mysuru"); 
      addCityOption("Kozhikode"); 
      addCityOption("Thrissur"); 
      break;
    // Add more cases for other states
  }
}

function addCityOption(cityName) {
  var cityDropdown = document.getElementById("city");
  var option = document.createElement("option");
  option.value = cityName;
  option.text = cityName.charAt(0).toUpperCase() + cityName.slice(1);
  cityDropdown.add(option);
}

// Initial population of cities based on default state selection
populateCities();  

//zip code
    function validateZipCode() {
        let zipCodeInput = document.getElementById('zipCodeInput');
        let zipCodeError = document.getElementById('zipCodeError');
        
        if (zipCodeInput.value.length > 6) {
          zipCodeInput.value = zipCodeInput.value.slice(0, 6);
          zipCodeError.textContent = 'Maximum length is 6 digits.';
        } else {
          zipCodeError.textContent = '';
        }
      }
//date DISABLE IN FUTURE
      const incident= document.getElementById('incident');
    
      incident.addEventListener('input', function () {
      const selectedDate = new Date(this.value);
      const today = new Date();

      if (selectedDate > today) {
        alert('Please select a date in the past or today.');
        this.value = ''; // Clear the input field
      }
    });
//date DISABLE IN PAST
    const datePicker = document.getElementById('datePicker');
    
    datePicker.addEventListener('input', function () {
    const selectedDate = new Date(this.value);
    const today = new Date();

    if (selectedDate < today) {
      alert('Please select a date in the future or today.');
      this.value = ''; // Clear the input field
    }
  });
