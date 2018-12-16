window.addEventListener('load', function() {

function cambiarColor() {
    if (this.style.backgroundColor == 'black') {
      this.style.color = 'black';
      this.style.backgroundColor = 'white';
    } else {
      this.style.color = 'white';
        this.style.backgroundColor = 'black';
    }
  }

  var botones = document.querySelectorAll(".btnCambiante")

  for (var i = 0; i < botones.length; i++) {
    botones[i].addEventListener("mouseover", cambiarColor);
    botones[i].addEventListener("mouseout", cambiarColor);
  }
});


window.addEventListener('load', function() {

function cambiarColor() {
    if (this.style.backgroundColor == 'white') {
      this.style.color = 'white';
      this.style.backgroundColor = 'black';
    } else {
      this.style.color = 'black';
        this.style.backgroundColor = 'white';
    }
  }

  var botones = document.querySelectorAll(".btnCambiante2")

  for (var i = 0; i < botones.length; i++) {
    botones[i].addEventListener("mouseover", cambiarColor);
    botones[i].addEventListener("mouseout", cambiarColor);
  }
});
