<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/upload.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>


</head>

<body>
<!-- <i class="fas fa-caret-down"></i> -->
<input type = "hidden" id = "upload-max-week-of-file" value = "<?php echo $max_week; ?>">
<input type = "hidden" id="upload-cid" value="<?php echo $cid; ?>">
<div class='upload-container'>
    <div class='upload-top'>
        <!-- <div class='upload-background-image'></div>  -->
        <div class='upload-avatar'>
            <img src="<?php echo $picture; ?>" alt="avarta image" class="upload-avatar-image">
            <h1><?php echo $username; ?></h1>
        </div>

        <div class='upload-banner-image'>
            <img src="<?php echo base_url(); ?>assets/img/upload-banner.jpeg" alt="avarta image" class="upload-background-image">
        </div>
    </div>

    <div class='upload-week'>
        <ul class="upload-week-container">
            <li class='upload-week1'>Week 1 <i class="fas fa-caret-down"></i></li>
            <ul class="upload-week-dropdown upload-hide">
                <li class="upload-dropdown-add">+</li>
            </ul>
        </ul>
    </div>


    <div class='upload-middle'>
        <div class='upload-square-left'>
            <h2>Document Area</h2>
            <form action="<?php echo base_url(); ?>Upload/upload_files?week=1" class="dropzone file_dropzone" id="">
                <!-- <input type="file" name="file" /> -->
            </form>
            <div class="upload-file-feedback-container">
                <div class="upload-each-file-outer-container">
                    <!-- <div class="upload-each-file-container">
                        <div class="upload-delete-file-button"></div>
                    </div>
                    <div class="upload-text-container">
                        <p>text</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class='upload-square-right'>
            <h2>Video Area</h2>
            <form action="<?php echo base_url(); ?>Upload/upload_videos?week=1" class="dropzone video_dropzone" id="">
                <!-- <input type="file" name="file" /> -->
            </form>
            <div class="upload-video-feedback-container">
                <div class="upload-each-file-outer-container">
                    <!-- <div class="upload-each-file-container">
                        <div class="upload-delete-file-button"></div>
                    </div>
                    <div class="upload-text-container">
                        <p>text</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <div class='upload-upload'>
        <button class='upload-button'>Upload</button>
    </div> -->

    <!-- <div class ='upload-bottom'>

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

            </div>

        </div> -->

