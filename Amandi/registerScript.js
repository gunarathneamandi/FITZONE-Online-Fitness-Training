function showPopup(event) {
    event.preventDefault(); // Prevents form submission
  
    // Show the popup
    var popup = document.getElementById("popup");
    popup.style.display = "block";
  }
  
  function hidePopup() {
    // Hide the popup
    var popup = document.getElementById("popup");
    popup.style.display = "none";
  }



  //dob validations
  function getAge(dob) {
    var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }    
    return age;
}
  