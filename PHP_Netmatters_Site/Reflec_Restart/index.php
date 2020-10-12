<?php 
    include 'header.php'; 
    echo "Hello";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Website Title</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="SCSS/input.css"> 
        <link rel="stylesheet" href="SCSS/pushy.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/font-awesome-4.7.0/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Plugins/slick-1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="Plugins/slick-1.8.1/slick/slick-theme.css"/>
    </head>
    <body>

            <div class="image_slideshow office push-this">
                <div> <!-- Slide Image 1 -->
                    <img src="Images/Web_Design.jpg"  alt="Office Image">
                    <div class="image_text_boundaries">
                        <div class="image_text">
                            <h1 class="heading">Web Design</h1>
                            <p class="sub_text">For businesses looking to make a strong and effective first impression</p>
                            <a class="slide_button_web" href="#" target="_blank">Find Out More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div> <!-- Slide Image 2 -->
                    <img src="Images/IT_Support.jpg"  alt="Office Image">
                    <div class="image_text_boundaries">
                        <div class="image_text">
                            <h1 class="heading">IT Support</h1>
                            <p class="sub_text">Fast and cost-effective IT support services for your business</p>
                            <a class="slide_button_it" href="#" target="_blank">Find Out More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div> <!-- Slide Image 3 -->
                    <img src="Images/Telecoms.jpg"  alt="Office Image">
                    <div class="image_text_boundaries">
                        <div class="image_text">
                            <h1 class="heading">Telecoms Services</h1>
                            <p class="sub_text">A new approach to connectivity, see how we can help your business</p>
                            <a class="slide_button_telecoms" href="#" target="_blank">Find Out More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div> <!-- Slide Image 4 -->
                    <img src="Images/Bespoke_Software.jpg"  alt="Office Image">
                    <div class="image_text_boundaries">
                        <div class="image_text">
                            <h1 class="heading">Bespoke Software</h1>
                            <p class="sub_text">Bring your business together with solutions that grow with you</p>
                            <a class="slide_button_bespoke" href="#" target="_blank">Find Out More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div> <!-- Slide Image 5 -->
                    <img src="Images/Digital_Marketing.jpg"  alt="Office Image">
                    <div class="image_text_boundaries">
                        <div class="image_text">
                            <h1 class="heading">Digital Marketing</h1>
                            <p class="sub_text">Generating you new business through results-driven marketing activities</p>
                            <a class="slide_button_digital" href="#" target="_blank">Find Out More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div> <!-- Slide Image 6 -->
                    <img src="Images/Cyber_Security.jpg"  alt="Office Image">
                    <div class="image_text_boundaries">
                        <div class="image_text">
                            <h1 class="heading">Cyber Security</h1>
                            <p class="sub_text">Keeping businesses and their customers sensitive information protected</p>
                            <a class="slide_button_cybers" href="#" target="_blank">Find Out More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_container push-this"> 
                <div class="card_width_container">
                    <a class= "card_bespoke card" href="#"> <!-- Try making this a card -->
                        <span class="bespoke_icon_background">
                            <span class="icon"><i class="fa fa-th"></i></span>
                        </span>
                        <h2>Bespoke Software</h2>
                        <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                        <div class="btn_container bespoke_btn">
                            <div class="btn btn_bespoke">READ MORE</div>
                        </div>
                    </a>
                    <a class="card_it card" href="#">
                        <span class="it_icon_background">
                            <span class="icon"><i class="fa fa-desktop"></i></span>
                        </span>
                        <h2>IT Support</h2>
                        <p>Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.</p>
                        <div class="btn_container it_btn">
                            <div class="btn btn_it">READ MORE</div>
                        </div>
                    </a>
                    <a class="card_digital card" href="#">
                        <span class="digital_icon_background">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                        </span>
                        <h2>Digital Marketing</h2>
                        <p>Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.</p>
                        <div class="btn_container digital_btn">
                            <div class="btn btn_digital">READ MORE</div>
                        </div>
                    </a>
                    <a class="card_telecoms card" href="#">
                        <span class="telecoms_icon_background">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                        </span>
                        <h2>Telecoms Services</h2>
                        <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                        <div class="btn_container telecoms_btn">
                            <div class="btn btn_telecoms">READ MORE</div>
                        </div>
                    </a>
                    <a class="card_web card" href="#">
                        <span class="web_icon_background">
                            <span class="icon"><i class="fa fa-code"></i></span>
                        </span>
                        <h2>Web Design</h2>
                        <p>User-centric design for businesses looking to make a lasting first impression.</p>
                        <div class="btn_container web_btn">
                            <div class="btn btn_web">READ MORE</div>
                        </div>
                    </a>
                    <a class="card_cybers card" href="#">
                        <span class="cybers_icon_background">
                            <span class="icon"><i class="fa fa-shield"></i></span>
                        </span>
                        <h2>Cyber Security</h2>
                        <p>Ensuring your online business stays secure 24/7, 365 days of the year.</p>
                        <div class="btn_container cyber_btn">
                            <div class="btn btn_cybers">READ MORE</div>     
                        </div>
                    </a> 
                    <a class="card_web card_dev card" href="#">
                        <span class="web_icon_background">
                            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                        <h2>Developer Training</h2>
                        <p>Have you considered a career in web development but you aren't sure where to start?</p>
                        <div class="btn_container dev_btn">
                            <div class="btn btn_web">READ MORE</div> 
                        </div>
                    </a>     
                </div>
            </div>
            <div class="description_block push-this"> <!-- Netmatters Description Block -->
                <div class="description_background">
                    <div class="description_width">
                        <div class="description_placement">
                            <h2 class="description_header ">Netmatters</h2>
                            <p class="description_first">Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk.</p>
                            <p class="description_text">Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.</p>
                            <p class="description_text">We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning. </p>
                            <a href="#" class="description_button">Our Culture <span><i class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest push-this">
                <div class="latest_boundaries">
                    <h1 class="latest_header">latest</h1>
                </div>
            </div>
            <div class="latest_width push-this"> <!-- Latest news cards -->
                <div class="latest_column"> <!-- removed :  justify-content-center-->
                    <div class="news_info_web first">
                        <div class="card_image_container">
                            <div class="tab_boundaries"> 
                                <div class="tab_text"> 
                                    <a class="tab_link_web tab_link" href="www.google.com">Case Studies</a>
                                    <div class="tab_pop_out">
                                        <p>View all: Bespoke Software / News</p>
                                    </div>
                                    <div class="pop_out_arrow"></div>
                                </div>
                            </div>
                            <div class="card_image">
                                <a href="#" target="_blank">
                                    <img src="Images/News_Image_1.jpg" alt="News Image">
                                </a>
                            </div>
                        </div>
                        <div class="card_content">
                            <a class="news_title" href="#" target="_blank">Easters of Norwich Case Study</a>
                            <p>In a digitally adopted world, e-commerce websites are leading the way in revenue generation, reach...</p>
                            <a class="read_more_button" href="#">Read More</a>
                            <div class="card_author">
                                <img class="card_author_logo" src="Images/Netmatters_Logo_Small.png" alt="Netmatters Logo">
                                <div class="card_author_content">
                                    <strong class="card_author_name">Posted by Netmatters Ltd</strong>
                                    <p class="card_author_date">19th June 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news_info_bespoke second">
                        <div class="card_image_container">
                            <div class="tab_boundaries_web tab_boundaries"> 
                                <div class="tab_text"> 
                                    <a class="tab_link" href="www.google.com">News</a>
                                    <div class="tab_pop_out">
                                        <p>View all: Bespoke Software / News</p>
                                    </div>
                                    <div class="pop_out_arrow"></div>
                                </div>
                            </div>
                            <div class="card_image">
                                <a href="#" target="_blank">
                                    <img src="Images/News_Image_2.jpg" alt="News Image">
                                </a>
                            </div>
                        </div>
                        <div class="card_content">
                            <a class="news_title" href="#" target="_blank">The 6 Key Steps to Integrating Your Business...</a>
                            <p>Systems integration is the idea that all of the software used within your business should work tog...</p>
                            <a class="read_more_button" href="#">Read More</a>                       
                            <div class="card_author">
                                <img class="card_author_logo" src="Images/Netmatters_Logo_Small.png" alt="Netmatters Logo">
                                <div class="card_author_content">
                                    <strong class="card_author_name">Posted by Netmatters Ltd</strong>
                                    <p class="card_author_date">16th June 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news_info_web third">
                        <div class="card_image_container">
                            <div class="tab_boundaries_bespoke tab_boundaries"> 
                                <div class="tab_text"> 
                                    <a class="tab_link" href="www.google.com">News</a>
                                    <div class="tab_pop_out">
                                        <p>View all: Bespoke Software / News</p>
                                    </div>
                                    <div class="pop_out_arrow"></div>
                                </div>
                            </div>
                            <div class="card_image">
                                <a href="#" target="_blank">
                                    <img src="Images/News_Image_3.jpg" alt="News Image">
                                </a>
                            </div>
                        </div>
                        <div class="card_content">
                            <a class="news_title" href="#" target="_blank">Congratulations Matthew Wilson for Graduating...</a>
                            <p>We are pleased to announce that after only 8 months spent on our Netmatters Scion Coalition Scheme (...</p>
                            <a class="read_more_button" href="#">Read More</a>                      
                            <div class="card_author">
                                <img class="card_author_logo" src="Images/Netmatters_Logo_Small.png" alt="Netmatters Logo">
                                <div class="card_author_content">
                                    <strong class="card_author_name">Posted by Netmatters Ltd</strong>
                                    <p class="card_author_date">14th May 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo_container push-this">
                <div class="logo_segment"> <!-- Logos -->
                    <div class="logo_box">
                        <img class="coloured" src="Images/Logo_1_Col.png" alt="Busseys Logo"> <!-- Coloured Image-->
                        <img class="greyscale" src="Images/Logo_1.png" alt="Busseys Logo">
                        <div class="logo_pop_out pop_busseys"> <!-- Container for the tooltip This is relative-->
                            <div class="description busseys"> <!-- Description This is absolute -->
                                <div class="arrow"></div> 
                                <h3>Busseys</h3>
                                <p>One of the UK's leading Ford dealerships.</p>
                            </div> 
                        </div>
                    </div>
                    <div class="logo_box">
                        <img class="coloured" src="Images/Logo_2_Col.png" alt="Crane Garden Buildings Logo"> 
                        <img class="greyscale" src="Images/Logo_2.png" alt="Crane Garden Buildings Logo">
                        <div class="logo_pop_out pop_crane"> <!-- Container for the tooltip -->
                            <div class="description crane"> <!-- Description -->
                                <div class="arrow"></div> 
                                <h3>Crane Garden Builders</h3>
                                <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                            </div>   
                        </div>
                    </div>       
                    <div class="logo_box">
                        <img class="coloured" src="Images/Logo_3_Col.png" alt="Beat Logo">  
                        <img class="greyscale" src="Images/Logo_3.png" alt="Beat Logo">
                        <div class="logo_pop_out"> <!-- Container for the tooltip -->
                            <div class="description beat"> <!-- Description -->
                                <div class="arrow"></div> 
                                <h3>Beat</h3>
                                <p>The UK's eating disorder charity founded in 1989.</p>
                            </div>   
                        </div>
                    </div>        
                    <div class="logo_box">
                        <img class="coloured" src="Images/Logo_4_Col.png" alt="Northern Diver Logo">
                        <img class="greyscale" src="Images/Logo_4.png" alt="Northern Diver Logo">
                        <div class="logo_pop_out pop_northern"> <!-- Container for the tooltip -->
                            <div class="description northern_diver"> <!-- Description -->
                                <div class="arrow"></div> 
                                <h3>Northern Diver</h3>
                                <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        <footer>
            <script type="text/javascript" src="Plugins/pushy-1.3.0/js/pushy.min.js"></script> <!-- KEEP THIS -->
            <div class="about_links push-this"> <!-- About links -->
                <div class="about_links_container"> <!-- Width Container-->
                    <!-- <div class="about_links_flex"> -->
                        <div class="about_item">
                            <h5 class="header">Contact Us</h5>
                            <p>11 Penfold Drive<br>Wymondham<br>Norfolk<br>NR18 OWZ<br></p>
                            <p>Tel: <a href="#">01803 704020</a></p>
                            <p>Email: <a href="#" class="no_change">support@netmatters.com</a></p>
                        </div>
                        <div class="about_item">
                            <h5 class="header">About Netmatters</h5>
                            <a href="#">news</a><br>
                            <a href="#">our careers</a><br>
                            <a href="#">our team</a><br>
                            <a href="#">our office tour</a><br>
                            <a href="#">privacy policy</a><br>
                            <a href="#">cookie policy</a><br>
                            <a href="#">terms & conditions</a><br>
                            <a href="#">UK domains</a>
                        </div>
                        <div class="about_item">
                            <h5 class="header">Website</h5>
                            <a>sitemap</a><br>
                            <p>&copy; Copyright Netmatters Ltd. 2020<br>All rights reserved</p>
                        </div>
                        <div class="about_item">
                            <h5 class="header">social media</h5>
                            <div class="social_links">
                                <div>
                                    <a class="facebook"  href="#"><span><i class="fa fa-facebook-f fa-2x"></i></span></a>
                                </div>
                                <div>
                                    <a class="twitter" href="#"><span><i class="fa fa-twitter fa-2x"></i></span></a>
                                </div>
                                <div>
                                    <a class="linkedin" href="#"><span><i class="fa fa-linkedin fa-2x"></i></span></a>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="sponsor push-this">
                <div class="sponsor_container">
                    <div class="sponsor_box google_box">
                        <img src="Images/Google_Partner.png" class="size_google" alt="Google Partner Logo">
                    </div>
                    <div class="sponsor_box microsoft_box">
                        <img src="Images/Microsoft_Silver_Partner.jpeg" class="size_microsoft" alt="Microsoft Silver Partner Logo">
                    </div>
                    <div class="sponsor_box future_box">
                        <img class="size_future_50 coloured future" src="Images/Future_50.jpg" alt="Future 50 Logo">
                        <img class="size_future_50 greyscale future" src="Images/Future_50_Greyscale" alt="Future 50 Logo">
                    </div>
                    <div class="sponsor_box QMS_box">
                        <img class="size_QMS coloured" src="Images/QMS.jpg" alt="QMS Logo">
                        <img class="size_QMS greyscale" src="Images/QMS_Greyscale.png" alt="QMS Logo">
                    </div>
                    <div class="sponsor_box norfolk_box">
                        <img src="Images/Norfolk_Carbon_Charter.jpg" class="size_norfolk coloured" alt="Norfolk Carbon Charter Logo">
                        <img src="Images/Norfolk_Carbon_Charter_Greyscale" class="size_norfolk greyscale" alt="Norfolk Carbon Charter Logo">
                    </div>
                </div>
            </div>
        </footer>
        <!-- <script type="text/javascript" src="Plugins/pushy-1.3.0/js/pushy.js"></script> -->
        <script type="text/javascript" src="Plugins/slick-1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="JS/slick_slideshow.js"></script>
        <script type="text/javascript" src="JS/sticky_header.js"></script>
        <!-- <script type="text/javascript" src="JS/burger_button.js"></script> -->
        <script type="text/javascript" src="JS/side_menu.js"></script>
        <script type="text/javascript" src="JS/search_bar.js"></script>
        <script src="JS/cookie_modal.js"></script>
    </body>
</html>