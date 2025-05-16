<?php
get_header();
?>

<main class="container my-5">
    <?php the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div>
        <?php the_content(); ?>
    </div>
</main>

<?php
get_footer();
?>
