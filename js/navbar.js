// Se usa para alternar el menú en pantallas pequeñas al hacer clic en el botón de menú
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
    
    // Cuando el usuario haga clic en cualquier lugar fuera del modal, ciérrelo
  var modal = document.getElementById('ticketModal');
  
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }