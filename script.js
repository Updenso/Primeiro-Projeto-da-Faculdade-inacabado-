function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  var btnTop = document.getElementById("btnTop");

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btnTop.style.display = "block";
  } else {
    btnTop.style.display = "none";
  }
}

document.getElementById("btnTop").addEventListener("click", function() {
  document.body.scrollTop = 0; // Para navegadores Safari
  document.documentElement.scrollTop = 0; // Para outros navegadores
});

document.getElementById("btnTop").addEventListener("click", function() {
  scrollToTop();
});

function scrollToTop() {
  var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

  if (currentScroll > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, currentScroll - currentScroll / 10);
  }
}