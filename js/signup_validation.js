// Verify that the passwords in the signup form matches with each other
$(document).ready(function() {
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("rpassword");

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("The passwords do not match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
});
