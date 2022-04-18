<?php require '../assets/php/Library.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo @$lib->site_name(); ?> Courier Services - <?php echo @$title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css'); ?>">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css'); ?>">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/plugins/font-elegant/elegant.css'); ?>">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/plugins/owl.carousel.2/assets/owl.carousel.css'); ?>">


        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/css/animate.css'); ?>">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $lib->generate_url('assets/css/theme.css'); ?>">

        <!--[if lt IE 9]>
        <script src="<?php echo $lib->generate_url('assets/plugins/iesupport/html5shiv.js'); ?>"></script>
        <script src="<?php echo $lib->generate_url('assets/plugins/iesupport/respond.js'); ?>"></script>
        <![endif]-->
    </head>
    <body id="home">