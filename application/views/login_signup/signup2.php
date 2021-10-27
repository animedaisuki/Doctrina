<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/signup.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>

</head>
<?php echo form_open('Signup/register_page2'); ?>
<body>
    <section class="signup-booking">
        <p>Tell us about you!</p>
        <?php echo validation_errors('<div class="alert alert-danger col-md-4 mx-auto">', '</div>'); ?>
        <hr>
        <div class="signup-container">
            <form id="signup-form">
                <div class='signup-input-pack'>
                    <!-- <input type='text' class='signup-input-text' name='signup-institution' placeholder="Institution" required> -->
                    <select class='signup-options' name="signup-institution" required>
                        <option value="University of Queensland">University of Queensland</option>
                        <option value="Griffith university">Griffith</option>
                        <option value="Queensland university of technology">Queensland university of technology</option>
                        <option value="Bond University">Bond University</option>
                    </select>
                </div>
                <div class='signup-input-pack'>
                    <select class='signup-options' name='signup-Major' required> 
                        <option value="Information Tec">Information Tec</option>
                        <option value="Interaction Design">Interaction Design</option>
                    </select>
                </div>
                <div class='signup-input-pack'>
                    <select class='signup-options' name='signup-Gender' required> 
                        <option name= "Gender" type="radio" value="Male">Male</option>
                        <option name = "Gender" type="radio" value="Female">Female</option>
                    </select>
                </div>
                <div class='signup-input-pack'>
                    <input type='text' class='signup-input-text' id='signup-teaching' placeholder="Teaching Experience" required>
                </div>
            </form> 
            <div class='signup-dot-container'>
                <span class="signup-dot"></span>
                <span class="signup-dot-current"></span>
                <!-- <span class="signup-dot"></span>   -->
            </div>
            <button class='signup-button'>Next</button>
            
        </div>
        
    </section>

</body>
<script src="../js/navbar.js"></script>
<?php echo form_close(); ?>
</html>