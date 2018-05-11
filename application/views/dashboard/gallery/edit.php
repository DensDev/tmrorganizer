<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo site_url()."assets/admin/vendor/bootstrap/css/bootstrap.min.css" ?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo site_url()."assets/admin/vendor/metisMenu/metisMenu.min.css" ?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo site_url()."assets/admin/dist/css/sb-admin-2.css" ?> rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href=<?php echo site_url()."assets/admin/vendor/morrisjs/morris.css" ?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo site_url()."assets/admin/vendor/font-awesome/css/font-awesome.min.css" ?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <?php echo $this->session->userdata('message'); ?>
        <?php echo form_open_multipart('gallery/update/'.$id); ?>
          <div class="form-group">
            <?php echo form_label('Nama File', 'namaFile'); ?>
            <?php echo form_error('nama_file'); ?>
            <?php
                $data = array('type' => 'text',
                              'name' => 'nama_file',
                              'value' => set_value('nama_file', $nama_file),
                              'class' => 'form-control',
                              'id' => 'namaFile',
                              'placeholder' => 'Nama File',
                              'autofocus' => 'autofocus'
                );
                echo form_input($data);
            ?>
            </div>
             <div class="form-group">
            <label>File Foto</label> <span class="label label-success">Ukuran maksimal 2 MB. Format file: jpeg, jpg, dan png.</span>
            <?php echo form_error('filefoto'); ?>
            <div id="image-preview">
                <label for="image-upload" id="image-label">Choose File</label>
                <input type="file" name="filefoto" id="image-upload" required/>
            </div>
          </div>
          <?php echo anchor(site_url('gallery'), 'Kembali', 'class="btn btn-default"'); ?>
          <?php echo form_submit('submit', 'Ubah', 'class="btn btn-warning"'); ?>
          <?php echo form_hidden('id', $id); ?>
        <?php echo form_close(); ?>
      </div>
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
