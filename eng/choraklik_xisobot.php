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
                    <h2> Choraklik Xisobotlar </h2>
                </div>
                   <div class="wrapper">
                       <div class="card">
                            <div class="icon-file">
                                <a href="document/Чоракликхисобот2020йил1чорак.pdf">
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                    <p>2020-yil I chorak</p>
                                    <button class="btn-danger"> ko`rish </button>
                                </a>
                            </div>
                       </div>
                    <!--         2              -->
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2020йил2чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2020-yil II chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>

                    <!--        3            -->
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2020йи3чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2020-yil III chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>

                    <!--        4         -->
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2021йил1чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2021-yil I chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>

                   </div>


                <!--       2            -->

                   <div class="wrapper">
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2021йил2чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2021-yil II chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>
                       <!--         2              -->
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2021йил3чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2021-yil III chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>

                       <!--        3            -->
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2022йил1чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2022-yil I chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>

                       <!--        4         -->
                       <div class="card">
                           <div class="icon-file">
                               <a href="document/Чоракликхисобот2022йил2чорак.pdf">
                                   <i class="fa fa-file" aria-hidden="true"></i>
                                   <p>2022-yil I chorak</p>
                                   <button class="btn-danger"> ko`rish </button>
                               </a>
                           </div>
                       </div>

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
        width: 300px;
        height: 300px;
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
    }
    .card .icon-file button {
        margin-top: 10px;
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
