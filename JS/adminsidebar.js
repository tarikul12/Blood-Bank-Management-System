document.addEventListener("DOMContentLoaded", function () {

    var navLinks = document.querySelectorAll('.navbar a');
  
    navLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        if (!validateNavigation()) {
          event.preventDefault(); 
          alert('Validation failed. Handle this according to your requirements.');
        }
      });
    });
    function validateNavigation() {
      
      return true;
    }
  });
  

