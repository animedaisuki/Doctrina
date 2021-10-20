<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/detailpage.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
</head>
<input value="<?php echo $cid ?>">
<body>
    <div class="detailpage-container">
        <div class="detailpage-header">
            <div class="detailpage-description">
                
                <h2><?php echo $course_info->row_array()['course_name']; ?></h2>
                <p><?php echo $course_info->row_array()['intro']; ?></p>
                <p style="display:none" class="course-id"><?php echo $course_info->row_array()['course_id']; ?></p></td>
                <p><?php echo $course_info->row_array()['username']; ?></p>
                <p class="detailpage-small"><i class="fas fa-globe"></i>English</p>
                <p class="detailpage-small"><?php echo $course_info->row_array()['upload_date']; ?></p>
            </div>
            <div class="detailpage-img">
                <img src="<?php echo $course_info->row_array()['course_img_path']; ?>" alt="">
            </div>
            <div class="detailpage-buttons">
                <div><a href="<?php echo base_url(); ?>Lecture?cid=<?php echo $cid; ?>">Start Learning</a></div>
                <div><a href="">Download</a></div>
                <?php if($favourite == true): ?>
                <div><a href="<?php echo base_url(); ?>DetailPage/Add_favourite_course" class="detailpage-addtofavorite">Add to favorite</a></div>
                <?php endif; ?>
                <?php if($favourite == false): ?>
                <div><a href="<?php echo base_url(); ?>DetailPage/Add_favourite_course" class="detailpage-addtofavorite">Added</a></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="detailpage-whatyouwilllearn-container">
            <h3>What you will learn</h3>
            <div class="detailpage-whatyouwilllearn-items">
                <?php
                    foreach($what_to_Learn->result() as $row)
                    {
                        echo '
                            <div class="detailpage-whatyouwilllearn-item">
                                <i class="far fa-check-circle"></i>
                                <p>'.$row->learning_obj.'</p>
                            </div>

                        ';
                    }
                ?>
            </div>
        </div>
        <div class="detailpage-itemdescription">
            <h3>Description</h3>
            <div class="detailpage-itemdescription-container">
                <div>
                    <p id="descriptionText">
                        <?php  echo nl2br($course_info->row_array()['course_description']); ?>
                    </p>
                </div>
            </div>
            <button class="detailpage-showmore-btn">Show more</button>
        </div>
<!--    <div class="detailpage-reviews">
            <h3>Review</h3>
            <div class="detailpage-reviews-container">
                <div class="detailpage-reviews-interactions">
                    <div class="detailpage-reviews-searchbar">
                        <input type="text">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="detailpage-reviews-ratings">
                        <select name="" id="">
                            <option value="">All Ratings:</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="detailpage-reviews-items-container">
                    <div class="detailpage-reviews-item-container">
                        <div class="detailpage-reviews-profile">
                            <div class="">
                                KJ
                            </div>
                        </div>
                        <div class="detailpage-reviews-item">
                            <h4>Kavin Jain</h4>
                            <div class="detailpage-reviewsitem-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>This course was pretty good. There were clear explanations and great examples. It was easy for even me, a 7th grader to understand. I would recommend this course to everyone.</p>
                        </div>
                    </div>
                    <div class="detailpage-reviews-item-container">
                        <div class="detailpage-reviews-profile">
                            <div class="">
                                KJ
                            </div>
                        </div>
                        <div class="detailpage-reviews-item">
                            <h4>Kavin Jain</h4>
                            <div class="detailpage-reviewsitem-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>This course was pretty good. There were clear explanations and great examples. It was easy for even me, a 7th grader to understand. I would recommend this course to everyone.</p>
                        </div>
                    </div>
                    <div class="detailpage-reviews-item-container">
                        <div class="detailpage-reviews-profile">
                            <div class="">
                                KJ
                            </div>
                        </div>
                        <div class="detailpage-reviews-item">
                            <h4>Kavin Jain</h4>
                            <div class="detailpage-reviewsitem-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>This course was pretty good. There were clear explanations and great examples. It was easy for even me, a 7th grader to understand. I would recommend this course to everyone.</p>
                        </div>
                    </div>
                </div>
           </div>-->
        </div>
    </div>
    <script>
        const btn = document.querySelector(".detailpage-showmore-btn");
        const paragraph = document.querySelector(".detailpage-itemdescription-container p");
        btn.addEventListener("click", function(e){
            if(btn.textContent == "Show more"){
                paragraph.style.height = "auto";
                btn.textContent = "Show less";
            }else{
                paragraph.style.height = "300px";
                btn.textContent = "Show more";
            }
        })
        const addfavouritebtn = document.querySelector(".detailpage-addtofavorite");
        addfavouritebtn.addEventListener("click", function(e){
            e.preventDefault();
            if(addfavouritebtn.textContent != "Added"){
                const courseid = document.querySelector(".course-id");
                $.ajax({
                    url:`<?php echo base_url(); ?>DetailPage/Add_favourite_course?cid=${courseid.textContent}`,
                    method:"POST",
                    success:function(response) {
                        alert("Successfully added!")
                    }
                })
                addfavouritebtn.textContent = "Added";
            }
        })
        const img = document.querySelector(".detailpage-img");
        console.log(img);
    </script>
    
</body>
</html>