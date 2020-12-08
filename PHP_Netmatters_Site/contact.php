<?php
    include_once 'includes/database_connection.inc.php';
    include_once 'includes/send_enquiry.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Website Title</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="SCSS/footer.css">
        <link rel="stylesheet" href="SCSS/header.css">
        <link rel="stylesheet" href="SCSS/Contact_SCSS/contact_styles.css"> 
        <link rel="stylesheet" href="SCSS/pushy.css">
        <link rel="stylesheet" href="CSS/font-awesome-4.7.0/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>

        <div class="contact_top push-this">
            <div class="home_link">
                <a href="index.php">Home</a>
                <p>/</p>
                <p>How can we help you?</p>
            </div>
            <div class="contact_help">
                <h3>How can we help you?</h3>
            </div>
        </div>
        <div class="contact_form push-this">

            <div class="contact_info">
                <div class="infomation">
                    <p class="text">Call us on:</p>
                    <a class="link" href="#" target="_blank">01603 70 40 20</a>
                    <p class="text">Email us on:</p>
                    <a class="link" href="#" target="_blank">sales@netmatters.com</a>
                    <p class="text">Call us on our Gorleston branch on:</p>
                    <a class="link" href="#" target="_blank">01493 603204</a>
                    <p class="text">Businesss hours:</p>
                    <p class="text">Monday - Friday 07:00 - 18:00</p>
                </div>
                <div class="dropdown_container">
                    <span id="dropdown_button">
                        <p>Out of Hours IT Support</p>
                        <i class="fa fa-chevron-down" id="dropdown_arrow"></i>
                    </span>
                    <div class="hidden" id="hidden_content">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00 Sunday 10:00 - 18:00</p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                    </div>
                </div>
            </div>
                
            <div class="form_privacy">
            <!-- action="includes/send_enquiry.inc.php" -->
                <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
                    <div class="success <?php echo $pop_up ?>" id="success_pop_op">
                        <p class="success_message">Your message has been sent!</p>
                        <i class="fa fa-times" id="close_button"></i>
                    </div>
                    <span class="name_container">
                        <label for="name">Your Name</label><p>*</p><br>
                        <input class="<?php echo $nameError?>" type="text" name="name" id="name_input" value="<?php if(empty($name)) {
                            echo '';
                        } else {
                            echo $name;
                        }?>"><br>
                    </span>
                    <span class="email_container">
                        <label for="email_input">Your Email</label><p>*</p><br>
                        <input class="<?php echo $emailError?>" type="text" name="email_address" id="email_input" value="<?php if(empty($email)) {
                            echo '';
                        } else {
                            echo $email;
                        }?>"><br>
                    </span>
                    <span class="telephone_container">
                        <label for="telephone_input">Your Telephone Number</label><p>*</p><br>
                        <input class="<?php echo $phoneError?>" type="number" name="phone_number" id="telephone_input" value="<?php if(empty($phone)) {
                            echo '';
                        } else {
                            echo $phone;
                        }?>"><br>
                    </span>
                    <span class="subject_container">
                        <label for="subject_input">Subject</label><p>*</p><br>
                        <input class="<?php echo $subjectError?>" type="text" name="subject" id="subject_input" value="<?php if(empty($subject)) {
                            echo '';
                        } else {
                            echo $subject;
                        }?>"><br>
                    </span>
                    <span class="message_container">
                        <label for="message_input">Message</label><p>*</p><br>
                        <textarea class="<?php echo $messageError?>" type="text" name="message" id="message_input"><?php if(empty($message)) {
                            echo '';
                        } else {
                            echo $message;
                        }?></textarea><br>
                    </span>
                    <span id="privacy">
                        <input class="<?php echo $termsError?>" type="checkbox" name="terms_conditions" id="terms_conditions" value="accepted">
                        <label class="privacy_text" for="terms">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data</label>
                    </span>
                    <button class="send_button" name="submit" id="contact_form_button">Send Inquiry</button>
                </form>
            </div>

            <div class="map_container">
                <div class="card">
                    <div class="card_top">
                        <span class="logo"><i class="fa fa-home"></i></span>
                        <h5>Netmatters Office:<br>Wymondham</h5>
                        <div class="line"></div>
                        <p>Netmatters</p>
                        <p>11 Penfold Drive</p>
                        <p>Wymondham</p>
                        <p>Norfolk</p>
                        <p>NR18 0WZ</p>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d310426.3012161811!2d1.1442959333291816!3d52.565895257417274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1603206554389!5m2!1sen!2suk"></iframe>
                    </div>
                </div>
                <div class="card">
                    <div class="card_top">
                        <span class="logo"><i class="fa fa-road"></i></span>
                        <h5>Netmatters Office:<br>Gorleston</h5>
                        <div class="line"></div>
                        <p>Netmatters - Great Yarmouth</p>
                        <p>Suite F23 Beacon Innovation Centre, Beacon Park </p>
                        <p>Gorleston, Great Yarmouth</p>
                        <p>Norfolk</p>
                        <p>NR31 7RA</p>
                    </div>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d310290.4272126937!2d1.4752590680948072!3d52.58509037497901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Gorleston!5e0!3m2!1sen!2suk!4v1603206736474!5m2!1sen!2suk"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>

        <script type="text/javascript" src="JS/contact_drop_down.js"></script>
        <script type="text/javascript" src="JS/sticky_header.js"></script>
        <script type="text/javascript" src="JS/side_menu.js"></script>
        <script type="text/javascript" src="JS/search_bar.js"></script>
        <script type="text/javascript" src="JS/cookie_modal.js"></script>
        <script type="text/javascript" src="JS/validate_contact_form.js"></script>

    </body>
</html>
<?php

    
?>