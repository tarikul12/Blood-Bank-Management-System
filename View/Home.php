<?php
include("../View/header.php");
include("../View/footer.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../JS/home.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Home</title>
</head>

<div class="services_section layout_padding">
    <div class="container">

        <body>

            <div id="flip" class="services_taital">
                <h1>Services</h1>
            </div>
            <div id="panel" class="services_text">
                <div class="services">
                    <p class="service_p">12173<br>Blood donors</p>
                </div>
                <div class="services">
                    <p class="service_p">34<br>Reporting facilities</p>
                </div>
                <div class="services">
                    <p class="service_p">1874<br>Transfusion received</p>
                </div>
                <div class="services">
                    <p class="service_p">2<br>Reported transfusion reactions</p>
                </div>

            </div>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div><img src="../Image/home9.png" class="services_img"></div>
                        <div class="btn_main"><a href="#">Rafting</a></div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="../Image/home10.jpg" class="services_img"></div>
                        <div class="btn_main active"><a href="#">Hiking</a></div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="../Image/home8.jpg" class="services_img"></div>
                        <div class="btn_main"><a href="#">Camping</a></div>
                    </div>
                </div>
            </div>
    </div>
</div>
<center>
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h1 class="about_taital">About Us</h1>
                        <p class="about_text">
                            "Dedicated to saving lives, our blood bank ensures a stable and secure supply of life-saving blood for those in need."
                            <br>
                            "Committed to the well-being of our community, we provide a reliable source of blood donations, making a positive impact on health care and emergencies."
                        </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
</center>
<div class="col-md-6 padding_right_0">
    <div><img src="../Image/hom11.png" class="about_img">
        <center>
            <p>Blood Bank Management Software Market 2023</p>
        </center>
    </div>
</div>
</div>
</div>
</div>

<div class="blog_section layout_padding">
    <div class="container">
        <h1 class="blog_taital">See Our Video</h1>
        <p class="blog_text">"Support World Blood Donor Day 2023 and save lives through blood donation at the blood bank."</p>
        <div class="play_icon_main">
            <div class="play_icon">
                <h1>World Blood Donor Day 2023</h1>

                <video width="320" height="240" controls autoplay>
                    <source src="../Image/hh.mp4" type="video/mp4">
                    <source src="../Image/hh.mp4" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<div class="client_section layout_padding">
    <div class="container">
        <h1 class="client_taital">Testimonial</h1>
        <div class="client_section_2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_main">
                            <div class="box_left">
                                <p class="lorem_text">
                                    "Being a part of the blood bank has been a profound experience.
                                    Witnessing the selflessness of donors and the impact their contributions have on saving lives is truly inspiring. Our dedicated team works tirelessly to ensure a safe and reliable blood supply, and the heartfelt testimonials from those whose lives have been touched by these donations reinforce the importance of our mission. Together, as a community,
                                    we continue to make a difference, one drop at a time."</p>

                            </div>
                            <div><img src="../Image/home7.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="choose_section layout_padding">
    <div class="container">
        <h1 class="choose_taital">Why Choose Us</h1>
        <p class="choose_text">Blood banks collect blood and separate it into its various components so they can be used most effectively according to the needs of the patient. Red blood cells carry oxygen, platelets help the blood clot, and plasma has specific proteins that allow proper regulation of coagulation and healing.</p>
        <div class="read_bt_1"><a href="#">Read More</a></div>
        <div class="newsletter_box">
            <h1 class="let_text">Let Start Talk with Us</h1>
            <div class="getquote_bt"><a href="#">Get A Quote</a></div>
        </div>
    </div>
</div>

</body>

</html>