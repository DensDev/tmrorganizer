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
                    <img src="<?php echo base_url('assets/obaju/img/logo-small.png')?>" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
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
                        <li><a href="<?php echo site_url('contact') ?>">Contact</a>
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
                        <li><a href="#">Home</a>
                        </li>
                        <li>Gallery</li>
                    </ul>

                </div>
        <div class="container">
            <div class="row mtb-60">
                <?php foreach($gallery as $image) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                        <a class="example-image-link" href="<?php echo base_url('assets/admin/gallery/'.$image->filefoto); ?>" data-lightbox="example-set" data-title="<?php echo $image->nama_file; ?>" width="300" height="300">
                        <img class="thumbnail img-responsive" alt="<?php echo $image->nama_file; ?>" src="<?php echo base_url('assets/admin/gallery/'.$image->filefoto); ?>" width="300" height="300" /> </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


<?php
$this->load->model('m_profile');
$data['profile'] = $this->m_profile->list_data();
$this->load->view('templates/foot' ,$data);
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
