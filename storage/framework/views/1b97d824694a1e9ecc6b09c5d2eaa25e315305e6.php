<!DOCTYPE html>
<html lang="en">
<head itemscope>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo PageBuilder::block('meta_title', ['meta' => true]); ?></title>
    <meta name="description" content="<?php echo PageBuilder::block('meta_description', ['meta' => true]); ?>">
    <meta name="keywords" content="<?php echo PageBuilder::block('meta_keywords', ['meta' => true]); ?>">

    <meta property="og:title" content="<?php echo PageBuilder::block('meta_title', ['meta' => true]); ?>">
    <meta property="og:description" content="<?php echo PageBuilder::block('meta_description', ['meta' => true]); ?>">
    <meta itemprop="name" content="<?php echo PageBuilder::block('meta_title', ['meta' => true]); ?>">
    <meta itemprop="description" content="<?php echo PageBuilder::block('meta_description', ['meta' => true]); ?>">

    <meta name="revisit-after" content="7 days">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo PageBuilder::css('bootstrap.min'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo PageBuilder::css('style'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php echo PageBuilder::block('header_html', ['source' => true]); ?>


</head>

<body id="top">

<?php echo PageBuilder::menu('main_menu'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/sections/head.blade.php ENDPATH**/ ?>