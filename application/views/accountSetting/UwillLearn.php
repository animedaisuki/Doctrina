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

<?php echo form_open(base_url().'Create_course/add_learned'); ?>
<div class="createNewCourse-container">
        <div class="createNewCourse-heading">
            <h3>Create new course</h3>
        </div>
        <div class="createNewCourse-inputs-container">
            <div class="createNewCourse-whatyouwilllearn">
                <h4 class="mtb-1">What you will learn:</h4>
                <div class="createNewCourse-learnAdd-btn">
                    <button>+</button>
                </div>
            </div>
            <div class="createNewCourse-next-btn mtb-1">
                <button type= "submit" name="next" value="next1">Next</button>
            </div>
        </div>
        <input type = "hidden" id="UwillLearn-course-uuid" name = "uuid" value="<?php echo $uuid; ?>">
    </div>
<?php echo form_close(); ?>
</body>
<script>

const learnAddBtn = document.querySelector(".createNewCourse-learnAdd-btn button");
const whatyouwilllearn = document.querySelector(".createNewCourse-whatyouwilllearn");
let numberofitem = 1;
learnAddBtn.addEventListener("click",function(e){
    e.preventDefault();
    let item = document.createElement('div');
    item.classList.add('createNewCourse-textarea-container')
    item.innerHTML = `<textarea type="text" name= "${numberofitem}" placeholder= "${numberofitem}"></textarea>`;
    numberofitem++;
    whatyouwilllearn.insertBefore(item,learnAddBtn.parentNode);
    
})

</script>
</html>