      <!-- *** FOOTER ***
 _________________________________________________________ -->
  <?php foreach($profile as $row) : ?>
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-2">

                        <h4>Where to find us</h4>
                        <strong><?= $row->nama;?></strong>
                        <p><?= $row->alamat;?>
                        <br>Phone: <?= $row->no_telp;?>
                        <br>E-mail: <?= $row->email;?></p>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
             <?php endforeach; ?>
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Created By Victory Dev.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
        <script src="<?php echo base_url('assets/js/jquery-1.11.3.js')?>"></script>
    
    <!-- jQuery Lightbox -->
    <script src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js')?>"></script>