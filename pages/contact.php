        <!-- header -->
        <?php
            $title = 'Contact Us';
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
                                    <h2 class="section-title no-margin">Contact us</h2>
                                    <p class="fs-16 no-margin">Send us a message</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="<?php echo $lib->site_url(); ?>" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Contact</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Contact Us -->
                <section class="pad-50 about-wrap">
                    <span class="bg-text"> Contact </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us pt-10">
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam 
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
                                        tation ullamcorper suscipit lobortis nisl ut aliquip.
                                    </p>
                                    <ul class="feature">
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Fast Response</h2> 
                                                <p>Duis autem vel eum iriure dolor</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Secured Messaging</h2> 
                                                <p>Duis autem vel eum iriure dolor in hendrerit</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">24`7 Active Support</h2> 
                                                <p>Eum iriure dolor in hendrerit in vulputa</p>                                            
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">                                
                                <div class="calculate-form" style="margin-top:0px;">
                                    <form class="row">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3" style="margin-top:10px;"> <label class="title-2"> Fullname: </label></div>
                                            <div class="col-sm-9"> <input style="margin-top:15px;" data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3" style="margin-top:10px;"> <label class="title-2"> E-mail: </label></div>
                                            <div class="col-sm-9"> <input style="margin-top:15px;" data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3" style="margin-top:10px;"> <label class="title-2"> Subject: </label></div>
                                            <div class="col-sm-9"> <input style="margin-top:15px;" data-bind="in:value, f: float" data-name="depth" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3" style="margin-top:10px;"> <label class="title-2"> Message: </label></div>
                                            <div class="col-sm-9">
                                                <textarea style="margin-top:15px;" class="form-control" data-bind="in:value, f: float" data-name="width" rows="5" style="max-height:300px;min-height:100px;"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right">
                                                <button type="submit" class="btn-block btn-1" style="text-align: center;">
                                                    SEND MESSAGE
                                                </button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

            </article>
            <!-- /.Content Wrapper -->

            <!-- footer -->
            <?php require_once('../includes/footer.php'); ?>