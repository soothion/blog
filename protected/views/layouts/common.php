<!doctype html>
<?php $config = Config::model()->find(); ?>
<html lang="en">

    <head>
        <title><?php echo $config->title; ?><?php if (isset($this->title)&&!empty($this->title)) echo '-' . $this->title ?></title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
        <meta name="author" content="soothion">
        <meta name="description" content="<?php echo $config->des ?>">
        <meta name="keywords" content="<?php echo $config->keyword ?>">

        <!-- favicon -->
        <link rel="shortcut icon" href="/assets/img/favicon.ico">
        <!-- we're minifying and combining all our css -->
        <link href="/assets/css/style.css" rel="stylesheet">

        <link href="/assets/css/prettify.css" rel="stylesheet">

        <script src="/assets/js/jquery.js"></script>

        <script src="/assets/js/prettify.js"></script>

        <!-- load up our js -->
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/application.js"></script>

        <!-- some conditionals for ie -->
        <!--[if IE]><link href="/assets/css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

        <!-- HTML5 elements in less than IE9, yes please! -->
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <!-- If less than IE8 add some JS for the webfont icons -->
        <!--[if lt IE 8]><script src="/assets/js/ie_font.js"></script><![endif]-->
    </head>

    <body id="index" class="page <?php if (Yii::app()->controller->id == 'index') echo 'home' ?>">
        <script>
            $(window).load(function () {
                        $("pre").addClass("prettyprint");
                        prettyPrint();
            })
        </script>

        <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6 -->
        <!--[if lt IE 7]>
                <p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
        <![endif]-->

        <!-- wrapper -->
        <div id="wrapper">

            <?php echo $content; ?>

            <!-- footer -->
            <footer id="foot" class="textcenter">
                <div class="boxed">

                    <!-- nav -->
                    <nav id="secondary">
                        <div id="logo-foot">
                            <a href="<?php echo Yii::app()->createUrl('index'); ?>"><img src="/assets/img/logo-foot.png" alt="火焰雨" /></a>
                        </div>
                        <?php $this->widget('NavWidget'); ?>
                    </nav>
                    <!-- /nav -->

                </div>
            </footer>
            <!-- /footer -->

            <!-- to the top -->
            <div id="top">
                <a href="#index" title="Back to the top">
                    <i class="icon-chevron-up"></i>
                </a>
            </div>
            <!-- /to the top -->

        </div>
        <!-- /wrapper -->

        <!-- copyright -->
        <section id="copyright" class="textcenter">
            <div class="boxed">
                <div class="animated slideInLeft"><?php echo $config->copyright; ?></div>
                <?php $this->widget('ModuleWidget', array('title' => 'footer')); ?>
            </div>
        </section>
        <!-- /copyright -->

    </body>
</html>