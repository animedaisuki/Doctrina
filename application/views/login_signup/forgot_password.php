<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/password.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>

</head>
<body>
    <section class="password-booking">
        <p>Forgot Password</p>
        <hr>
        <h1>Enter you email address and we will send you a link to reset your password.</h1>
        <div class="password-container">
            <form id="password-form">
                <div class='password-input-pack'>
                    <input type='email' name='email' class='password-input-text send-email-forgot-pass-text' id='password-email' placeholder="Email" required>
                    <div class='forget-pass-email-message' style="text-align:center"></div>
                </div>
            </form>
        </div>
        <button class='password-button send-email-forgot-pass'>Send</button>
    </section>
</body>
<script>
    var is_sent = false;
    var button = document.querySelector('.send-email-forgot-pass');
    button.addEventListener('click', function() {
        var query = document.querySelector('.send-email-forgot-pass-text').value;
        $.ajax({
            url: '<?php echo base_url()?>ajax_email_match/search',
            method: 'POST',
            data:{query:query},
            success:function(response){
                var response = JSON.parse(response);
                console.log(response);
                console.log(query);
                if (response.status_message == "0"){
                    var message = document.querySelector('.forget-pass-email-message');
                    message.style.color = 'red';
                    message.innerHTML = '<i class="fas fa-times"></i>The email has not been registered!'
                } else {
                    var message = document.querySelector('.forget-pass-email-message');
                    message.style.color = 'green';
                    message.innerHTML = '<i class="far fa-check-circle"></i>An email with password reset link has been sent!'
                    is_sent = true;
                }
            }
        });
    })


</script>
</html>