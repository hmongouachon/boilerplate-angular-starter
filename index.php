<!doctype html>
<html class="no-js" lang="" ng-app="starterAngular1">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- for Google -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <meta name="author" content="" />
        <meta name="copyright" content="" />
        <meta name="application-name" content="" />

        <!-- for Facebook -->          
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />

        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="" />

        <!-- base -->
        <base href="http://localhost/boilerplate-angular-starter/">

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <!-- libs normalize -->
        <link rel="stylesheet" href="resources/css/normalize.css">

        <!-- libs font awesome -->
        <link href="resources/css/libs/font-awesome.min.css" rel="stylesheet"> 
        
        <!-- libs kube imperavi -->
        <link href="resources/css/libs/kube.min.css" rel="stylesheet">

        <!-- libs google fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">

        <!-- COMPASS -->
        <link href="resources/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <link href="resources/css/print.css" media="print" rel="stylesheet" type="text/css" />



        <!--[if IE]>
            <link href="resources/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css"/>
        <![endif]-->


    </head>
    <body ng-cloak>
    <!--&lt;!&ndash;[if lt IE 8]>-->
        <!--<p>Vous utilisez un navigateur qui n'est <strong>pas à jour</strong>. Veuillez s'il vous plaît <a href="http://browsehappy.com/?locale=fr_FR">télécharger une version récente</a> pour améliorer votre expérience utilisateur.</p>-->
    <!--<![endif]&ndash;&gt;-->

    <main role="main" class="fullscreen">

        <!-- Header -->
        <header ng-include=" 'application/partials/header/view.html' "></header>

        <!-- main content -->
        <section class="anim-view" ui-view></section>

    </main>

    <!-- DEV libs -->
    <script src="vendors/angular/angular.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendors/angular-sanitize/angular-sanitize.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendors/ngstorage/ngStorage.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendors/angular-ui-router/release/angular-ui-router.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendors/angular-animate/angular-animate.min.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- DEV main -->
    <!-- <script src="application/app.js" type="text/javascript" charset="utf-8"></script> -->

    <!-- DEV services -->
        
    <!-- DEV controllers -->

    <!-- DEV Partials 
    <script src="application/partials/header/controller.js" type="text/javascript" charset="utf-8"></script>
    -->

    <!-- PAGE ERRORS 
    <script src="application/pages/user-restrict/controller.js" type="text/javascript" charset="utf-8"></script> -->


    <!-- PROD - use grunt to minify and concatenate files-->
    <script src="dist/min/app.js" type="text/javascript" charset="utf-8"></script>
    <!-- !PROD -->
        
    

    <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-87043713-1', 'auto');
        ga('send', 'pageview');
    </script>

   

</body>
</html>



