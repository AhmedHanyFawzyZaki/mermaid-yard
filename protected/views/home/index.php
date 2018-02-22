<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Ahmed Hany">

        <title><?= Yii::app()->name ?></title>

        <link rel="icon" href="<?= Yii::app()->request->getBaseUrl() ?>/icon.ico">

        <!-- Bootstrap Core CSS -->
        <link href="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="<?= Yii::app()->request->getBaseUrl() ?>/files/css/creative.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            header{
                background-image: url('img/upload.jpg');
            }
        </style>

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><?= Yii::app()->name ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <!--<li>
                            <a class="page-scroll" href="#portfolio">Portfolio</a>
                        </li>-->
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <?= $home->details ?>
                    <a href="#about" class="btn btn-default btn-xl page-scroll">Find Out More</a>
                </div>
            </div>
        </header>

        <?php
        $this->renderPartial('//home/about', array('about' => $about));
        $this->renderPartial('//home/services', array('services' => $services));
        $this->renderPartial('//home/portfolio');
        $this->renderPartial('//home/contact', array('settings' => $settings));
        ?>

        <!-- jQuery -->
        <script src="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="<?= Yii::app()->request->getBaseUrl() ?>/files/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="<?= Yii::app()->request->getBaseUrl() ?>/files/js/creative.min.js"></script>

    </body>

</html>
