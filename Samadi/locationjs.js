document.getElementById("locationForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var locationInput = document.getElementById("location").value;
    var resultDiv = document.getElementById("result");
    resultDiv.innerHTML = "Your location: " + locationInput;
    document.getElementById("location").value = ""; // Clear input field after submission
  });