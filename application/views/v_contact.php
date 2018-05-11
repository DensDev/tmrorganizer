<?php
$this->load->view('templates/head');
?>


<body>
    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo site_url('home') ?>" data-animate-hover="bounce">
                    <img src="<?php echo base_url('assets/obaju/img/logo-small2.png')?>" alt="Obaju logo" class="hidden-xs">
                    <img src="<?php echo base_url('assets/obaju/img/logo-small1.png')?>" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?php echo site_url('home') ?>">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">Event <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <li><a href="<?php echo site_url('wedding') ?>">Wedding</a></li>
                                <li class="disabled"><a href="#">Seminar</a></li>
                            </li>
                        </ul>
                        <li class="active"><a href="<?php echo site_url('contact') ?>">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('home') ?>">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>

                </div>
                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>Contact</h1>
                        <hr>
                        <?php foreach($profile as $row) : ?>
                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p><?= $row->alamat;?><br>
                                </p>
                            
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p><strong><?= $row->no_telp;?></strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <ul>
                                    <p><strong><a href="mailto:"><?= $row->email;?></a></strong></p>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                            <?php endforeach; ?>
                        </div>
                        <!-- /.row -->

                        <hr>

                        <hr>

                        <h2>Contact form</h2>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>
                            -->
                        </form>


                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


  <?php
$this->load->view('templates/foot');
?>


    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="<?php echo base_url('assets/obaju/js/jquery-1.11.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/jquery.cookie.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/modernizr.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/bootstrap-hover-dropdown.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/obaju/js/front.js')?>"></script>
</body>

</html>
