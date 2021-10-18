<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Week 2 Workshop Example</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/AccountSetting.css">
    <script src="https://kit.fontawesome.com/cc3e753279.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
</head>
<body class="AccountSetting-body">
<div class="AccountSetting-container">
    <div class="AccountSetting-nav-container">
        <nav>
            <ul>
                <li><i class="fas fa-address-card" style="font-size:1rem"></i>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:black" href="<?php echo site_url('My_profile'); ?>">Personal Data</a></li>
                <?php if(!$this->session->userdata('google_login')) : ?>
                <li><i class="fas fa-sliders-h"></i>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:black" href="<?php echo base_url(); ?>AccountSetting">Account Setting</a></li>
                <?php endif; ?>
                <li><i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:black" href="<?php echo base_url(); ?>my_favourite">My Favourite</a></li>
                <li><i class="fas fa-file-upload"></i>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:black" href="<?php echo base_url(); ?>my_upload"> My Upload</a></li>
            </ul>
        </nav>
    </div>
        <div class="AccountSetting-rightPart-container">
            <div class="AccountSetting-header-container">
                <div class="AccountSetting-page-header">
                    <h1>Account setting</h1>
                </div>
            </div>
            <div class="AccountSetting-content-container">
				<?php echo form_open(base_url().'AccountSetting/change_email'); ?>
                        <p>Change Password</p>
                        <div class="AccountSetting-inputField">
                            <div>
                                <span>New Password</span>
                                <input id="AccountSetting-newPW" name="newPW">
                            </div>
                            <div>
                                <span>Confirm Password</span>
                                <input id="AccountSetting-repeatPW" name="repeatPW">
                            </div>
							<div id="AccountSetting-feedback"><i class="far fa-check-circle"></i>success</div>
							<div class="AccountSetting-button-container">
                                <input class="AccountSetting-button"type="submit" value="Done">
                            </div>
                        </div>


                        <p>Account Status</p>
                        <div class="AccountSetting-img-container">
                            <img class="AccountSetting-img2" src="<?php echo base_url()?>assets/img/email.png" alt="logo">
                            <div class="AccountSetting-text-container AccountSetting-verify-email">
                                <p>Email not verified!</p>
                                <input id="AccountSetting-newEmail" placeholder="Please enter your email address">
                                <button type="button" class="AccountSetting-resend-button" >Verify</button>
								<div id="AccountSetting-Email-feedback"><i class="far fa-check-circle"></i>Success</div>
                            </div>
                        </div>

				<?php echo form_close(); ?>
            </div>
        </div>
</div>
</body>
<script>
	const verify = document.querySelector(".AccountSetting-resend-button");
	verify.addEventListener("click",function(){
		const newEmail = document.querySelector("#AccountSetting-newEmail").value;
		$.ajax({
			url:"<?php echo base_url(); ?>AccountSetting/change_email",
			method:"POST",
			data:{newEmail:newEmail},
			datatype:'json',
			success:function(response) {
				var response = JSON.parse(response);
				if (response.repeated == "1") {
					const emailFeedback = document.querySelector("#AccountSetting-Email-feedback")
					emailFeedback.style.opacity = "100";
					emailFeedback.style.color = "red";
					emailFeedback.innerHTML = '<i class="fas fa-times"></i>Email already Exist';
					setTimeout(function(){
						emailFeedback.style.opacity = "0";
					},2000);
				} else {
					const emailFeedback = document.querySelector("#AccountSetting-Email-feedback")
					verify.disabled = true;
					verify.style.backgroundColor = "#A3A3A4";
					emailFeedback.style.opacity = "100";
					emailFeedback.style.color = "#309d05";
					emailFeedback.innerHTML = '<i class="far fa-check-circle">Verify Email Sended';
					setTimeout(function(){
						emailFeedback.style.opacity = "0";
					},2000);
				}
			}
		})
	})
	const submit = document.querySelector(".AccountSetting-button");
	submit.addEventListener("click", function(e){
		e.preventDefault();
		const newPassword = document.querySelector("#AccountSetting-newPW").value;
		const confirmPassword = document.querySelector("#AccountSetting-repeatPW").value;
		if (newPassword == confirmPassword) {
			$.ajax({
				
				url:"<?php echo base_url(); ?>AccountSetting/change_password",
				method:"POST",
				data:{newPassword:newPassword},
				datatype: 'json',
				success:function(response) {
					console.log("ajax work");
					console.log(response);
					var response = JSON.parse(response);
					if(response.msg == "1") {
						console.log("work");
						const feedback = document.querySelector("#AccountSetting-feedback")
						feedback.style.opacity = "100";
						feedback.style.color = "#309d05";
						setTimeout(function(){
							feedback.style.opacity = "0";
						},2000);
					} else {
						const feedback = document.querySelector("#AccountSetting-feedback")
						feedback.style.opacity = "100";
						feedback.style.color = "red";
						feedback.innerHTML = '<i class="fas fa-times"></i>Server Problem try again';
						setTimeout(function(){
							feedback.style.opacity = "0";
						},2000);
					}
				}
			})
		} else {
			const feedback = document.querySelector("#AccountSetting-feedback")
			feedback.style.opacity = "100";
			feedback.style.color = "red";
			feedback.innerHTML = '<i class="fas fa-times"></i>Password did not match';
			setTimeout(function(){
				feedback.style.opacity = "0";
			},2000);
		}

	});
</script>


</html>