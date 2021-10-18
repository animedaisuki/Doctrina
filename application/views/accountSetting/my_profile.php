<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/cc3e753279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/AccountSetting.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/MyProfile.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
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
                <h1>Personal Data</h1>
            </div>
        </div>
        <div class="MyProfile-content-container">
            <form action="#" method="post">
                <div>
                    <div class="MyProfile-picture"><img src="<?php echo $picture; ?>" alt="user-picture"style="width:100%; height = 100%; border-radius:50%"></div>
                </div>
                <div id="username">
                    <p>Username</p>
                    <p><?php echo $username;?></p>
                    <!-- <input id="MyProfile-new-username" type="text" name="username"> -->
                </div>
				<div id="institution">
                    <p>Institution</p>
                    <?php echo $institution;?>
                <!--    <select id="MyProfile-Institution">
                        <option value="UQ">University of QueensLand</option>
                        <option value="Griffith">Griffith</option>
                        <option value="UQ">University of QueensLand</option>
                        <option value="UQ">University of QueensLand</option>
                    </select>
                    -->
                </div>
                <div id="major">
                    <p>Major</p>
                    <?php echo $major;?>
<!--
                    <select id="MyProfile-Major">
                        <option value="IT">Information Tec</option>
                        <option value="ID">Interaction Design</option>
                        <option value="UQ">University of QueensLand</option>
                        <option value="UQ">University of QueensLand</option>
                    </select>
                    -->
                </div>
                <div id="gender">
                    <p>Gender</p>
                    <?php echo $gender;?>
                    <!--
					<label for="Gender">
						<input class="MyProfile-checkbox" name= "Gender" type="radio" value="Male">&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;
						<input class="MyProfile-checkbox" name = "Gender" type="radio" value="Female">&nbsp;Female
					</label>
					-->
                </div>
                <div>
                    <p>Email</p>
                    <p class="myprofile-user-email"><?php echo $email;?></p>
                </div>
				<div id="MyProfile-overall-feedback" style="display:flex;justify-content: center;align-items: center"><div style="color:white;transition:0.2s;opacity:0;display: flex;flex-direction: row;width:50%"><i class="far fa-check-circle"></i>success</div></div>
                <div class="MyProfile-submit-button-container">
                    <input id="MyProfile-submit-button" type="submit" value="Edit">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script>
	const submit = document.querySelector('#MyProfile-submit-button');
	const input = document.querySelector('#MyProfile-new-username');
	const edit = document.querySelector("#MyProfile-submit-button");
// 	submit.addEventListener('click', function(e){
// 		e.preventDefault();
// 		const newUsername = document.querySelector('#MyProfile-new-username').value;
// 		const institution = document.querySelector('#MyProfile-Institution').value;
// 		const major = document.querySelector('#MyProfile-Major').value;
// 		const radio = document.getElementsByName("Gender");
// 		for (i=0; i<radio.length; i++) {
// 			if (radio[i].checked) {
// 				var gender = radio[i].value;
//
// 			}
// 		}
// 		$.ajax({
// 			url:"<?php echo base_url(); ?>My_profile/change_information",
// 			method:"POST",
// 			data:{newUsername:newUsername,institution:institution,major:major,gender:gender},
// 			datatype:'json',
// 			success:function(response) {
// 				var response = JSON.parse(response);
// 				if (response.repeated == "1") {
// 					const feedback = document.querySelector('#MyProfile-feedback div')
// 					feedback.style.opacity = "100";
// 					feedback.style.color = "red";
// 					feedback.innerHTML = '<i class="fas fa-times"></i>Username Existed'
// 					setTimeout(function(){
// 						feedback.style.opacity = "0";
// 					},2000);
// 				} else {
// 					input.disabled = true;
// 					const feedback = document.querySelector('#MyProfile-overall-feedback div')
// 					feedback.style.opacity = "100";
// 					feedback.style.color = "#309d05";
// 					setTimeout(function(){
// 						feedback.style.opacity = "0";
// 					},2000);
// 				}
// 			}
// 		})
//
// 	})
	edit.addEventListener("click", function(e){
	    e.preventDefault();
	    if(edit.value!="save"){
	        edit.value = "save";
            const institution = document.querySelector("#institution");
            const major = document.querySelector("#major");
            const gender = document.querySelector("#gender");

            institution.innerHTML = `
            <p>Institution</p>
            <select id="MyProfile-Institution">
                <option value="University of Queensland">University of Queensland</option>
                <option value="Griffith">Griffith</option>
                <option value="QUT">Queensland university of technology</option>
                <option value="Bond University">Bond University</option>
            </select>
            `
            major.innerHTML = `
            <p>Major</p>
            <select id="MyProfile-Major">
                <option value="Information Tec">Information Tec</option>
                <option value="Interaction Design">Interaction Design</option>

            </select>
            `
            gender.innerHTML = `
            <p>Gender</p>
            <label for="Gender">
                <input class="MyProfile-checkbox" name= "Gender" type="radio" value="Male">&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="MyProfile-checkbox" name = "Gender" type="radio" value="Female">&nbsp;Female
            </label>
            `
	    }else{
            const institution = document.querySelector('#MyProfile-Institution').value;
            const major = document.querySelector('#MyProfile-Major').value;
            const radio = document.getElementsByName("Gender");
            for (i=0; i<radio.length; i++) {
                if (radio[i].checked) {
                    var gender = radio[i].value;

                }
            }
            $.ajax({
                url:"<?php echo base_url(); ?>My_profile/change_information",
                method:"POST",
                data:{institution:institution,major:major,gender:gender},
                datatype:'json',
                success:function(response) {
                    var response = JSON.parse(response);
                    if (response.repeated == "1") {
                        const feedback = document.querySelector('#MyProfile-feedback div')
                    } else {
                        const feedback = document.querySelector('#MyProfile-overall-feedback div')
                    }
                }
            })
            alert("Successfully saved");
            window.location.reload();
	    }
	})



</script>
</html>
