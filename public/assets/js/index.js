// Toggle Menu Functionaliy Start
document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".menu-btn").addEventListener("click", function () {
    document.body.classList.add("menuToggle");
  });

  document.querySelector(".close-btn").addEventListener("click", function () {
    document.body.classList.remove("menuToggle");
  });
});
// Toggle Menu Functionaliy End


// AOS JS Start
AOS.init();
// AOS JS Start


// Counter JS Start
let count = document.querySelectorAll(".count")
let arr = Array.from(count)



arr.map(function(item){
  let startnumber = 0

  function counterup(){
  startnumber++
  item.innerHTML= startnumber
   
  if(startnumber == item.dataset.number){
      clearInterval(stop)
  }
}

let stop =setInterval(function(){
  counterup()
},50)

})
// Counter JS Start


// Newsletter Validations JS Start
function validateNews() {
  const emailInput = document.getElementsByClassName('newsletter-input').value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


  if (!emailInput) {
    alert('Veuillez entrer votre adresse email !');
  } else if (!emailRegex.test(emailInput)) {
    alert('Adresse e-mail non valide ! Veuillez saisir une adresse valide.');
  } else {
    alert('Inscription réussie ! Merci.');
  }
}
// Newsletter Validations JS End



// League Pages Tabs JS Start
$('.tab').on('click', function (evt) {
  evt.preventDefault();
    $('.tab').removeClass('active');
  $(this).addClass('active');
  var sel = $(this).attr('data-toggle-target');  
  $('.tab-content').removeClass('active');
  $(sel).addClass('active');
});
$(".profile").click(function(){
  $(this).find(".dropdown").slideToggle();
});
// League Pages Tabs JS Start

// Contact Form Validation Start
function validateContactForm() {
  const name = document.getElementsByClassName('contact-form').value.trim();
  const email = document.getElementsByClassName('contact-email').value.trim();
  const topic = document.getElementsByClassName('contact-topic').value;
  const message = document.getElementsByClassName('message').value.trim();

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (name.length < 2 || name.length > 100) {
    alert('Le nom doit comporter au minimum 2 caractères et au maximum 100 caractères.');
    return false;
  }
  if (!emailRegex.test(email)) {
    alert(`'S'il vous plaît, mettez une adresse email valide.'`);
    return false;
  }
  if (!topic) {
    alert('Veuillez choisir un sujet.');
    return false;
  }
  if (message.length < 10 || message.length > 1000) {
    alert('Le message doit comporter au minimum 10 et au maximum 1000 caractères.');
    return false;
  }
  alert('Le formulaire a été envoyé avec succès ! Merci de nous avoir contacté.');
  return true;
}
// Contact Form Validation End

window.onload = function() {
  document.documentElement.scrollTop = 0;
  document.body.scrollTop = 0;  
};

(function($) {
  "use strict";
      $(document).ready(function() {
              $('.modal-link').on('click', function() {
              $('body').addClass("modal-open");
          });
          $('.close-modal').on('click', function() {
              $('body').removeClass("modal-open");
          });
      });
}(jQuery));
