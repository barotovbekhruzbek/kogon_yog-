<!DOCTYPE html>
<html>
<head>
    <?php 
        include "head.php"
    ?>
</head>

<!-- page wrapper -->
<body class="page-wrapper">

   
    
    
     <!-- main header area -->
     <header class="main-header">
     <?php 
        include "header.php"
        ?>

    </header>
    <!-- end main header area -->


    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">Kogon Yog-Ekstraksiya  zavodi</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    
    <!-- bread crumb end -->

    <!-- contact-info -->
    <section class="contact-info contact-page centered">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <div class="title">Manzil</div>
                        <div class="text"><p>Buxoro , kogon , Amir Timur , 5A<br /> Kogon 200701 </p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="title">Tel:</div>
                        <div class="text"><p>(+998) 65 522 12 49<br /> (+998) 65 522 24 60</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="title">Email</div>
                        <div class="text"><p><a href="#">kogonyog@mail.ru</a><br /></p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact infe end -->

    <!-- contact-section -->
    <section class="contact-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="contact-form-area">
                        <div class="title"><h2>Bizga xabar qoldiring</h2></div>
                        <div class="text"></div>
                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="form_name" value="" placeholder="Ism" required="">
                                </div>                               
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="form_Phone" value="" placeholder="Tel:" required="">
                                </div>                               
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Xabar qoldiring" name="form_message" required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-one style-one radi" data-loading-text="Please wait...">Xabarni jo`natish</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="google-map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10321.542432097118!2d64.55281889491417!3d39.725880835959146!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc02022ac7793ea6!2z0JDQutGG0LjQvtC90LXRgNC90L7QtSDQvtCx0YnQtdGB0YLQstC-INCQ0J4g4oCcS29nb24gWW9nLUVrc3RyYWtzaXlhIHphdm9kaeKAnQ!5e0!3m2!1suz!2s!4v1663529941470!5m2!1suz!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer class="main-footer sec-pad">
        <?php 
            include "footer.php"
        ?>
    </footer>
   
<!--jquery js -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bxslider.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<script src="js/script.js"></script>

<!-- End of .page_wrapper -->
</body>
</html>
