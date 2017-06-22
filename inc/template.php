<html lang="en">
<?php require_once 'inc/head.php'; ?>
<body>
<!--/PAGE CANAVAS-->
<div class="canavas" id="<?php echo $param1 ?>">

    <?php
    if (isset($left_filters)) { ?>
    <!--OPEN FILTERS BUTTON-->
    <div id="filters-open-adaptive" class="green">
        <div>
            <span class="f15 display-block">FILTER</span>
            <i class="fa fa-arrow-down f20 display-block" aria-hidden="true"></i>
        </div>
    </div>
    <!--/OPEN FILTERS BUTTON-->
    <?php } ?>

    <!--OVERLAY MASK-->
    <div id="overlay"></div>
    <!--/OVERLAY MASK-->

    <!--SLIDE ON TOP-->
    <div id="on-top" class="pad10 radius4 gray-bck">
        <i class="ti ti-arrow-circle-up f40 white"></i>
    </div>
    <!--/SLIDE ON TOP-->

    <!--WRAP-->
    <div class="wrap">
        <?php
        !empty($top) ? require_once $top : '';
        !empty($content) ? require_once $content : '';
        !empty($footer) ? require_once $footer : '';
        ?>
    </div>
    <!--WRAP-->
</div>
<!--/PAGE CANAVAS-->
</body>
</html>