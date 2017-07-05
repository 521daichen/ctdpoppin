<? get_header(); ?>
<body>


<?php
$category_ids = get_all_category_ids();

foreach($category_ids as $cat_id) {
    $cat_name = get_cat_name($cat_id);
    var_dump($cat_name);
}
?>
<div class="f-conatiner">

    <div class="container">

        <div class="row clearfix">
            <div class="logo col-md-12 column ">
                <img src="http://www.ctdpoppin.com/template/listen_01/image/logo.png" alt="">

            </div>

        </div>

    </div>


    <div class="container-main container">

        <nav class="navbar-main navbar" role="navigation">
            <div class="contianer">
                <!-- 导航头部 -->
                <div class="navbar-header">
                    <!-- 移动设备上的导航切换按钮 -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- 品牌名称或logo -->
                    <a class="navbar-brand" href="#">ZUI</a>
                </div>
                <!-- 导航项目 -->
                <div class="collapse navbar-collapse navbar-collapse-example">
                    <!-- 一般导航项目 -->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">项目</a></li>
                        <li><a href="#">需求</a></li>
                        <!-- 导航中的下拉菜单 -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">管理 <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">任务</a></li>
                                <li><a href="#">待办</a></li>
                                <li><a href="#">Bug</a></li>
                                <li class="divider"></li>
                                <li><a href="#">测试</a></li>
                                <li><a href="#">用例</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- END .navbar-collapse -->
            </div>
        </nav>

    </div>
</div>



<div class="container">
    <div class="row clearfix">

        <div class="lunbo col-md-8 column" ">
            <div id="myNiceCarousel" class="carousel slide" data-ride="carousel">
                <!-- 圆点指示器 -->
                <ol class="carousel-indicators">
                    <li data-target="#myNiceCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myNiceCarousel" data-slide-to="1"></li>
                    <li data-target="#myNiceCarousel" data-slide-to="2"></li>
                </ol>

                <!-- 轮播项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" src="http://zui.sexy/docs/img/slide1.jpg">
                        <div class="carousel-caption">
                            <h3>我是第一张幻灯片</h3>
                            <p>:)</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Second slide" src="http://zui.sexy/docs/img/slide2.jpg">
                        <div class="carousel-caption">
                            <h3>我是第二张幻灯片</h3>
                            <p>0.0</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="http://zui.sexy/docs/img/slide3.jpg">
                        <div class="carousel-caption">
                            <h3>我是第三张幻灯片</h3>
                            <p>最后一张咯~</p>
                        </div>
                    </div>
                </div>

                <!-- 项目切换按钮 -->
                <a class="left carousel-control" href="#myNiceCarousel" data-slide="prev">
                    <span class="icon icon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myNiceCarousel" data-slide="next">
                    <span class="icon icon-chevron-right"></span>
                </a>
            </div>
        </div>

        <div class="lunbo-right lunbo col-md-4 column" ">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" data-toggle="lightbox" data-group="image-group-1">
                            <img src="http://zui.sexy/docs/img/slide2.jpg" class="img-rounded" alt="">
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="" data-toggle="lightbox" data-group="image-group-1">
                            <img src="http://zui.sexy/docs/img/slide3.jpg" class="img-rounded" alt="">
                        </a>
                    </div>
                 </div>


        </div>
    </div>
    <div class="row clearfix">
        <nav class="navbar navbar-top" role="navigation">
            <div class="contianer">

                <div class="navbar-header">
                    <!-- 移动设备上的导航切换按钮 -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- 品牌名称或logo -->
                    <a class="navbar-brand" href="#">编舞</a>
                </div>

                <!-- 导航项目 -->
                <div class="collapse navbar-collapse navbar-collapse-example">
                    <!-- 一般导航项目 -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Poppin</a></li>
                        <li><a href="#">Hip hop</a></li>
                        <li><a href="#">Breakin</a></li>
                        <li><a href="#">Lockin</a></li>
                        <!-- 导航中的下拉菜单 -->
                    </ul>
                </div><!-- END .navbar-collapse -->
            </div>
        </nav>

        <nav class="navbar navbar-inverse" role="navigation">
            <div class="contianer">

                <div class="navbar-header">
                    <!-- 移动设备上的导航切换按钮 -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- 品牌名称或logo -->
                    <a class="navbar-brand" href="#">全部视频</a>
                </div>

                <!-- 导航项目 -->
                <div class="collapse navbar-collapse navbar-collapse-example">
                    <!-- 一般导航项目 -->


                    <ul class="nav navbar-nav">


                        <li><a href="#">黄景行</a></li>
                        <li><a href="#">杨文昊</a></li>
                        <li><a href="#">Hozin</a></li>
                        <li><a href="#">Dokyun</a></li>
                        <!-- 导航中的下拉菜单 -->
                    </ul>
                </div><!-- END .navbar-collapse -->
            </div>
        </nav>

    </div>


    <div class="row clearfix">
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
        </div>
    </div>

    <div class="row clearfix">



        <div class="shipin col-md-8 column">

            <div class="cards">


                <?
                if( have_posts() ){
                    while( have_posts() ){
                        //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                        the_post();
                        ?>


                        <div class="col-md-4 col-sm-6 col-lg-4">

                            <a class="card" href="<? the_permalink(); ?>">
                                <img src="http://zui.sexy/docs/img/img2.jpg" alt="">
                                <div class="card-heading"><strong><? the_title(); ?></strong></div>
                                <div class="card-content text-muted">

                                    <?
                                    $content = get_the_content();
                                    echo strlen($content)<20?$content:mb_substr(get_the_content(),0,20).'...';

                                    ?></div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>

                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>

<!--                                    <span>--><?// the_author();?><!--</span>-->
<!--                                    <span>--><?// the_time( 'Y-m-d' ); ?><!--</span>-->
<!--                                    --><?// edit_post_link( __( 'Edit','huangcong' ), ' <span>|</span> ', '' ); ?>
                                </div>
                            </a>
                        </div>
                        <?
                    }
                }else{
                    echo '没有日志可以显示';
                }
                ?>
            </div>
            <div class="click-getContent row">
                <div class="col-md-5">

                </div>
                <div class="col-md-2">
                    <button class="btn btn-lg btn-primary" type="button">点击加载</button>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>

        <div class="content-right col-md-4 column">
            <div class="alert alert-success with-icon">
                <i class="icon-ok-sign"></i>
                <div class="content">
                    <h4>太好了!</h4>
                    <hr>
                    <strong>你终于来了！CTD等你很久了^_^</strong>
                </div>
            </div>
        </div>


        <div class="content-right col-md-4 column">


            <div class="list list-condensed">
                <header">
                <h3><i class="icon-list-ul"></i>    导向 <small>这里是popper的世界！</small>

