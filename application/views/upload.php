<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/upload.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>

</head>
<body>
<div class='upload-container'>
    <div class='upload-top'>

        <!-- <div class='upload-background-image'></div>  -->
        <div class='upload-avatar'>
            <img src="<?php echo base_url(); ?>assets/img/upload-avatar.png" alt="avarta image" class="upload-avatar-image">
            <h1>Name</h1>
        </div>

        <div class='upload-banner-image'>
            <img src="<?php echo base_url(); ?>assets/img/upload-banner.jpeg" alt="avarta image" class="upload-background-image">
        </div>


    </div>

    <div class='upload-week'>
        <button type="button" disabled class='upload-week1'>Week 1</button>
    </div>

    <div class='upload-middle'>
        <div class='upload-square-left'>
            <h2>Document Area</h2>
            <p>Drop the files here or click to upload.</p>
            <p>(This is just a demo dropzone. Selected files are not actually uploaded.)</p>

        </div>
        <div class='upload-square-right'>
            <h2>Video Area</h2>
            <p>Drop the files here or click to upload.</p>
            <p>(This is just a demo dropzone. Selected files are not actually uploaded.)</p>

        </div>
    </div>

    <div class='upload-upload'>
        <button class='upload-button'>Upload</button>
    </div>

    <div class ='upload-bottom'>

        <div class='upload-progress-bar'>
            <h3>Progress Bar</h3>

            <div class='upload-unsolved-question'>
                <p>Unsolved Question</p>
                <div class ="upload-unsolved-bar">
                    <div class="upload-red-bar">10</div>
                </div>
            </div>

            <div class='upload-solved-question'>
                <p>Solved Question</p>
                <div class ="upload-solved-bar">
                    <div class="upload-blue-bar">20</div>
                </div>
            </div>

        </div>


        <div class='upload-comment'>
            <h3>Comment (66) </h3>
            <div class='upload-comment-place'>
                <div class='upload-comment-order'>
                    <p>Order by</p>
                    <p>Newest &#9662</p>
                </div>

                <hr>

                <div class='upload-comment-comment'>
                    <div class='upload-comment-left'>
                        <img src="<?php echo base_url(); ?>assets/img/upload-avatar.png" alt="avatar image" class="upload-comment-image">
                    </div>

                    <div class='upload-comment-right'>
                        <div class='upload-comment-username'>
                            <h4>Username</h4>
                            <p>8 min ago</p>
                        </div>
                        <div class='upload-comment-box'>
                            <p>Maybe there are some parts that you can change.... </p>
                        </div>
                        <button id='upload-switch-button' class='upload-comment-switch-button'><span onclick="replaceword(this,'Unsovled','Solved');" >Unsovled</span></button>
                    </div>

                </div>
                <hr>
                <div class='upload-comment-comment'>
                    <div class='upload-comment-left'>
                        <img src="<?php echo base_url(); ?>assets/img/upload-avatar.png" alt="avarta image" class="upload-comment-image">
                    </div>

                    <div class='upload-comment-right'>
                        <div class='upload-comment-username'>
                            <h4>Username</h4>
                            <p>8 min ago</p>
                        </div>
                        <div class='upload-comment-box'>
                            <p>Maybe there are some parts that you can change.... </p>
                        </div>
                        <button id='upload-switch-button' class='upload-comment-switch-button'><span onclick="replaceword(this,'Unsovled','Solved');" >Unsovled</span></button>
                    </div>

                </div>
                <hr>
                <div class='upload-comment-comment'>
                    <div class='upload-comment-left'>
                        <img src="<?php echo base_url(); ?>assets/img/upload-avatar.png" alt="avarta image" class="upload-comment-image">
                    </div>

                    <div class='upload-comment-right'>
                        <div class='upload-comment-username'>
                            <h4>Username</h4>
                            <p>8 min ago</p>
                        </div>
                        <div class='upload-comment-box'>
                            <p>Maybe there are some parts that you can change.... </p>
                        </div>
                        <button id='upload-switch-button' class='upload-comment-switch-button'><span onclick="replaceword(this,'Unsovled','Solved');" >Unsovled</span></button>
                    </div>
                </div>
            </div>
            <button class='upload-comment-add-comment'>Add comment</button>

        </div>

    </div>

</div>
</body>
<script src="<?php echo base_url(); ?>assets/js/upload.js"></script>
</html>