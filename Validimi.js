const regEx = {
    nameValidation: /^[A-Z][A-z]*/,
    surnameValidation: /^[A-Z][A-z]*/,
    usernameValidation: /^[A-Z a-z 0-9_\-.]{8,15}$/,
    emailValidation: /^([A-Z a-z 0-9_\-.])+@([A-Z a-z 0-9_\-.])+\.([A-Z a-z]{2,4})$/,
    passwordValidation: /^[A-Z][A-z]*\d{3}$/,
  };
  
  function validate() {
    var nameValue = document.getElementById("name").value;
    var surnameValue = document.getElementById("surname").value;
    var usernameValue = document.getElementById("username").value;
    var emailValue = document.getElementById("email").value;
    var passwordValue = document.getElementById("password").value;
  
    if (!regEx.nameValidation.test(nameValue)) {
      alert("Please enter a valid name");
    }
    if (!regEx.surnameValidation.test(surnameValue)) {
      alert("Please enter a valid surname");
    }
    if (!regEx.usernameValidation.test(usernameValue)) {
      alert("Please enter a valid username");
    }
  
    if (!regEx.emailValidation.test(emailValue)) {
      alert("Please enter a valid email");
    }
    if (!regEx.passwordValidation.test(passwordValue)) {
      alert("Please enter a valid password");
    }
  }
  
  const regExL = {
    emailValidation: /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/,
    passwordValidation: /^[A-Z][A-z]*\d{3}$/,
  };
  
  function validateL() {
    var emailValue = document.getElementById("emailL").value;
    var passwordValue = document.getElementById("passwordL").value;
  
    
    if (!regExL.emailValidation.test(emailValue)) {
      alert("Please enter a valid email");
    }
    if (!regExL.passwordValidation.test(passwordValue)) {
      alert("Please enter a valid password");
    }
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }