// If you want the pop-up box to disappear when you move the mouse away
document.querySelector('.whatsapp-box').addEventListener('mouseleave', function() {
    document.querySelector('.qr-popup').style.display = 'none';
    });
    
    
    
    //query popup box 
    function showPopup(event) {
      event.preventDefault(); // Prevents form submission
    
      // Show the popup
      var popup = document.getElementById("query-popup");
      popup.style.display = "block";
    }
    
    function hidePopup() {
      // Hide the popup
      var popup = document.getElementById("query-popup");
      popup.style.display = "none";
    }
    
    
    
    
           
    
    
    
            