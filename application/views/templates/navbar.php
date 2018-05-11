<!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo site_url('home') ?>" data-animate-hover="bounce">
                    <img src= <?php echo site_url()."assets/obaju/img/logo-small2.png"; ?> alt="Obaju logo" class="hidden-xs">
                    <img src= <?php echo site_url()."assets/obaju/img/logo-small1.png" ;?> alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?php echo site_url('home') ?>">Home</a>
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