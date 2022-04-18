        <!-- header -->
        <?php
            $title = 'Page Not Found';
            require_once('../includes/header.php');
        ?>

        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- navbar -->
            <?php require_once('../includes/navbar.php'); ?>

            <!-- Content Wrapper -->
            <article class="about-page"> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> 404 error! </h2>
                                    <p class="fs-16 no-margin"> Something was not correct </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="<?php echo $lib->site_url(); ?>" class="gray-clr">Home</a></li>                                   
                                    <li class="active">404</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- 404 -->
                <section class="pt-50 pb-120 error-wrap">                    
                    <div class="theme-container container text-center">               
                        <h2 class="section-title no-margin"> 404 </h2>
                        <p class="fs-20">The page you are looking for is not found!<br>
                            Please use the correct link.</p>
                        <h3 class="no-margin pt-10"> <a href="<?php echo $lib->site_url(); ?>" class="title-1"> <i class="arrow_left fs-20"></i> go back to home </a> </h3>
                    </div>
                </section>
                <!-- /.404 -->

            </article>
            <!-- /.Content Wrapper -->

            <!-- footer -->
            <?php require_once('../includes/footer.php'); ?>