<!DOCTYPE html>
<html>
<head>
    <?php
    include "head.php"
    ?>
</head>

<body class="page-wrapper">



<header class="main-header">

    <?php
    include "header.php"
    ?>


</header>


<main>
    <div class="container">
        <div class="part-4">
            <div class="main-text">
                <h2> Ommaviy Tadbirlar </h2>
            </div>
            <div class="wrapper">
                <div class="card">
                    <div class="icon-file">
                        <a href="document/tadbirlar/ziyorat.pdf">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <p>Ziyoratlar </p>
                            <button class="btn-danger"> ko`rish </button>
                        </a>
                    </div>
                </div>
                <!--         2              -->
                <div class="card">
                    <div class="icon-file">
                        <a href="document/tadbirlar/yangi.pdf">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <p>Yangi yil</p>
                            <button class="btn-danger"> ko`rish </button>
                        </a>
                    </div>
                </div>

                <!--        3            -->










            </div>




        </div>
    </div>
</main>


<footer class="main-footer sec-pad">
    <?php
    include "footer.php"
    ?>
</footer>



<style >
    main .part-4 h2 {
        color: #000000;
        text-align: center;
    }
    .wrapper {
        display: flex;
        padding-top: 80px;
        gap: 30px;

    }
    .card {
        width: 350px;
        height: 350px;
        background: #f5f2f2;
        margin-bottom: 35px;
        border-radius: 8px;


    }
    .card:hover {
        /*box-shadow: 10px 10px 5px lightblue;*/
        -webkit-box-shadow: 17px 14px 14px -12px rgba(34, 60, 80, 0.6);
        -moz-box-shadow: 17px 14px 14px -12px rgba(34, 60, 80, 0.6);
        box-shadow: 17px 14px 14px -12px rgba(34, 60, 80, 0.6);
        transition: 0.5s linear;


    }
    .card .icon-file a {
        padding-top: 40px;
        display: flex;
        flex-direction: column;
        text-decoration: none;
        align-items: center;
    }
    .card .icon-file  i{
        margin-top:40px ;
        font-size: 125px;
        color: #ac2626;

    }
    .card .icon-file p {
        padding-top: 80px;
        font-size: 18px;
        color: #000000;
        text-align: center;
    }
    .card .icon-file button {
        margin-top: 20px;
        padding: 10px 60px;
        border-radius: 8px;
    }
    @media (max-width: 800px) {
        .wrapper {
            flex-direction: column;
            align-items: center;
        }
    }
</style>



<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bxslider.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src="js/script.js"></script>

</body>

