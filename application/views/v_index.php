<?php
$this->load->view('templates/head');
?>

<body>

<?php
$this->load->view('templates/navbar');
?>

    



    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                    <?php foreach($slider as $image) : ?>
                        <div class="item">
                            <img src=  "<?php echo base_url('assets/admin/slider/'.$image->filefoto); ?>"alt="<?php echo $image->nama_file; ?>" class="img-responsive" width="1200px" height="563px" /> 
                        </div>
                         <?php endforeach; ?>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

    <div class="container">
        <div class="jumbotron">
                <h2>TMR Event Organizer</h2>
                <p>merupakan Event Organizer yang akan membantu mewujudkan event anda secara professional</p>
                <p>Dengan motto <strong>Excellent Team for Your Event</strong>, team kami akan maksimal membuat event anda menjadi Excellent</p>
        </div>
    </div>

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
    <script src=<?php echo site_url()."assets/obaju/js/jquery-1.11.0.min.js" ?>></script>
    <script src=<?php echo site_url()."assets/obaju/js/bootstrap.min.js"?>></script>
    <script src=<?php echo site_url()."assets/obaju/js/jquery.cookie.js"?>></script>
    <script src=<?php echo site_url()."assets/obaju/js/waypoints.min.js" ?> ></script>
    <script src=<?php echo site_url()."assets/obaju/js/modernizr.js"?> ></script>
    <script src=<?php echo site_url()."assets/obaju/js/bootstrap-hover-dropdown.js" ?>></script>
    <script src=<?php echo site_url()."assets/obaju/js/owl.carousel.min.js" ?> ></script>
    <script src=<?php echo site_url()."assets/obaju/js/front.js"?>></script>


</body>

</html>