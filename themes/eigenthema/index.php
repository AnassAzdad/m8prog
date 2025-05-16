<?php get_header(); ?>

<main class="container my-5">
<?php

if ( have_posts() ) :

    while ( have_posts() ) :
        the_post(); ?>
        
        <article class="mb-5">
            <h2><?php the_title(); ?></h2>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>

    <?php endwhile;

else :
    echo '<p>Volgens mij zoek je iets dat er niet is.</p>';
endif;
?>
</main>

<?php get_footer(); ?>
