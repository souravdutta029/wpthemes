<!-- footer -->
<footer>
    <div class="footer_inner">
        <div class="container">
            <div class="footer_img text-center">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Facilities</a> </li>
                    <li><a href="#">Location</a> </li>
                    <li><a href="#">Local Area </a></li>
                    <li><a href="#">Faq </a></li>
                    <li><a href="#">Reviews </a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <div >
                            <div class="footer_list">
                                <?php dynamic_sidebar('sidebar-1'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_list">
                        <i class="fas fa-phone-alt"></i>
                        <h5>
                            003 3434 118 (Land Line) <br>
                            0508 888 810(Toll Free) <br>
                            +64 3 2818 613 (International)
                        </h5>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_list">
                        <i class="fas fa-fax"></i>
                        <h5>
                            03 2818 613 (Domestic) <br>
                            +64 3 2818 613 (International)
                        </h5>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_list">
                        <i class="fas fa-envelope"></i>
                        <h5>
                            info@alphamotel.co.nz <br>
                            info@alphamotel.co.nz (WebSite)
                        </h5>
                    </div>
                </div>
            </div>

            <div class="footer_social text-center">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p><span class="white_text">Copyright © 2019 |</span> Alpha Motel. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                    <p><span class="white_text">Design & Developed By :</span> Crescentek</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script>
    var macy = Macy({
        container: '#macy',
        trueOrder: false,
        //waitForImages: false,
        waitForImages: true,
        margin: 10,
        columns: 4,
        breakAt: {
            1200: 4,
            940: 3,
            520: 2,
            400: 1
        }
    });
    macy.runOnImageLoad(function() {
        var show = document.getElementById("macy");
        show.classList.add("show");
        macy.recalculate(true, true);
    });
</script>
</body>

</html>