</div>
</body>
<script src="<?php echo base_url(); ?>assets/js/upload.js"></script>
<script>
    const max_week = document.querySelector("#upload-max-week-of-file");
    var max_week_value = max_week.value;
    function generateUUID() {
        var d = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (d + Math.random()*16)%16 | 0;
            d = Math.floor(d/16);
            return (c=='x' ? r : (r&0x3|0x8)).toString(16);
        });
        return uuid;
    };
    console.log(generateUUID());

    var myDropzone_file = new Dropzone(".file_dropzone");
    var myDropzone_video = new Dropzone(".video_dropzone");
    // myDropzone_file.on("complete", function(file) {

    // });

    let weeks = 1;
    const uploadWeek = document.querySelector(".upload-week-container");
    const dropdown = document.querySelector(".upload-week-dropdown");
    const uploadWeek1 = document.querySelector(".upload-week1");
    const add = document.querySelector(".upload-dropdown-add");
    const dropzone = document.querySelector(".dropzone");
    uploadWeek.addEventListener("mouseover",function(){
        dropdown.classList.remove('upload-hide');
    });
    uploadWeek.addEventListener("mouseout",function(){
        dropdown.classList.add('upload-hide');
    });
    add.addEventListener("click",function(){
        let listItem = document.createElement('li');
        listItem.textContent = `Week ${weeks++}`;
        if(weeks>15){
            alert("you have reached the maximum weeks")
        }else{
            dropdown.insertBefore(listItem, add);
        }
    });
    function initialize_week(number) {

        for (let i = 0; i < number ; i++) {
            let listItem = document.createElement('li');
            console.log("for loop result: " + weeks);
            listItem.textContent = `Week ${weeks++}`;
            dropdown.insertBefore(listItem, add);
        }
    }
    initialize_week(max_week_value);

    const uploadFileFeedbackContainer = document.querySelector(".upload-file-feedback-container");
    const uploadVideoFeedbackContainer = document.querySelector(".upload-video-feedback-container");
    const uploadCid = document.querySelector("#upload-cid");

    dropdown.addEventListener("click",function(e){
        if(e.target.classList.value == ''){
            let text = e.target.textContent;
            console.log("line230:" + text.slice(5));
            uploadWeek1.innerHTML = `${text} <i class="fas fa-caret-down"></i>`;
            dropdown.classList.add('upload-hide');
            dropzone.action = `<?php echo base_url(); ?>Upload/upload_files?week=${text.slice(5)}`;
            console.log(dropzone.action);
            myDropzone_file.options.url = `<?php echo base_url(); ?>Upload/upload_files?week=${text.slice(5)}`;
            myDropzone_file.removeAllFiles();
            uploadFileFeedbackContainer.innerHTML = '';
            uploadVideoFeedbackContainer.innerHTML = '';
            console.log(myDropzone_file);
            console.log("----------------------------");
            //video dropzone;
            myDropzone_video.options.url = `<?php echo base_url(); ?>Upload/upload_videos?week=${text.slice(5)}`;
            myDropzone_video.removeAllFiles();
            console.log(myDropzone_file);

            var currentWeek = text.slice(5);
            var cid = uploadCid.value;
            $.ajax({
                url:"<?php echo base_url(); ?>Upload/retrieve_file",
                method:"POST",
                data:{currentWeek:currentWeek,cid:cid},
                datatype:'json',
                success:function(response) {
                    var data = JSON.parse(response);
                    // console.log(JSON.parse(response));
                    for(var i = 0; i<data.length; i++) {
                        if(data[i].fileType == "file") {
                            console.log(data[i]);
                            addItemToFeedback(data[i].uuid,uploadFileFeedbackContainer,data[i].filename);
                        } else {
                            console.log(data[i].fileType);
                            addItemToFeedback(data[i].uuid,uploadVideoFeedbackContainer,data[i].filename);
                        }
                    }
                }
            })

        }
    });
    initializePage(uploadCid.value);
    function initializePage(cid) {
        var currentWeek = 1;
        $.ajax({
            url:"<?php echo base_url(); ?>Upload/retrieve_file",
            method:"POST",
            data:{currentWeek:currentWeek,cid:cid},
            datatype:'json',
            success:function(response) {
                var data = JSON.parse(response);
                // console.log(JSON.parse(response));
                for(var i = 0; i<data.length; i++) {
                    if(data[i].fileType == "file") {
                        addItemToFeedback(data[i].uuid,uploadFileFeedbackContainer,data[i].filename);
                    } else {
                        addItemToFeedback(data[i].uuid,uploadVideoFeedbackContainer,data[i].filename);
                    }
                }
            }
        })
    }
    // <div class="upload-each-file-outer-container">
    // <div class="upload-each-file-container">
    //     <div class="upload-delete-file-button"></div>
    // </div>
    // <div class="upload-text-container">
    //     <p>text</p>
    // </div>
    //                 </div>


    // myDropzone_file.on("complete",function(file) {
    //     console.log("complete upload");
    //     var fileItem = document.createElement("div");
    //     console.log(file);
    //     var fileInfo = document.createElement("input");
    //     fileInfo.style.display = "none";
    //     fileInfo.value =

    //     fileItem.classList.add("upload-each-file-outer-container");
    //     fileItem.innerHTML = `<div class="upload-each-file-container">
    //                                 <div class="upload-delete-file-button"></div>
    //                           </div>
    //                           <div class="upload-text-container">
    //                                 <p>text</p>
    //                           </div>`;
    //     uploadFileFeedbackContainer.appendChild(fileItem);
    // })

    //listen drop event
    var uuid;
    var currentWeek;
    myDropzone_file.on("addedfile",function(file){
        var weekTitle = document.querySelector(".upload-week1");
        uuid = generateUUID();
        currentWeek = weekTitle.textContent.slice(5);
        myDropzone_file.options.url = `<?php echo base_url(); ?>Upload/upload_files?week=${currentWeek.trim()}&uuid=${uuid}`;
        console.log("drop:" + uuid);
    })
    myDropzone_video.on("addedfile",function(file){
        var weekTitle = document.querySelector(".upload-week1");
        uuid = generateUUID();
        currentWeek = weekTitle.textContent.slice(5);
        myDropzone_video.options.url = `<?php echo base_url(); ?>Upload/upload_videos?week=${currentWeek.trim()}&uuid=${uuid}`;
        console.log("drop:" + uuid);
    })
    myDropzone_file.on("complete",function(file) {
        // var uuid = generateUUID();
        console.log("complete:"+ uuid);

        console.log(myDropzone_file);
        // myDropzone_file.on("complete",function(file) {

        // var fileItem = document.createElement("div");
        // console.log(file);
        // var fileInfo = document.createElement("input");
        // fileInfo.style.display = "none";

        // fileInfo.val = uuid;
        // console.log("uuid is:" + fileInfo.val);
        // fileItem.classList.add("upload-each-file-outer-container");
        // fileItem.innerHTML = `<div class="upload-each-file-container">
        //                         <div class="upload-delete-file-button"></div>
        //                     </div>
        //                     <div class="upload-text-container">
        //                         <p>text</p>
        //                     </div>`;
        // fileItem.appendChild(fileInfo);
        // uploadFileFeedbackContainer.appendChild(fileItem);

        // })
        // myDropzone_file.on("success",function(file){
        // console.log("workTimes");
        // myDropzone_file.removeAllFiles();
        console.log();
        var fileName = myDropzone_file.files.slice(-1)[0].name
        addItemToFeedback(uuid,uploadFileFeedbackContainer,fileName);
        // })



    })
    function addItemToFeedback(uuid,itemObject,fileName) {
        var fileItem = document.createElement("div");
        // console.log(file);
        var fileInfo = document.createElement("input");
        fileInfo.style.display = "none";

        fileInfo.val = uuid;
        // console.log("uuid is:" + fileInfo.val);
        var fileType = "video";
        if (itemObject == uploadFileFeedbackContainer) {
            var fileType = "file";
        }
        fileItem.classList.add("upload-each-file-outer-container");
        fileItem.innerHTML = `<div class="upload-each-file-container">
                                <div class="upload-delete-` + fileType + `-button"></div>
                            </div>
                            <div class="upload-text-container">
                                <p>`+  fileName +`</p>
                            </div>`;
        fileItem.appendChild(fileInfo);
        itemObject.appendChild(fileItem);
    }
    myDropzone_video.on("complete",function(file) {
        // myDropzone_video.options.url = `<?php echo base_url(); ?>Upload/upload_videos?week=${currentWeek.trim()}&uuid=${uuid}`;
        console.log(currentWeek);
        // myDropzone_file.on("complete",function(file) {
        console.log("complete upload");
        // var fileItem = document.createElement("div");
        // console.log(file);
        // var fileInfo = document.createElement("input");
        // fileInfo.style.display = "none";

        // fileInfo.val = uuid;
        // console.log("uuid is:" + fileInfo.val);
        // fileItem.classList.add("upload-each-file-outer-container");
        // fileItem.innerHTML = `<div class="upload-each-file-container">
        //                         <div class="upload-delete-video-button"></div>
        //                     </div>
        //                     <div class="upload-text-container">
        //                         <p>text</p>
        //                     </div>`;
        // fileItem.appendChild(fileInfo);
        // uploadVideoFeedbackContainer.appendChild(fileItem);
        var fileName = myDropzone_video.files.slice(-1)[0].name
        addItemToFeedback(uuid,uploadVideoFeedbackContainer,fileName);

        // })
    })


    //delete file item
    uploadFileFeedbackContainer.addEventListener('click',function(e) {
        console.log("line386" + ":work");
        if(e.target.classList.contains("upload-delete-file-button")){
            var uuid = e.target.parentNode.parentNode.lastChild.val;
            console.log(uuid);
            e.target.parentNode.parentNode.remove();
            $.ajax({
                url:"<?php echo base_url(); ?>Upload/delete_file",
                method:"POST",
                data:{uuid:uuid},
                datatype:'json',
                success:function(response) {

                }
            })
        }


    })

    uploadVideoFeedbackContainer.addEventListener('click',function(e){
        console.log("line406" + ":work");
        if(e.target.classList.contains("upload-delete-video-button")){
            console.log("line408" + ":work");
            var uuid = e.target.parentNode.parentNode.lastChild.val;
            console.log(uuid);
            e.target.parentNode.parentNode.remove();
            $.ajax({
                url:"<?php echo base_url(); ?>Upload/delete_video",
                method:"POST",
                data:{uuid:uuid},
                datatype:'json',
                success:function(response) {

                }
            })
        }
    })




</script>

<!-- <?php
if(!empty($files)){
    foreach($files as $value){
        $file_path = 'uploads/'.$value["file_name"];
        $file_type = mime_content_type($file_path);
        ?>
	<embed src="<?php echo base_url('uploads/'.$value["file_name"]); ?>" type="<?php echo $file_type; ?>" width="350px" height="240px" />
	<?php
    } }?> -->
</html>