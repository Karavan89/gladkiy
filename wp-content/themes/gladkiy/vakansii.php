<?php
/**
 *Template Name: Вакансии
 */
get_header();

$args = array(
    'post_type' => 'post',
    'category_name' => 'vakansii',
);
query_posts($args);
?>
    <!-- header title -->

    <!-- ./header title -->
    <!-- content -->
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <div class="panel-group" id="accordion">
        <?php
            $i=1;
            $collapsin="collaps in";
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php $date = get_the_date();

            ?>

            <div class="panel panel-primary">
                <div class="panel-heading custom-panel">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php $i+=1; ?>
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
    </div>

    <!-- ./content -->
    <!-- footer -->
<?php get_footer(); ?>