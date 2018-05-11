<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('templates/admin/head');
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TRM ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $this->session->userdata("user_nama") ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href= <?php echo site_url()."admin/logout";?> ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
<?php
$this->load->view('templates/admin/sidebar');
?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gallery</h1>
                </div>
                <a href=<?php echo site_url()."gallery/create" ?> class="btn btn-primary">Add Image</a>
                <br><br>
                  <strong style="margin-top: 4px;" id="message">
                      <?php echo $this->session->userdata('message'); ?>
                  </strong>
                  <?php foreach($gallery as $image) : ?>
                <div class="row">
                  <div class="col-md-8">
                    <img src= "<?php echo base_url('assets/admin/gallery/'.$image->filefoto); ?>" alt="<?php echo $image->nama_file; ?>" width="300" height="300" />
                  </div>
                  <div class="col-md-4">
                    <h3><?php echo $image->nama_file; ?></h3>
                    <br>
                    <a href="<?php echo base_url('gallery/edit/'.$image->id); ?>" class="btn btn-warning">Edit</a>
                    <?php
                    $hapus = array(
                        'class' => 'btn btn-danger',
                        'onclick' => 'javascript: return confirm(\'Anda yakin menghapus ' . $image->nama_file . '?\')'
                    );
                    echo anchor(site_url('gallery/delete/' . $image->id), 'Hapus', $hapus);
                    ?>
                  </div>
                </div>
                <hr>
              <?php endforeach; ?>
            </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=<?php echo site_url()."assets/admin/vendor/jquery/jquery.min.js" ?> ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo site_url()."assets/admin/vendor/bootstrap/js/bootstrap.min.js" ?> ></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo site_url()."assets/admin/vendor/metisMenu/metisMenu.min.js"?> ></script>

    <!-- Morris Charts JavaScript -->
    <script src=<?php echo site_url()."assets/admin/vendor/raphael/raphael.min.js" ?> ></script>
    <script src=<?php echo site_url()."assets/admin/vendor/morrisjs/morris.min.js" ?> ></script>
    <script src=<?php echo site_url()."assets/admin/data/morris-data.js" ?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo site_url()."assets/admin/dist/js/sb-admin-2.js" ?>></script>

</body>

</html>
