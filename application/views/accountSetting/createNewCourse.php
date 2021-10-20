<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/createNewCourse.css">
</head>
<body>
<?php echo form_open_multipart(base_url().'Create_course/courseCreate'); ?>
    <div class="createNewCourse-container">
        <div class="createNewCourse-heading">
            <h3>Create new course</h3>
        </div>
        <div class="createNewCourse-inputs-container">
            <div class="createNewCourse-courseName">
                <input type="text" placeholder="Course name:" name="Coursename" required>
            </div>
            <div class="createNewCourse-Field">
                <p class="createField">Field</p>
                <select name="Field" value="python" required>
                  <option value="" disabled>Programming</option>
                  <option value="python" selected>Python</option>
                  <option value="java">Java</option>
                  <option value="webdevelopment">Web Development</option>
                  <option value="datascience">Data Science</option>
                  <option value="mybatis">Mybatis</option>
                  <option value="php">PHP</option>
                  <option value="codeigniter">CodeIgniter</option>
                  <option value="" disabled>Art</option>
                  <option value="sketch">Sketch</option>
                  <option value="painting">Painting</option>
                  <option value="sculpture">Sculpture/option>
                </select>
            </div>
            <div class="createNewCourse-intro">
                <textarea type="text" placeholder="Intro:" name="Introduction" required></textarea>
            </div>
            <div class="createNewCourse-description">
                <textarea type="text" placeholder="Course description:" name="Description" required></textarea>
            </div>
            <!-- <div class="createNewCourse-whatyouwilllearn">
                <h4 class="mtb-1">What you will learn:</h4>
                <div class="createNewCourse-learnAdd-btn">
                    <button>+</button>
                </div>
            </div> -->
            <div class="createNewCourse-uploadImg">
                <p>Upload your course cover page image here</p>
                <input type="file" name="filePicture">
            </div>
            <input id="createNewCourse-uuid" type="hidden" name="uuid">
            <div class="createNewCourse-next-btn mtb-1">
                <button id = "createNewCourse-next-button">Next</button>
            </div>
        </div>
    </div>
<?php echo form_close(); ?>
</body>
<script>
    const nextButton = document.querySelector("#createNewCourse-next-button");
    const uuidInput = document.querySelector("#createNewCourse-uuid");
    function generateUUID() {
        var d = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (d + Math.random()*16)%16 | 0;
            d = Math.floor(d/16);
            return (c=='x' ? r : (r&0x3|0x8)).toString(16);
        });
        return uuid;
    };
    nextButton.addEventListener("click",function(){
        var uuid = generateUUID();
        uuidInput.value = uuid;
        console.log(uuidInput.value);
    })

    const learnAddBtn = document.querySelector(".createNewCourse-learnAdd-btn button");
    const whatyouwilllearn = document.querySelector(".createNewCourse-whatyouwilllearn");
    let numberofitem = 1;
    learnAddBtn.addEventListener("click",function(){
        let item = document.createElement('div');
        item.classList.add('createNewCourse-textarea-container')
        item.innerHTML = `<textarea type="text" name= ${numberofitem}>${numberofitem}. </textarea>`;
        numberofitem++;
        whatyouwilllearn.insertBefore(item,learnAddBtn.parentNode);
        
    })
    const description = document.querySelector(".createNewCourse-description textarea");
    description.addEventListener("click", function(){
        console.log(description.value);
    })
</script>
</html>