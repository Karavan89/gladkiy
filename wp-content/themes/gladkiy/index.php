<?php

get_header();
?>

    <!-- content -->
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

        <!-- Start the Loop. -->
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
        <?php endwhile; ?>

        <?php else: ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
    </div>
    </div>
    <!-- ./content -->
    <!-- list
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Больше статей...</h4>
                        <ol class="list">

<?php /* $query = new WP_Query( array('post_type' => 'post',
                                   'category_name' => 'news',
                                   'paged' => $paged+1,
                                   'posts_per_page' => 5,
                                ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                            <li><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></li>

<?php endwhile; ?>
<?php endif; */?>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
     ./list -->
    <!-- pagination -->
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
                    <!--                        <ul class="pagination">-->
                    <!--                            <li class="disabled">-->
                    <!--                                <a href="#" aria-label="Previous">-->
                    <!--                                    <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li class="active"><a href="#">1</a></li>-->
                    <!--                            <li><a href="#">2</a></li>-->
                    <!--                            <li><a href="#">3</a></li>-->
                    <!--                            <li><a href="#">4</a></li>-->
                    <!--                            <li><a href="#">5</a></li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#" aria-label="Next">-->
                    <!--                                    <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--</nav>-->
                </div>
            </div>
        </div>
    </div>
    <!-- ./ pagination -->
<?php get_footer(); ?>