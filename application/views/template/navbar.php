<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <meta charset="UTF-8">-->
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/navbar.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>
<header class="navbar-header">
    <div class="container">
        <nav class="navbar-flex-nav">
            <div class="navbar-logo-container">
                <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/logo-w.png" alt=""
                                                             class="navbar-logo"></a>
            </div>
            <div class="navbar-major-container">
                <div id="navbar-major">Major <i class="fas fa-caret-down"></i></div>
                <ul class="navbar-drop-down">
                    <div class="navbar-major-programming">
                        <li>Programming</li>
                        <i class="fas fa-chevron-right"></i>
                        <ul class="navbar-drop-down-small">
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=java">
                                    <li>Java</li>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=javascript">
                                    <li>Javascript</li>
                                </a>

                            </div>
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=python">
                                    <li>Python</li>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=php">
                                    <li>PHP</li>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=datascience">
                                    <li>Data Science</li>
                                </a>
                            </div>
                        </ul>
                    </div>
                    <div class="navbar-major-programming">
                        <li>Art</li>
                        <i class="fas fa-chevron-right"></i>
                        <ul class="navbar-drop-down-small">
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=sketch">
                                    <li>Sketch</li>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=painting">
                                    <li>Painting</li>
                                </a>

                            </div>
                            <div>
                                <a href="<?php echo base_url(); ?>Category?Major=sculpture">
                                    <li>Sculpture</li>
                                </a>
                            </div>

                        </ul>
                    </div>
                    <div>
                        <li class="navbar-major-math">Math</li>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div>
                        <li class="navbar-major-biology">Biology</li>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </ul>


            </div>


            <div class="navbar-icon-container">
                <i class="fas fa-search"></i>
            </div>

            <div class="navbar-searchbar-container">
                <?php echo form_open('search_results/do_search'); ?>
                <input type="text" name="auto" id="auto">
                <?php echo form_close();?>
            </div>

            <ul class="navbar-navbar-container">
                <a href="<?php echo base_url();?>about_us" class="about-us">
                    <li>About us</li>
                </a>

                <?php if (!$this->session->userdata('login')) : ?>
                    <div class="navbar-login-signup">
                        <a href="<?php echo base_url(); ?>login" id="navbar-login">
                            <li>Login</li>
                        </a>
                        <a href="<?php echo base_url(); ?>Signup" id="navbar-signup">
                            <li>Sign up</li>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($this->session->userdata('login')) : ?>
                <div class="navbar-account-signedin">
                    <div><a href="<?php echo base_url(); ?>Create_course">Create New Course</a></div>
                    <div><a href="<?php echo base_url(); ?>my_upload">My uploads</a></div>
                    <div><a href="<?php echo base_url(); ?>my_favourite">My favorites</a>
                    </div>
                    <!-- <div class="navbar-account"> -->
                    <div class="navbar-profile-container">
                        <div id="navbar-major">
                            <img src="<?php echo $_SESSION['picture']; ?>" class="login-google-picture"/>

                        </div>
                        <ul class="navbar-drop-down-profile">
                            <!-- <div class="navbar-major-programming"> -->
                            <div>
                                <li class="navbar-major-art"><a class="login-logout"
                                                                href="<?php echo base_url(); ?>login/logout">Log out</a>
                                </li>
                            </div>
                            <div>
                                <li class="navbar-major-math"><a href="<?php echo base_url(); ?>My_profile"
                                                                 class="login-logout">My profiles</a></li>
                            </div>
                        </ul>
                        <!-- </div> -->
                    </div>
                    <?php endif; ?>

            </ul>
        </nav>
    </div>
</header>

</body>

<script type='text/javascript'>
    $(document).ready(function () {
        // Initialize
        $("#auto").autocomplete({
            source: function (request, response) {
                // Fetch data
                $.ajax({
                    url: "<?php echo base_url()?>ajax_search/search_course_name",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function (data) {
                        response(data);
                        console.log(request.term);
                        // console.log(data);
                        // console.log(response);
                        // console.log(response(data));
                        var items = [];
                        $.each(data, function (k, val) {
                            items.push(val.course_name);
                            console.log(items);
                            response(items);
                        });
                    }
                });
            },
            select: function (event, ui) {
                $('#auto').val(ui.item.label); // display the selected text
                return false;
            }
        });

    });

    // <input type="text" name="auto" id="auto">
    // $("#auto").keypress(function (event) {
    //     if (event.which === 13) {
            // alert("Submit!");
            // event.preventDefault();
            // $("#auto").submit();
    //     }
    // });


</script>

<script src="../js/navbar.js"></script>

</html>