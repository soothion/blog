<!-- header -->
<header id="header" role="header">
    <?php $this->widget('ModuleWidget', array('title' => 'header')); ?>
</header>
<!-- /header -->

<!-- nav -->
<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
            <a href="<?php echo Yii::app()->createUrl('index');?>"><img src="/assets/img/logo-foot.png" alt="火焰雨" /></a>
        </div>
        <?php $this->widget('NavWidget'); ?>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div id="content">

    <!-- page -->
    <section id="page">
        <?php $this->widget('ModuleWidget', array('title' => 'page')); ?>
    </section>
    <!-- /page -->

</div>
<!-- /content -->

<!-- quotes -->
<section id="quotes">
    <?php $this->widget('ModuleWidget', array('title' => 'quotes')); ?>
</section>
<!-- /quotes -->


