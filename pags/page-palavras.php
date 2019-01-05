<?php /*Template Name: Palavras*/ get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- TITULO -->
    <div class="p-1 m-0" style="
    background-image: url(<?php echo get_stylesheet_directory_uri()?>/imgs/palavra-topo-background.jpg);
    background-color: rgba (0,0,0,0.5);
    background-blend-mode: color;
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;">
	    <div class="container text-white py-3">
            <h2 class="h2" style="font-family: cursive;">PALAVRA PARA A CÉLULA!</h1>
            <hr style="font-weight=”700”;width: 50%">
	        <h3 class="h3"><?php the_title(); ?></h1>
        </div>
    </div>
    <!-- CONTEÚDO -->
    <div class="container">
    <p class="h5 text-dark pt-2" style="p:first-line{text-indent:1em;p::first-letter { 
    font-size: 200%;} ">
    <?php the_content(); ?></p>
    </div>

<?php endwhile; else: ?>
    <p class="h5"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>   
<?php get_footer(); ?>