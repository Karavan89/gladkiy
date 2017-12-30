<?php get_header(); ?>
    <!-- header title -->

    <!-- ./header title -->
    <!-- content -->
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php $date = get_the_date(); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4><?php the_title(); ?></h4></div>
                        <div class="panel-body">
                            <div class="content">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-right date-color"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<?php the_author(); ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;<?php echo $date; ?></p></div>
                                <?php $image = get_field('image');
                                if( !empty($image) ): ?>
                                    <div class="content-img">
                                        <img class="img-rounded img-responsive" src="<?php echo $image; ?>" />
                                    </div>
                                <?php endif; ?>

                                <div class="content-text">
                                    <?php if( has_excerpt() ){
                                        the_excerpt();
                                    } else {
                                        the_content();
                                    }?>

                                </div>
                            </div>
                            <?php if( has_excerpt() ) : ?>
                                <a class="btn btn-default main-btn" href="<?php echo get_permalink(); ?>">Подробнее...</a>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="text-center">

                    <!-- <nav aria-label="Page navigation">!-->
                    <?php if ( have_posts() ) :?>
                        <?php
                        if (function_exists("wp_bs_pagination"))
                        {
                            //wp_bs_pagination($the_query->max_num_pages);
                            wp_bs_pagination();
                        }
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ./content -->
    <!-- footer -->
<?php get_footer(); ?>