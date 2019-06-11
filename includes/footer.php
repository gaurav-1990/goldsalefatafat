<footer>
    <div class="footer-top-area pt-40 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-about mb-30">
                        <h4 class="footer-text">Quick Links</h4>


                        <div class="footer-about mb-30">

                            <ul class="content" >
                                <li><a href="<?=BASEURL?>about_us.php">About Us</a></li>
                                <li><a href="<?=BASEURL?>privacy_policy.php">Privacy Policy</a></li>
                                <li><a href="<?=BASEURL?>tnc.php">Terms & Conditions</a></li>
                                </br>
                                <li><a href="<?=BASEURL?>return_policy.php">Return Policy</a></li>
                                <!-- <li><a href="legal.php">Legal </a></li>
                                <li><a href="contact.php">Contact Us </a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

         
                <div class="col-md-4 col-sm-4">
                    <div class="footer-about mb-30">
                        <h4 class="footer-text">Address</h4>
                        <ul class="footer-content" >
                            <li class="address">F -14, 309, 3rd Floor
                                </br>Competent House, Middle Circle, Connaught Place, </br>New Delhi -110001</li>

                        </ul>


                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-about mb-30">
                        <h4 class="footer-text">Contact Us</h4>
                        <ul class="footer-content" >

                            <li class="phone"> <a href="tel:011-43086284">Phone: +011 43086284</a></li>
                            <li class="Email">Email: sales@goldsalefatafat.in</li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>Copyright &copy; 2019 <a target="_#">Apollo Impex</a> All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>

                        <a href="#"><i class="fa fa fa-youtube"></i></a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group col-sm-12">
                    <lable></lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group col-sm-12">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group col-sm-12">
                    <input type="text" class="form-control" name="checkin" id="cheeckin" placeholder="Check-In Date">
                </div>
                <div class="form-group col-sm-12">
                    <input type="text" class="form-control" name="checkout" id="cheeckout" placeholder="Check-Out Date">
                </div>
                <div class="form-group col-sm-12">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
    <!-- footer-area-end -->
    <!-- all js here -->
    <script src="<?=BASEURL?>js/vendor/jquery-1.12.0.min.js"></script>
    <script src="<?=BASEURL?>js/bootstrap.min.js"></script>
    <script src="<?=BASEURL?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=BASEURL?>js/owl.carousel.min.js"></script>
    <script src="<?=BASEURL?>js/isotope.pkgd.min.js"></script>
    <script src="<?=BASEURL?>js/jquery.counterup.min.js"></script>
    <script src="<?=BASEURL?>js/jquery.meanmenu.js"></script>
   
    <script src="<?=BASEURL?>js/waypoints.min.js"></script>
    <script src="<?=BASEURL?>js/plugins.js"></script>
     <script src="<?=BASEURL?>js/jquery.magnific-popup.min.js"></script>
     
    <script src="<?=BASEURL?>js/main.js"></script>
 <script type="text/javascript">
                        
                        $('.image-link,.popup-link').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
                    </script>
    <script type="text/javascript">
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });

        $('.img-replace').click(function()
        {
            
            $(this).parent().parent().parent().parent().parent().parent().siblings().children().children().find('img').attr('src', $(this).attr("src"))
        });

    </script>
</body>


</html>
