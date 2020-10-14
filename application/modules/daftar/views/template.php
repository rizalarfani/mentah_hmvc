<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ; ?></title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ; ?>/assets/vendor/main_html/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ; ?>/assets/vendor/main_html/css/responsive.css">

</head>

<body>


    <section class="top-bar">
        <div class="container">

            <div class="left-text pull-left">
                <p>
                    <span>Email :</span> email@poltektegal.ac.id
                    <span>Whatsapp :</span> 085290521607
                </p>
            </div>

            <div class="social-icons pull-right">
                <ul>
                    <li><a href="https://www.facebook.com/phbtegal"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/politeknikhb"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- /.social-icons -->
        </div>
    </section> <!-- /.top-bar -->

    <nav class="mainmenu-area stricky">
        <div class="container">
            <div class="navigation pull-left">
                <div class="nav-header">
                    <ul>
                        <li>
                            <a href="<?= base_url('daftar') ; ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= base_url('daftar/form_daftar') ; ?>">Pendaftaran</a>
                        </li>
                        <li><a href="<?= base_url('daftar/about') ; ?>">About</a></li>
                        <li><a href="<?= base_url('daftar/contact') ; ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-footer">
                    <button><i class="fa fa-bars"></i></button>
                </div>
            </div>
            <div class="search-box pull-right">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav> <!-- /.mainmenu-area -->

    <?php $this->load->view($page); ?>

    <footer class="footer sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-widget about-widget">
                        <p>POLITEKNIK HARAPAN BERSAMA KOTA TEGAL</p>
                        <p class="pt-5">LOKASI KAMPUS I</p>
                        <ul class="contact">

                            <li><i class="fa fa-map-marker">

                                </i> <span>Jalan Mataram No 9 Pesurungan Lor
                                    - Tegal</span></li>
                            <li><i class="fa fa-phone"></i> <span>0283 - 352000</span></li>
                        </ul>
                        <p>LOKASI KAMPUS II</p>
                        <ul class="contact">

                            <li><i class="fa fa-map-marker">

                                </i> <span>Jalan Dewi Sartika 71
                                    Pesurungan Kidul - Tegal</span></li>
                            <li><i class="fa fa-phone"></i> <span>0283 - 350567</span></li>
                        </ul>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/phbtegal"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/politeknikhb"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <section class="footer-bottom">
        <div class="container text-center">
            <p>Copyright © <a href="#">SISFO 360</a> 2020</p>
        </div>
    </section>


    <!-- main jQuery -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery-1.11.1.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/bootstrap.min.js"></script>
    <!-- bx slider -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery.bxslider.min.js"></script>
    <!-- owl carousel -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/owl.carousel.min.js"></script>
    <!-- validate -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery-parallax.js"></script>
    <!-- validate -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/validate.js"></script>
    <!-- mixit up -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery.mixitup.min.js"></script>
    <!-- fancybox -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery.fancybox.pack.js"></script>
    <!-- easing -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery.easing.min.js"></script>
    <!-- circle progress -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/circle-progress.js"></script>
    <!-- appear js -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery.appear.js"></script>
    <!-- count to -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery.countTo.js"></script>
    <!-- gmap helper -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- gmap main script -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/gmap.js"></script>

    <!-- isotope script -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/isotope.pkgd.min.js"></script>
    <!-- jQuery ui js -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- revolution scripts -->

    <script src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/jquery.themepunch.revolution.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript"
        src="<?= base_url() ; ?>/assets/vendor/main_html/revolution/js/extensions/revolution.extension.video.min.js">
    </script>


    <!-- thm custom script -->
    <script src="<?= base_url() ; ?>/assets/vendor/main_html/js/custom.js"></script>

    <script>
    $('.page-scroll').on('click', function(e) {

        // 
        var tujuan = $(this).attr('href');
        // tangkap element ybs
        var elemenTujuan = $(tujuan);
        // console.log(elemenTujuan.offset().top);

        // console.log($('html').scrollTop());

        // $('body').scrollTop(elemenTujuan.offset().top);

        $('html').animate({
            scrollTop: elemenTujuan.offset().top - 50
        }, 2000, 'easeOutBounce');

        e.preventDefault();

    });
    </script>


</body>

</html>