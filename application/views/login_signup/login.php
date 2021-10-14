<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/login.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
<?php echo form_open(base_url().'login/do_login'); ?>
<div class="Login-big-container">
    <div class="Login-container">
        <h2 class="Login-title">Login</h2>
        <div class="Login-container1">
            <div >
                <input type="text" class="Login-form-control" placeholder="Username" required="required"
                    name="username">
            </div>
            
            <div >
                <input type="password" class="Login-form-control" placeholder="Password" required="required"
                    name="password">
            </div>
            <label class="Login-Label"><input type="checkbox" name="remember"> Remember me</label>

        
            <div class="g-recaptcha" data-sitekey="6LfRLCYcAAAAAKUTOzGIpWBkWhW2fCfwmibFm6Gv"></div>


            <button type="submit" class="Login-Login">Login</button>
        

            
            <a href="<?php echo base_url()?>forgot_password" class="Login-Link">Forget password?</a>
            

            <!-- <div class="Login-container2">
                <a href="<?php echo $loginURL ?>" style='margin-left:6.5em'>
                    <img src="<?php echo base_url() ?>/assets/img/google_login.png" class="login-google">
                </a>
            </div> -->
            <!-- <div class="Login-container2">
                <a href="<?php echo base_url()?>forgot_password" class="Login-Link">Forget password?</a>
            </div> -->
        </div>

        <div class="Login-container2">
                <a href="<?php echo $loginURL ?>">
                    <img src="<?php echo base_url() ?>/assets/img/google_login.png" class="login-google">
                </a>
        </div>
        
        <div class="Login-form-group-container1">
            <p class="Login-text">New to Doctrina? </p>
            <a href="<?php echo base_url(); ?>Signup" class="Login-Signup"> Sign up</a>
        </div>
    </div>
</div>

<?php echo form_close(); ?>
</body>
