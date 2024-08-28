window.addEventListener('DOMContentLoaded', (event) => {
  // Check if the browser supports Local Storage and if data is available
  if (typeof(Storage) !== 'undefined' && localStorage.getItem('formData')) {
    const formData = JSON.parse(localStorage.getItem('formData'));

    // Auto-fill form fields with saved data
    document.getElementById('fullname').value = formData.fullname;
    document.getElementById('email').value = formData.email;
    document.getElementById('phone').value = formData.phone;
    document.getElementById('address').value = formData.address;
    document.getElementById('gender').value = formData.gender;
    document.getElementById('dob').value = formData.dob;
  }
});

function goBack() {
  // Go back to the previous page
  window.history.back();
}

document.getElementById('registrationForm').addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent the form from submitting

  // Get form data
  const fullname = document.getElementById('fullname').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const address = document.getElementById('address').value;
  const gender = document.getElementById('gender').value;
  const dob = document.getElementById('dob').value;

  // Create an object to store form data
  const formData = {
    fullname,
    email,
    phone,
    address,
    gender,
    dob
  };

  // Save form data to Local Storage
  if (typeof(Storage) !== 'undefined') {
    localStorage.setItem('formData', JSON.stringify(formData));
  }

  // Submit the form
  document.getElementById('registrationForm').submit();
});
