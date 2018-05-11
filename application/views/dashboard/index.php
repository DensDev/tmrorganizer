<?php
$this->load->view('templates/admin/head');
?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <?php if(isset($error)) { echo $error; }; ?>
                    <div class="panel-body">
                        <form action="tmr_login" method="POST">
                            <fieldset>
                                <div class="form-group" >
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                    <?php echo form_error('username'); ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                    <?php echo form_error('password'); ?>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="btn-login" id="btn-login" type="submit">
                    Masuk</button>
                            </fieldset>
                        </form>
                        <a href="<?php echo site_url('home') ?>" target="_blank">Back To Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$this->load->view('templates/admin/js');
?>
 

</body>

</html>
