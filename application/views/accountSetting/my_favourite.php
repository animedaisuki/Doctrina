<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Week 2 Workshop Example</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/AccountSetting.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/my_favourite.css">
    <script src="https://kit.fontawesome.com/cc3e753279.js" crossorigin="anonymous"></script>
</head>
<div class="My-favorite-body">
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
                
                    <h2>My <?php echo $title; ?> courses</h2>
                </div>
            </div>
        <div class="My-Favourite-Container">
            <div class="My-Favourite-box">
            <div class="My-Favourite-table-responsive">
            <table class="My-Favourite-table">
            <tr>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>TIME</th>
                <th>MORE</th>
            </tr>
            <?php
            if($title == 'favourite') {
                foreach($list->result() as $row)
                {
                    echo '
                    <tr>
                        <td>'.$row->course_name.'</td>
                        <td style="display:none" class="favourite-course-id" >'.$row->course_id.'</td>
                        <td>'.$row->username.'</td>
                        <td>'.$row->upload_date.'</td>
                        <td class="My-Favourite-Table-container">
                            <div id="My-favourite-More">···</div>
                            <ul class="My-Favourite-drop-down">
                            <div class="My-Favourite-More">
                                <li>Share</li>
                                <ul class="My-Favourite-drop-down2">
                                    <div>
                                        <a><li>Wechat</li></a>
                                    </div>
                                    <div>
                                        <a><li>Twitter</li></a>
    
                                    </div>
                                    <div>
                                        <a><li>Facebook</li></a>
                                    </div>
                                    <div>
                                        <a><li>Weibo</li></a>
                                    </div>
                                </ul>
                            </div>
                            <div>
                                <li class="uploads-details"><a href="DetailPage?cid='.$row->course_id.'">Details</a></li>
                            </div>
                            <div>
                            <li><a class="delete-favourite-course" href="DetailPage/delete_favourite_course?cid='.$row->course_id.'">Delete</a></li>

                            </div>
                        </ul>
                        </td>
                    </tr>
                    ';
                }
            }
            else {
                foreach($list->result() as $row)
                {
                    echo '
                    <tr>
                        <td>'.$row->course_name.'</td>
                        <td style="display:none" class="course-id">'.$row->course_id.'</td>
                        <td>'.$row->username.'</td>
                        <td>'.$row->upload_date.'</td>
                        <td class="My-Favourite-Table-container">
                            <div id="My-favourite-More">···</div>
                            <ul class="My-Favourite-drop-down">
                                <div class="My-Favourite-More">
                                    <li class="uploads-details"><a href="DetailPage?cid='.$row->course_id.'">Details</a></li>
                                </div>
                                <div>
                                    <li><a href="Upload?uuid='.$row->uuid.'">Edit</a></li>
                                </div>
                                <div>
                                    <li><a class="my_upload_delete" href="DetailPage/delete_course?cid='.$row->course_id.'">Delete</a></li>
                                </div>
                             </ul>
                        </td>
                    </tr>
                    ';
                }
            }
            ?>
            </table>
            </div>
            </div>
            <br />
        </div>
        </div>
</div>
</body>
</div>

<script>
    const table = document.querySelector(".My-Favourite-table");
    
    table.addEventListener("click", function(e){
        if(e.target.classList.contains("delete-favourite-course")){
//             const courseid = document.querySelector(".favourite-course-id");
            e.preventDefault();
            let id = e.target.parentNode.parentNode.parentNode.parentNode.parentNode.children[1].textContent;
            e.target.parentNode.parentNode.parentNode.parentNode.parentNode.remove();

            $.ajax({
                url: `<?php echo base_url()?>DetailPage/delete_favourite_course?cid=${id}`,
                method: 'GET',
                success: function (response) {
                    alert("Successfully deleted!")
                }
            })
        }else if (e.target.classList.contains("my_upload_delete")){
//             const courseid = document.querySelector(".course-id");
            e.preventDefault();
            let id = e.target.parentNode.parentNode.parentNode.parentNode.parentNode.children[1].textContent;
            e.target.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
            $.ajax({
                url: `<?php echo base_url()?>DetailPage/delete_course?cid=${id}`,
                method: 'GET',
                success: function (response) {
                    alert("Successfully deleted!")
                }
            })
        }
    
    })
</script>

</html>