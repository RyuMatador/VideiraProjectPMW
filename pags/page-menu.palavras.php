<!-- HEADER -->
<?php /*Template Name: Menu Palavras*/ get_header(); ?>
    
    <!-- LOOP -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- TITULO -->
        <div class="container">
            <h1 class="display-4 text-primary text-center pt-3"><?php the_field('titulo_menu_palavras')?></h1>
            <h3 class="h3 text-secondary text-center py-2"><?php the_field('sub_menu_palavras')?></h3>
        </div>
    
        <!-- PRINCIPAL -->
        <div class="container">
            <div class="row">
                <?php 
            </div>
        </div>

    <!--END LOOP-->
    <?php endwhile; else: ?>
        <p class="h5"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<!--FOOTER-->
<?php get_footer(); ?>