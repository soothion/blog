<!-- header -->
<header id="header" role="header">
    <div class="boxed">
        <!-- tagline -->
        <div id="tagline">
            <h1>博客</h1>
        </div>
        <!-- /tagline -->

    </div>
</header>
<!-- /header -->   

<!-- nav -->
<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
            <a href="<?php echo Yii::app()->createUrl('index');?>"><img src="/assets/img/logo-head.png" alt="Laravel" /></a>
        </div>
        <?php $this->widget('NavWidget'); ?>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div id="content">

    <!-- docs -->
    <section id="documentation">
        <article class="boxed">

            <!-- docs nav -->
            <nav id="docs">
                <ul>
                    <?php foreach ($categorys as $category) { ?>
                        <li>
                            <?php echo $category->title ?>
                            <ul>
                                <?php foreach ($category->blog as $blog) { ?>
                                    <li><a href="<?php echo Yii::app()->createUrl('blog/index', array('alias' => $blog->alias)) ?>"><?php echo $blog->title; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?}?>
                    </ul>

                </nav>
                <!-- /docs nav -->

                <!-- docs content -->
                <div id="docs-content">
                    <?php echo $content; ?>
            </div>
            <!-- /docs content -->

        </article>
    </section>
    <!-- /docs -->
</div>
<!-- /content -->