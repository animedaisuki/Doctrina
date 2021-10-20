<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lecture.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
<input id="lec_docs" value='<?php echo $docs; ?>' style="display:none;">
<input id="lec_video" value='<?php echo $videos; ?>'style="display:none;">
<input id="lec_author" value='<?php echo $author; ?>'style="display:none;">

<div class="lec_container">
    <div class="lec_left">

        <h1>Teacher</h1>
        <img class="lec_avatar" src="<?php echo base_url() ?>/assets/img/img_avatar.png">
        <h2>David</h2>

        <hr class="lec_split">

        <hr class="lec_split">

        <h2><?php echo $course_name?></h2>

        <hr class="lec_split">

        <h2>Course Information</h2>

        <p style="padding: 20px 40px 20px 40px; line-height: 25px; text-align: left; font-size: 20px;">
            <?php echo $desc?>
        </p>
    </div>

    <div class="lec_right">
        <div class="lec_img_container"></div>

        <div class="lec_select">
            <h1 class="lec_video">Lecture Videos</h1>
            <h1 class="lec_pdf">Lecture Slides</h1>
            <h1 class="lec_feedback">Feedbacks</h1>
            <h1 class="lec_qa">Question&Answer</h1>
        </div>
        <div class="lec_row_container">

        </div>


        <!--        <embed src="https://localhost/demo/uploads/files/47_Team_010.pdf" width="500" height="375">-->

        <!--        <video id="video" width="450" height="170" controls>-->
        <!--            <source src="https://localhost/demo/uploads/videos/UMAC.mp4" type="video/mp4">-->
        <!--        </video>-->

    </div>

</div>

<script>
    const lec_docs_json = document.querySelector("#lec_docs");
    const lec_videos_json = document.querySelector("#lec_video");
    const lec_author_json = document.querySelector("#lec_author");

    var lec_docs_json_value = JSON.parse(lec_docs_json.value);
    var lec_videos_json_value = JSON.parse(lec_videos_json.value);

    console.log(lec_docs_json_value);
    console.log(lec_videos_json_value);
    const lec_row_container = document.querySelector(".lec_row_container")
    const lecture_select = document.querySelector(".lec_select")


    function render (icon,data){
        for(let i = 0; i<data.length; i++){
            const lec_video_row = document.createElement("div");
            lec_video_row.classList.add("lec_row");

            if (data === lec_videos_json_value){
                lec_video_row.innerHTML = `
                <div class="lec_row_play">
                    <a href ="uploads/videos/${data[i].filename}">
                        ${icon}
                    </a>
                </div>
                <h4 class="lec_row_week">Week ${data[i].week}</h4>
                <p class="lec_row_title">${data[i].filename}</p>
            `
                lec_row_container.appendChild(lec_video_row);
            }

            if (data === lec_docs_json_value){
                lec_video_row.innerHTML = `
                <div class="lec_row_play">
                    <a href ="uploads/files/${data[i].filename}">
                        ${icon}
                    </a>
                </div>
                <h4 class="lec_row_week">Week ${data[i].week}</h4>
                <p class="lec_row_title">${data[i].filename}</p>
            `
                lec_row_container.appendChild(lec_video_row);
            }
        }
    }
    render('<i class="fas fa-play-circle"></i>',lec_videos_json_value);

    lecture_select.addEventListener("click",function(e){
        lec_row_container.innerHTML = '';
        if(e.target.textContent == "Lecture Videos"){
            lec_row_container.innerHTML='';
            render('<i class="fas fa-play-circle"></i>',lec_videos_json_value);
        }else if(e.target.textContent == "Lecture Slides"){
            render('<i class="fas fa-eye"></i>',lec_docs_json_value)
        }
    })



</script>