<!--                    <a href="" class="pull-right">我也要提问</a>-->

                </h3>
                </header>
                <div class="guide-content row">
                    <div class="col-md-6">
                        <button class="btn btn-block " type="button"><i class="icon icon-star"></i>CTDpoppin论坛</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-block " type="button">我要提问？</button>
                    </div>
                </div>

                <div class="guide-content row">
                    <div class="col-md-6">
                        <button class="btn btn-block " type="button">精华视频</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-block  " type="button">我要传视频！</button>
                    </div>
                </div>

            </div>

        </div>



        <div class="content-right col-md-4 column">
            <div class="list list-condensed">
                <header">
                <h3><i class="icon-list-ul"></i>    精华 <small>更新 123 条</small>

                    <a href="" class="pull-right">我也要提问</a>

                </h3>
                </header>
                <div class="items items-hover">
                    <div class="item">
                        <div class="item-heading">
                            <div class="pull-right"><span class="text-muted">2013-11-11 16:14:37</span> &nbsp; <a href="#" class="text-muted"><i class="icon-comments"></i> 243</a></div>
                            <h4><a href="###">HTML5 发展历史</a></h4>
                        </div>

                    </div>
                    <div class="item">
                        <div class="item-heading">
                            <div class="pull-right"><span class="text-muted">2013-11-11 16:14:37</span> &nbsp; <a href="#" class="text-muted"><i class="icon-comments"></i> 243</a></div>
                            <h4><a href="###">HTML5 发展历史</a></h4>
                        </div>

                    </div>
                    <div class="item">
                        <div class="item-heading">
                            <div class="pull-right"><span class="text-muted">2013-11-11 16:14:37</span> &nbsp; <a href="#" class="text-muted"><i class="icon-comments"></i> 243</a></div>
                            <h4><a href="###">HTML5 发展历史</a></h4>
                        </div>

                    </div>
                    <div class="item">
                        <div class="item-heading">
                            <div class="pull-right"><span class="text-muted">2013-11-11 16:14:37</span> &nbsp; <a href="#" class="text-muted"><i class="icon-comments"></i> 243</a></div>
                            <h4><a href="###">HTML5 发展历史</a></h4>
                        </div>

                    </div>

                    <div class="item">
                        <div class="item-heading">
                            <div class="pull-right"><span class="text-muted">2013-11-11 16:14:37</span> &nbsp; <a href="#" class="text-muted"><i class="icon-comments"></i> 243</a></div>
                            <h4><a href="###">HTML5 发展历史</a></h4>
                        </div>

                    </div>
                </div>

            </div>
        </div>




    </div>
</div>



<? get_footer(); ?>