<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/password.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>

</head>
<body>

<section class="password-booking">
    <p>Reset Password</p>
    <hr>
    <div class="password-container">
        <form id="password-form">
            <div class='password-input-pack'>
                <input type='password' class='password-input-text forget-reset-pass1' id='password-password'
                       placeholder="Password" required>
            </div>
            <div class='forget-reset-password-error1'></div>
            <div class='password-input-pack'>
                <input type='password' class='password-input-text forget-reset-pass2' id='password-confirmpassword'
                       placeholder="Confirm Password" required>
            </div>
            <div class='forget-reset-password-error2'></div>
        </form>
    </div>

    <button class='password-button'>Reset</button>
</section>
</body>

<script>
    var lengthRequire = false;
    var match = false;
    $('.forget-reset-pass1').keyup(function (e) {
        var password1 = document.querySelector('.forget-reset-pass1');
        var password1Value = password1.value;
        var password2 = document.querySelector('.forget-reset-pass2');
        var password2Value = password2.value;
        var error1 = document.querySelector('.forget-reset-password-error1');
        var error2 = document.querySelector('.forget-reset-password-error2');
        if (password1Value.length < 6 || password1Value.length > 25) {
            password1.style.border = '3px solid';
            password1.style.borderColor = 'red';
            error1.style.color = 'red';
            error1.innerHTML = 'The password length much more than 6 and below 25 characters!'
            lengthRequire = false;
            if(match === true){
                if (password1.value !== password2.value) {
                    match = false;
                    password2.style.border = '3px solid';
                    password2.style.borderColor = 'red';
                    error2.style.color = 'red';
                    error2.innerHTML = 'The passwords do not match!'
                }
            }
            if(match === false){
                if (password1.value === password2.value) {
                    match = true;
                    password2.style.border = '3px solid';
                    password2.style.borderColor = 'green';
                    error2.style.color = 'green';
                    error2.innerHTML = 'The passwords are matched!';
                }
            }
        } else {
            console.log(password1.length);
            password1.style.border = '3px solid';
            password1.style.borderColor = 'green';
            error1.style.color = 'green';
            error1.innerHTML = 'The password is strong enough!';
            lengthRequire = true;
            console.log(match);
            if(match === true){
                if (password1.value !== password2.value) {
                    match = false;
                    password2.style.border = '3px solid';
                    password2.style.borderColor = 'red';
                    error2.style.color = 'red';
                    error2.innerHTML = 'The passwords do not match!'
                }
            }
            if(match === false){
                if (password1.value === password2.value) {
                    match = true;
                    password2.style.border = '3px solid';
                    password2.style.borderColor = 'green';
                    error2.style.color = 'green';
                    error2.innerHTML = 'The passwords are matched!';
                }
            }
        }
    })
    $('.forget-reset-pass2').keyup(function (e) {
        var password1 = document.querySelector('.forget-reset-pass1');
        var password1Value = password1.value;
        var password2 = document.querySelector('.forget-reset-pass2');
        var password2Value = password2.value;
        var error2 = document.querySelector('.forget-reset-password-error2')
        if (password2Value !== password1Value) {
            password2.style.border = '3px solid';
            password2.style.borderColor = 'red';
            error2.style.color = 'red';
            error2.innerHTML = 'The passwords do not match!'
            match = false;
        } else {
            console.log(password1.length);
            password2.style.border = '3px solid';
            password2.style.borderColor = 'green';
            error2.style.color = 'green';
            error2.innerHTML = 'The passwords are matched!';
            match = true;
        }
    })
    var passwordButton = document.querySelector('.password-button');
    passwordButton.addEventListener('click', function (e) {
        console.log(length);
        console.log(match);
        if(lengthRequire === true && match === true){
            var password = document.querySelector('.forget-reset-pass1').value;
            $.ajax({
                url: '<?php echo base_url()?>ajax_email_match/do_reset_password',
                method: 'POST',
                data:{password_ajax:password},
                success:function(response){
                    location.href = '<?php echo base_url()?>login';
                }
            })
        }
    })

    // $('.forget-reset-pass1').keyup(function (e){
    //     if (password1.length >= 6 && password1.length <= 25) {
    //         error1.style.color = 'red';
    //         error1.innerHTML = ''
    // })

    // function checkLength(){
    //     if (password1.length < 6 || password1.length > 25){
    //         error1.style.color = 'red';
    //         error1.innerHTML = 'The password length much more than 6 and below 25 characters!'
    //     } else {
    //         console.log(password1.length);
    //         error1.innerHTML = ''
    //     }
    // }

</script>

</html>