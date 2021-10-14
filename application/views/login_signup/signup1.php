
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup 1</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/signup.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
</head>



<body>
<?php echo validation_errors('<div class="Signup-errormsg ">', '</div>'); ?>
<?php echo form_open('Signup/register_page1'); ?>
<section class="signup-booking">
    <p>Sign up and start sharing!</p>
    <?php echo $error; ?>
    <hr>
    <div class="signup-container">
        <form id="signup-form">
            <div class='signup-left-right'>
                <div class='signup-input-pack'>
                    <input type='text' class='signup-input-text-left' name='signup-firstname' placeholder="First Name"required>
                </div>
                <div class='signup-input-pack'>
                    <input type='text' class='signup-input-text-right' name='signup-lastname' placeholder="Last Name" required>
                </div>
            </div>
            <div class='signup-input-pack'>
                <input type='text' class='signup-input-text' name='signup-username' placeholder="Username" required>
            </div>
            <div class='signup-input-pack'>
                <input type='email' class='signup-input-text' name='signup-email' placeholder="Email" required>
            </div>
            <div class='signup-input-pack'>
                <input type='password' class='signup-input-text signup-password' name='signup-password' placeholder="Password" required>
                <div class='Signup-error'></div>
            </div>

            <div class='signup-input-pack'>
                <input type='password' class='signup-input-text signup-confirmpassword' name='signup-confirmpassword' placeholder="Confirm Password" required>
                <div class='Signup-confirm-error'></div>
            </div>

        </form> 
        <div class='signup-dot-container'>
            <span class="signup-dot-current"></span>
            <span class="signup-dot"></span>
            <span class="signup-dot"></span>  
        </div>
        
        <button class='signup-button'>Next</button>
    </div>
        
    
</section>
</body>
<script>
    $('.signup-password').keyup(function (e) {
        var password1 = document.querySelector('.signup-password');
        var password1Value = password1.value;
        var password2 = document.querySelector('.signup-confirmpassword');
        var password2Value = password2.value;
        var error1 = document.querySelector('.Signup-error');
        var error2 = document.querySelector('.Signup-confirm-error');
        if (password1Value.length < 6 || password1Value.length > 25) {
            password1.style.border = '3px solid';
            password1.style.borderColor = 'red';
            error1.style.color = 'red';
            error1.innerHTML = 'The password length much more than 6 and below 25 characters!'
        } else {
            password1.style.border = '3px solid';
            password1.style.borderColor = 'green';
            error1.style.color = 'green';
            error1.innerHTML = 'The password is strong enough!';
        }
    })
    $('.signup-confirmpassword').keyup(function (e) {
        var password1 = document.querySelector('.signup-password');
        var password1Value = password1.value;
        var password2 = document.querySelector('.signup-confirmpassword');
        var password2Value = password2.value;
        var error2 = document.querySelector('.Signup-confirm-error')
        if (password2Value !== password1Value) {
            password2.style.border = '3px solid';
            password2.style.borderColor = 'red';
            error2.style.color = 'red';
            error2.innerHTML = 'The passwords do not match!'
        } else {
            password2.style.border = '3px solid';
            password2.style.borderColor = 'green';
            error2.style.color = 'green';
            error2.innerHTML = 'The passwords are matched!';
        }
    })
</script>
</html>