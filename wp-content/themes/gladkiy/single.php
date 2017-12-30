<?php get_header(); ?>

<!-- content -->

        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php setPostViews(get_the_ID()); ?>
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
                            <?php the_content(); ?>

                            <?php
                                $images = get_field('test');

                                if( $images ): ?>
                                    <ul>
                                        <?php foreach( $images as $image ): ?>
                                            <li class="list-unstyled">
                                                <a href="<?php echo $image['url']; ?>">
                                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                </a>
                                                <p><?php echo $image['caption']; ?></p>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                             <?php endif; ?>

                        </div>
                    </div>
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
<!-- ./content -->
<!-- footer -->
<?php get_footer(); ?>