<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lecture.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<input id="lec_docs" value='<?php echo $docs; ?>'>
<input id="lec_video" value='<?php echo $videos; ?>'>
<input id="lec_author" value='<?php echo $author; ?>'>

<div class="lec_container">
    <div class="lec_left">

        <h1>Teacher</h1>
        <img class="lec_avatar" src="<?php echo base_url() ?>/assets/img/img_avatar.png">
        <h2>David</h2>

        <hr class="lec_split">

        <i class="fas fa-star lec-fa-star"></i>
        <i class="fas fa-star lec-fa-star"></i>
        <i class="fas fa-star lec-fa-star"></i>
        <i class="fas fa-star lec-fa-star"></i>
        <i class="fas fa-star lec-fa-star"></i>

        <hr class="lec_split">

        <h2>Duration: 4 Hours</h2>

        <hr class="lec_split">

        <h2>Course Information</h2>

        <p style="padding: 20px 40px 20px 40px; line-height: 25px; text-align: left; font-size: 20px;">Introduction to
            Software Engineering through programming with particular focus on the fundamentals of
            computing & programming, using an exploratory problem-based approach. Building abstractions with procedures,
            data & objects; data modelling; designing, coding & debugging programs of increasing complexity
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




</script>
