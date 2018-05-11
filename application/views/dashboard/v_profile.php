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
                    <h1 class="page-header">Profile</h1>
                </div>
                <a href= <?php echo site_url()."profile/Input" ?> class="btn btn-primary">Add Profile</a>
                <br><br>
                  <strong style="margin-top: 4px;" id="message">
                      <?php echo $this->session->userdata('message'); ?>
                  </strong>
                  <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>E-mail</th>
                            <th>Config</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            foreach($profile as $value)
                            { 
                        ?>
                          <tr>
                            <td><?= $no;?></td>
                            <td><?= $value->nama;?></td>
                            <td><?= $value->alamat;?></td>
                            <td><?= $value->no_telp;?></td>
                            <td><?= $value->email;?></td>
                            <td><a href="<?= site_url("profile/edit")."?profile=".$value->id;?>" class="btn btn-warning">edit</a>&nbsp;<a href="<?= site_url("profile/delete")."?profile=".$value->id;?>" class="btn btn-danger">delete</a> </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                    </div>
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

    <!-- DataTables JavaScript -->
    <script src= <?php echo site_url()."assets/admin/vendor/js/jquery.dataTables.min.js" ?> ></script>
    <script src= <?php echo site_url()."assets/admin/vendor/js/dataTables.bootstrap.min.js" ?>></script>
    <!-- Custom Theme JavaScript -->
    <script>
   $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="application/javascript">
    function isNumberKeyTrue(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 65)
            return false;         
         return true;
        }
    </script>

</body>

</html>
