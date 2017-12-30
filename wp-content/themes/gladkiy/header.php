<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?></title>

<?php wp_head() ?>
</head>
<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

<!-- Navbar -->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="hamburger top-nav hamburger--collapse hidden-sm hidden-md hidden-lg" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                               <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                               </span>
            </button>
            <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>-->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img alt="Brand" src="...">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if( is_front_page() ) { ?>
                    <li class="active"><a href="<?php echo home_url('/'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Головна <span class="sr-only">(current)</span></a></li>
                <?php } else{ ?>
                    <li><a class="a_hover" href="<?php echo home_url('/'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Головна <span class="sr-only">(current)</span></a></li>
                <?php } ?>

                <?php
                // Получим ID категории
                $category_id = get_cat_ID( 'about us' );

                // Теперь, получим УРЛ категории
                $category_link = get_category_link( $category_id );
                ?>
                <?php if( is_category('about us') ) : ?>
                <li class="active"><a href="<?php echo $category_link; ?>">О Компании</a></li>
                <?php  else : ?>
                <li><a class="a_hover" href="<?php echo $category_link; ?>">О Компании</a></li>
                <?php endif; ?>
            </ul>
            <!-- search -->
            <?php get_search_form(); ?>
            <!-- //search -->
        </div>

    </div>
</nav>

<!-- // Navbar -->

<!-- jumbotron -->
<div class="parallax1">
    <style>
        .parallax1 {
            background-image: url("<?php bloginfo('template_url'); ?>/img/Page-BgTexture.jpg");
            background-repeat: repeat;
            height: 100%;
        }
    </style>

<div class="jumbotron parallax">
    <style>
        .parallax {
            background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url("<?php bloginfo('template_url'); ?>/img/fireworks.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            opacity: 1;
            filter: alpha(opacity=1);
            }
    </style>
    <div class="container container-head">
        <?php $frontpage_id = get_option( 'page_on_front' ); ?>

        <h1><?php the_field (header_title, $frontpage_id); ?></h1>
        <h3><?php the_field(header_description, $frontpage_id); ?></h3>

        <?php if( get_field('header_batton_text', $frontpage_id) ): { ?>

            <p><a class="btn btn-primary btn-lg" href="<?php the_field(header_batton_linc, $frontpage_id); ?>" role="button"><?php the_field(header_batton_text, $frontpage_id); ?></a></p>
        <?php } endif; ?>

    </div>

    <!-- Best employees -->
    <?php if( have_rows('employees', $frontpage_id) ): ?>
<hr class="syle1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"><?php the_field('title', $frontpage_id); ?></h2>
            </div>
            <?php $i=0; $class='col-xs-6 col-sm-offset-1 col-md-offset-1 col-lg-offset-1'?>
            <?php while ( have_rows('employees', $frontpage_id) ) : the_row(); ?>
            <?php if ($i==0) : ?>
                <div class="<?php echo $class; ?> col-xs-6 col-sm-2 col-md-2 col-lg-2">
            <?php else : ?>
                <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
            <?php endif; ?>
                <div class="panel panel-default panel-header">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center"><?php the_sub_field(gorod, $frontpage_id); ?></h4>
                    </div>
                    <div class="panel-body panel-body-header text-center">
                        <?php the_sub_field(krascha_komanda, $frontpage_id); ?><br>
                        <?php the_sub_field(kraschyi_tp, $frontpage_id); ?>
                    </div>
                </div>
            </div>
            <?php $i += 1; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <!-- //Best employees -->
        <hr class="syle2">
</div>


<!-- //jumbotron -->

<!-- <div class="container-fluid baner">
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <img src="img\Header.png" alt="img">
         </div>
 </div> -->

<!-- <div class="container-fluid">
        <div class="row">
            <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-2 col-sm-2 col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">г. Черкассы</h3>
                    </div>
                    <div class="panel-body">
                        <p>fggf</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">

            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">

            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">

            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">

            </div>
        </div>
</div>-->

<?php if (is_front_page() ) : { ?>
    <!-- carusel -->
<?php if( have_rows('repeater_carusel') ): ?>
<div class="container my-carousel">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $active = 'active';
                    $num = 0;
                    while ( have_rows('repeater_carusel') ) : the_row(); ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"></li>
                        <?php
                        $active = '';
                        $num += 1;
                    endwhile; ?>
                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox">

                    <?php
                    $active = 'active';
                    while ( have_rows('repeater_carusel') ) : the_row();
                    $image = get_sub_field('image');
                    ?>
                        <div class="item <?php echo $active ?> screen08">
                            <img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
                            <div class="carousel-caption">
                                <h1><?php the_sub_field(image_description); ?></h1><a class="btn btn-padding" href="<?php the_sub_field(image_batton_linc); ?>"><button type="button" class="btn btn-primary"><?php the_sub_field(image_batton_title); ?></button></a>
                            </div>
                        </div>
                    <?php $active = '';
                    endwhile;
                    ?>

                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
    <?php endif; ?>
    <!-- //carusel -->
<?php } endif; ?>


<!-- menu -->
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                   <div class="panel panel-default">
                       <div class="panel-heading">
                           <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="cool-xs-6"><h3 class="panel-title menu-title">Главное меню</h3></div>
                           <div class="cool-xs-6 pull-right">
                               <div class="navbar-header">
                                   <button class="hamburger sidebar-menu hamburger--collapse hidden-sm hidden-md hidden-lg" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-2" aria-expanded="false">
                               <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                               </span>
                                   </button>
                                   <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-2" aria-expanded="false">
                                       <span class="sr-only"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                   </button>-->
                               </div>
                           </div>



                       </div>

                       <!-- Collect the nav links, forms, and other content for toggling -->
                       <div class="collapse navbar-collapse padding-navbar-collapse" id="bs-navbar-collapse-2">
                       <?php
                       wp_nav_menu( array(
                           'theme_location'  => '',
                           'menu'            => '',
                           'container'       => 'div',
                           'container_class' => '',
                           'container_id'    => '',
                           'menu_class'      => 'nav nav-pills nav-stacked',
                           'menu_id'         => '',
                           'echo'            => true,
                           'fallback_cb'     => 'wp_page_menu',
                           'before'          => '',
                           'after'           => '',
                           'link_before'     => '',
                           'link_after'      => '',
                           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                           'depth'           => 0,
                           'walker'          => '',
                       ) );
                       ?>
                        <!--<ul class="nav nav-pills nav-stacked">
                            <li role="presentation" class="active"><a href="#">Новости<span class="badge">9</span></a></li>
                            <li role="presentation"><a href="#">Наши бренды</a></li>
                        </ul>-->
                    </div>
                </div>

                </div>

                <!-- top news -->
                <div class="hidden-xs col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Популярные новости</h3>
                        </div>
                        <div class="panel-body">

                            <ul class="news">
                                <?php
                                $args = array(
                                    'numberposts' => 5,
                                    'meta_key'    => 'post_views_count',
                                    'orderby'     => 'meta_value_num',
                                    'order'       => 'DESC'
                                );
                                query_posts( $args );
                                while ( have_posts() ) : the_post();
                                    ?>
                                    <li class="list-unstyled"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <br>
                                <?php endwhile;
                                wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //top news -->
            </div>
        </div>

        <!-- //menu -->