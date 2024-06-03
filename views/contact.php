<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="public/main.css">
    <title>Contact</title>
</head>

<body>
    <?php require "include/header.php" ?>
<!-- End header -->
<div class="tablecell-pages text-center">
    <div class="container">
        <p class="subtitle-pages">GET 24/7 SUPPORT</p>
        <h1 class="text-title-pages">Contact us</h1>
    </div>
</div>
</div>
<!-- end header -->

<!-- CONTACT FORM -->
<div class="contact-form-section">
    <div class="container">
        <div class="row space-between">
            <div class="contact-form">
                <div class="form-title">
                    <h1>Have you any question?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est,
                        assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore,
                        esse natus!</p>
                </div>
                <div class="box-form">
                    <form>
                        <input class="box-contact-input" type="text" placeholder="Name" name="name">
                        <input class="box-contact-input" type="email" placeholder="Email" name="email">
                        <input class="box-contact-input" type="text" placeholder="Name" name="name">
                        <input class="box-contact-input" type="email" placeholder="Email" name="email">
                        <input class="box-contact-message" type="text" placeholder="Message" name="email">
                    </form>
                    <a href="<?= BASE_URL ?>"><button class="btn-submit-contact" >Submit</button></a>
                </div>
            </div>
            <div class="contact-form-wrap">
                <div class="contact-form-box">
                    <div class="row space-between">
                        <div class="contact-box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-box-text">
                            <h3>Shop Address</h3>
                            <p>Miêu Nha<br>Tây Mỗ<br>Nam Từ Liêm, Hà Nội</p>
                        </div>
                        <div class="contact-box-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="contact-box-text">
                            <h3>Shop Hours</h3>
                            <p>MON - FRIDAY: 8 to 9 PM<br>SAT - SUN: 10 to 8 PM</p>
                        </div>
                        <div class="contact-box-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-box-text">
                            <h3>Contact</h3>
                            <p>Phone: +00 111 222 3333<br>Email: hviet04@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT FORM -->
<!-- GOOGLE MAP       -->
<div class="map-section">
    <div class="container">
        <div class="row">
            <div class="box-map-text text-center">
                <p><i class="fa fa-map-marker"></i>Find Our Location</p>
            </div>
        </div>
    </div>
</div>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29796.953932761942!2d105.72242586308924!3d21.007894660689015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134537a448f5531%3A0x9083fe6a98be371f!2zVMOieSBN4buXLCBOYW0gVOG7qyBMacOqbSwgSGFub2ksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1713424762331!5m2!1sen!2s"
    width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- end GOOGLE MAP -->
<!-- footer -->
<?php require "include/footer.php" ?>
<!-- end footer -->
</body>

</html>