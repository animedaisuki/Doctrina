<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup 3</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/signup.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

    <section class="signup-booking">
        <p>What do you teach?</p>
        <hr>
        <div class="signup-container">
            <form id="signup-form">
                <!-- <select class ='signup-choosing-multiple' name='teaching list' size='12' multiple='multiple'>
                    <option class='signup-option-multiple' value="1">Art</option>
                    <option class='signup-option-multiple' value="2">Math</option>
                    <option class='signup-option-multiple' value="3">IT</option>
                    <option class='signup-option-multiple' value="4">Biology</option>
                    <option class='signup-option-multiple' value="5">Art</option>
                    <option class='signup-option-multiple' value="6" selected>Math</option>
                    <option class='signup-option-multiple' value="7">IT</option>
                    <option class='signup-option-multiple' value="8">Biology</option>
                    <option class='signup-option-multiple' value="9">Art</option>
                    <option class='signup-option-multiple' value="10">Math</option>
                    <option class='signup-option-multiple' value="11">IT</option>
                    <option class='signup-option-multiple' value="12">Biology</option>
                </select> -->
                <div class='signup3-left-right'>
                    <div class='signup-input-pack' multiple='multiple'>
                        <input class='signup3-input-text-left' id='signup-subject' placeholder="Art" readonly>
                    </div>
                    <div class='signup-input-pack' multiple>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="Math" readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="IT" readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="Biology" readonly>
                    </div>
                </div>
                <div class='signup3-left-right'>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-left' id='signup-subject' placeholder="Art"readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="Math" readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="IT" readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="Biology" readonly>
                    </div>
                </div>
                <div class='signup3-left-right'>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-left' id='signup-subject' placeholder="Art"readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="Math" readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="IT" readonly>
                    </div>
                    <div class='signup-input-pack'>
                        <input class='signup3-input-text-right' id='signup-subject' placeholder="Biology" readonly>
                    </div>
                </div>
                
            </form> 
        </div>
        <div class='signup-dot-container'>
             <span class="signup-dot"></span>
            <span class="signup-dot"></span>
            <span class="signup-dot-current"></span>  
        </div>
        
        <button class='signup-button'>Sign up</button>
    </section>

</body>
<script src="../js/navbar.js"></script>
<script src="../js/signup3.js"></script>
</html>