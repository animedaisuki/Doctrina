<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup 2</title>
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
                    <input type='text' class='signup-input-text' name='signup-institution' placeholder="Institution" required>
                </div>
                <div class='signup-input-pack'>
                    <select class='signup-options' id='signup-education-level' required> 
                        <option value="0">Education Level</option>
                        <option value="1">Primary School</option>
                        <option value="2">Secondary School</option>
                        <option value="3">Senior Secondary School</option>
                        <option value="4">Bachelors Degree</option>
                        <option value="5">Masters Degree</option>
                    </select>
                </div>
                <div class='signup-input-pack'>
                    <select class='signup-options' id='signup-target-student' required> 
                        <option value="0">Target Student Grade Level</option>
                        <option value="1">Primary School</option>
                        <option value="2">Secondary School</option>
                        <option value="3">Senior Secondary School</option>
                        <option value="4">Bachelors Degree</option>
                        <option value="5">Masters Degree</option>
                    </select>
                </div>
                <div class='signup-input-pack'>
                    <input type='text' class='signup-input-text' id='signup-teaching' placeholder="Teaching Experience" required>
                </div>
            </form> 
            <div class='signup-dot-container'>
                <span class="signup-dot"></span>
                <span class="signup-dot-current"></span>
                <span class="signup-dot"></span>  
            </div>
            <button class='signup-button'>Next</button>
            
        </div>
        
    </section>

</body>
<script src="../js/navbar.js"></script>
<?php echo form_close(); ?>
</html>