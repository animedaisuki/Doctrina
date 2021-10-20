<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homepage.css">

</head>
<body>



<input id="initial-data" value='<?php echo $python; ?>' style="display:none;">
<input id="favourite_teacher_name" value='<?php echo $popular_teachers; ?>'style="display:none;">

<input id="popular_courses" value='<?php echo $popular_course; ?>'style="display:none;">
<input id="base_url" value='<?php echo base_url(); ?>' style="display:none;">

    <div class="homepage-container">
        <div class="homepage-head-banner">
            <div class="homepage-background-image">
                <div class="homepage-description">
                    <h1>Best online learning platform</h1>
                    <p>Join us and start your learning and sharing journey.</p>

                </div>
            </div>
        </div>
        <div class="homepage-whatweoffer">
            <h3 class="homepage-whatweoffer-heading">What we offer</h3>
            <div class="homepage-whatweoffer-container">
                <div class="homepage-whatweoffer-item">
                    <img src="<?php echo base_url(); ?>assets/img/exchange-experience.png" alt="">
                    <h3>Exchange experience</h3>
                </div>
                <div class="homepage-whatweoffer-item">
                    <img src="<?php echo base_url(); ?>assets/img/courseware.png" alt="">
                    <h3>Courseware</h3>
                </div>
                <div class="homepage-whatweoffer-item">
                    <img src="<?php echo base_url(); ?>assets/img/education-information.png" alt="">
                    <h3>Education information</h3>
                </div>
                <div class="homepage-whatweoffer-item">
                    <img src="<?php echo base_url(); ?>assets/img/teaching-experience.png" alt="">
                    <h3>Teaching experience</h3>
                </div>
            </div>
        </div>
        <div class="homepage-mostviewed">
            <div class="homepage-mostviewed-description">
                <h3>Most viewed</h3>
                <p>Choose from 155,000 online teaching resources with experienced teaching staff</p>
            </div>
        
            <div class="homepage-mostviewed-navcontainer">
                <nav>
                    <ul id="homepage-major-container">
                        <li id="homepage-python" class="current">Python</li>
                        <li id="homepage-java">Java</li>
                        <li id="homepage-web-development">Web development</li>
                        <li id="homepage-data-science">Data Science</li>
                        <li id="homepage-Mybatis">Mybatis</li>
                        <li id="homepage-php">PHP</li>
                        <li id="homepage-codeIgniter">CodeIgniter</li>
                    </ul>
                </nav>
            </div>
            <div class="homepage-mostviewed-itemcontainer">
                <h3>Expand your career opportunities with python</h3>
                <p class="homepage-mostviewed-p">Whether you work in machine learning or finance, or are pursuing a career in web development or data science, Python is one of the most important skills you can learn. Python's simple syntax is especially suited for desktop, web, and business applications. Python's design philosophy emphasizes readability and usability. Python was...</p>
                
                <a href="" class="homepage-mostviewed-btn">
                        Explore Python
                </a>

                <div class="homepage-mostviewed-eachitem-container">


                </div>
            </div>
        </div>
        <div class="homepage-mostdownload">
            <div class="homepage-mostdownload-description">
                <h3>Recommended to you</h3>
            </div>
            <div class="homepage-mostdownload-itemcontainer">
                <div class="homepage-mostdownload-eachitem-container">


                </div>
            </div>
        </div>
        <div class="homepage-information-container">
            <div class="hompage-info-container">
                <img src="<?php echo base_url(); ?>assets/img/homepage-courseware.png" alt="">
                <div class="homepage-infodescription-container">
                    <h3>Courseware</h3>
                    <p>Courseware on a wide range of subjects to help learn better.</p>
                </div>
            </div>
        </div>
        <div class="homepage-information-container">
            <div class="hompage-info-container">
                <div class="homepage-infodescription-container">
                    <h3>Video</h3>
                    <p>Come here to find the best learning videos for you.</p>
                </div>
                <img src="<?php echo base_url(); ?>assets/img/homepage-video.png" alt="">
            </div>
        </div>
        <div class="homepage-favorite-teacher">
            <h3>Students favorite teacher</h3>
            <div class="homepage-teacheritem-container">


            
            </div>
        </div>
    </div>
    
