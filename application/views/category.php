<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/major.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="marjor_container">
        <input id="testJson" value = '<?php echo $courses; ?>' style="display:none;">
        <input id="test" value = '<?php echo $field;?>' style="display:none;">
        <h1><?php echo $field;?></h1>
        <!-- Major-picture -->
        <div class="major_container2">
<!--
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>

            <a class="major_images">

                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">

                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
             <a class="major_images">
                 <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                 <div class="major_icons_container">
                     <i class="far fa-user-circle"></i>
                     <p> Mr.Korb</p>
                     <i class="fas fa-fire"></i>
                     <p>520</p>
                 </div>
                 <p> How to guide students step to study</p>
             </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            <a class="major_images">
                <img src="<?php echo base_url(); ?>assets/img/major-pexels1.jpg" alt="major image">
                <div class="major_icons_container">
                    <i class="far fa-user-circle"></i>
                    <p> Mr.Korb</p>
                    <i class="fas fa-fire"></i>
                    <p>520</p>
                </div>
                <p> How to guide students step to study</p>
            </a>
            -->
        </div>
    </div>

</body>
<script>
    const testJson = document.querySelector("#testJson");
    const container = document.querySelector(".major_container2");
    var json = JSON.parse(testJson.value);
    console.log(json);
    for(let i = 0; i<json.length; i++){
        let course = document.createElement("a");
        let id = parseInt(json[i].cid);
        course.classList.add("major_images");
        course.href = `<?php echo base_url();?>DetailPage?cid=${id}`
        course.innerHTML =
        `
            <img src="${json[i].course_img_path}" alt="major image">
            <div class="major_icons_container">
                <i class="far fa-user-circle"></i>
                <p>${json[i].username}</p>
                <i class="fas fa-fire"></i>
                <p>${json[i].favourite_number}</p>
            </div>
            <p>${json[i].course_name}</p>
        `
        container.appendChild(course);
    }
</script>

</html>