<?php
get_header();
?>

<main class="container my-5">
    <h1>Zoekresultaten voor: <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>Geen resultaten gevonden. Probeer een andere zoekterm.</p>
    <?php endif; ?>
</main>

<?php
get_footer();
?>
