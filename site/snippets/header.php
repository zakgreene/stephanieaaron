<!doctype html>

<!--
    HTML5 Reset: https://github.com/murtaugh/HTML5-Reset
    Free to use
-->

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head>

    <meta charset="utf-8">
    
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="author" content="Stephanie Aaron" />
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
    <!-- Don't forget to set your site up: http://google.com/webmasters -->
    <meta name="google-site-verification" content="" />
    
    <!-- Who owns the content of this site? -->
    <meta name="Copyright" content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="favicon.ico" />

    <script src="//use.typekit.net/mxd2cyu.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    
    <!-- concatenate and minify for production -->
    <?php echo css('assets/css/reset.css') ?>
    <?php echo css('assets/css/style.css') ?>
    
    <!-- Lea Verou's Prefix Free, lets you use un-prefixed properties in your CSS files -->
    <script src="assets/js/libs/prefixfree.min.js"></script>
    
    <!-- This is an un-minified, complete version of Modernizr. 
       Before you move to production, you should generate a custom build that only has the detects you need. -->
    <script src="assets/js/libs/modernizr-2.7.1.dev.js"></script>
    
    <!-- Application-specific meta tags -->
    <!-- Windows 8: see http://msdn.microsoft.com/en-us/library/ie/dn255024%28v=vs.85%29.aspx for details -->
    <meta name="application-name" content="" /> 
    <meta name="msapplication-TileColor" content="" /> 
    <meta name="msapplication-TileImage" content="" />
    <meta name="msapplication-square150x150logo" content="" />
    <meta name="msapplication-square310x310logo" content="" />
    <meta name="msapplication-square70x70logo" content="" />
    <meta name="msapplication-wide310x150logo" content="" />
    <!-- Twitter: see https://dev.twitter.com/docs/cards/types/summary-card for details -->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo url() ?>">
    <meta name="twitter:title" content="<?php echo $site->title()->html() ?>">
    <meta name="twitter:description" content="<?php echo $site->description()->html() ?>">
    <meta name="twitter:url" content="">
    <!-- Facebook (and some others) use the Open Graph protocol: see http://ogp.me/ for details -->
    <meta property="og:title" content="<?php echo $site->title()->html() ?>" />
    <meta property="og:description" content="<?php echo $site->description()->html() ?>" />
    <meta property="og:url" content="<?php echo url() ?>" />
    <meta property="og:image" content="" />

</head>

<body>

<header class="site-title"><div class="wrapper"><a href="#intro"></a>
    <h1><?php echo $site->author() ?></h1>
    <h2><?php echo $site->practice() ?></h2>
</div></header>