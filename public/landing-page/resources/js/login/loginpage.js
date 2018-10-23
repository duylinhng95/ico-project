
    let password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");
    function validatePassword(){
        if(password.value !== confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

   $(document).ready(function() {
       $('#login-box .sign-up-button').on('click',function() {
           $('#login-box').removeClass('show');
           $('#login-box').addClass('hide');
           $('#register-box').removeClass('hide');
           $('#register-box').addClass('show');
       })
       $('#register-box .login-button').on('click',function() {
           $('#register-box').removeClass('show');
           $('#register-box').addClass('hide');
           $('#login-box').removeClass('hide');
           $('#login-box').addClass('show');
       })
   });

