            <!-- Header -->
            <header class="header-main">

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1" style="padding-top:25px;padding-bottom:20px;">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="<?php echo $lib->site_url(); ?>"> <img src="<?php echo $lib->generate_url('assets/img/logo/logo-black.png'); ?>" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                        <li class="active">
                                            <a href="<?php echo $lib->site_url(); ?>">Home</a>
                                        </li>
                                        <li> <a href="<?php echo $lib->generate_url('about-us'); ?>">about</a> </li>
                                        <li> <a href="<?php echo $lib->generate_url('contact-us'); ?>">contact</a> </li>
                                        <li> <a href="<?php echo $lib->generate_url('tracking'); ?>">tracking</a> </li>
                                        <li> <a href="<?php echo $lib->generate_url('pricing'); ?>">pricing</a> </li>
                                        <li> <a href="<?php echo $lib->generate_url('get-a-quote'); ?>">Get a Quote</a> </li>
                                        <li></li>
                                    </ul>                                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->