</body>
    <script>
        const majors = document.querySelector("#homepage-major-container");
        const container = document.querySelector(".homepage-mostviewed-itemcontainer");

        const base_url = document.querySelector("#base_url");


        var current_major = "";
        majors.addEventListener("click",function(e){
            if(['Python','Java','Web development', 'Data Science', 'Mybatis','PHP','CodeIgniter'].includes(e.target.textContent)){
                current_major = e.target.textContent.toLowerCase().split(" ").join("");
                for(let i = 0 ;i<majors.children.length; i++){
                    majors.children[i].classList.remove("current");
                }
                e.target.classList.add("current");
                $.ajax({
                    url:`<?php echo base_url(); ?>Home/fetch_most_favourite_course`,
                    data:{field:current_major},
                    method:"POST",
                    success:function(response) {
                        var data = JSON.parse(response)
                        console.log(data);
                        container.innerHTML = `
                        <h3>Expand your career opportunities with ${e.target.textContent}</h3>
                        <p class="homepage-mostviewed-p">Whether you work in machine learning or finance, or are pursuing a career in web development or data science, ${e.target.textContent} is one of the most important skills you can learn. </p>

                        <a href="" class="homepage-mostviewed-btn">
                                Explore ${e.target.textContent}
                        </a>
                        `
                        const eachitemcontainer = document.createElement("div");
                        eachitemcontainer.classList.add("homepage-mostviewed-eachitem-container");

                        for(let i = 0; i<data.length; i++){
                            let item = document.createElement("div");
                            item.classList.add("homepage-mostviewed-item");
                            item.innerHTML = `
                            <a href="">
                                <img src="${data[i].course_img_path}" alt="">
                                <h4>${data[i].course_name}</h4>
                                <p>${data[i].username}</p>
                                <div class="homepage-mostviewed-rating">
                                    <p><i class="fab fa-hotjar"></i>${data[i].favourite_number}</p>
                                </div>
                            </a>
                            `
                            eachitemcontainer.appendChild(item);
                        }
                        container.appendChild(eachitemcontainer);
                    }
                })
            }

        })

        function init(){
            const init = document.querySelector("#initial-data");
            const initialData = JSON.parse(init.value);
            const container = document.querySelector(".homepage-mostviewed-eachitem-container");
            for(let i = 0; i<initialData.length; i++){
                let item = document.createElement("div");
                item.classList.add("homepage-mostviewed-item");
                item.innerHTML = `
                <a href="${base_url.value}DetailPage?cid=${initialData[i].cid}">
                    <img src="${initialData[i].course_img_path}" alt="">
                    <h4>${initialData[i].course_name}</h4>
                    <p>${initialData[i].username}</p>
                    <div class="homepage-mostviewed-rating">
                        <p><i class="fab fa-hotjar"></i>${initialData[i].favourite_number}</p>
                    </div>
                </a>
                `
                container.appendChild(item);
            }
        };
        init();

        function favouriteTeacher(){
            const init = document.querySelector("#favourite_teacher_name");
            const initialData = JSON.parse(init.value);
            const teacherContainer = document.querySelector(".homepage-teacheritem-container");
            for(let i = 0; i<initialData.length; i++){
                let teacheritem = document.createElement("div");
                teacheritem.classList.add("homepage-teacheritem")
                teacheritem.innerHTML = `
                <div class="homepage-teacher-description">
                    <img src="${initialData[i].avatar}" alt="">
                    <p>Teacher ${initialData[i].username} has</p>
                </div>
                <p class="homepage-teacher-strong">${initialData[i].favourite_number} views</p>
                `
                teacherContainer.appendChild(teacheritem);
            }
        }
        favouriteTeacher();

        function favouriteCourse(){
            const init = document.querySelector("#popular_courses");
            const initialData = JSON.parse(init.value);
            console.log(initialData);
            const courseContainer = document.querySelector(".homepage-mostdownload-eachitem-container");
            for(let i = 0; i<initialData.length; i++){
                let courseitem = document.createElement("div");
                courseitem.classList.add("homepage-mostdownload-item")
                courseitem.innerHTML = `
                <a href="">
                    <img src="${initialData[i].course_img_path}" alt="">
                    <h4>${initialData[i].course_name}</h4>
                    <p>${initialData[i].username}</p>
                    <div class="homepage-mostdownload-rating">
                        <p><i class="fab fa-hotjar"></i>${initialData[i].favourite_number}</p>
                    </div>
                </a>
                `
                courseContainer.appendChild(courseitem);
            }
        }
        favouriteCourse();





    </script>
</html>