<?php get_header(); ?>

<main class="container py-5">
  <h1 class="mb-4">Appeltaart Recepten</h1>

  <form method="get" class="mb-4">
    <label><input type="checkbox" name="ingredient[]" value="kaneel"> Kaneel</label>
    <label><input type="checkbox" name="ingredient[]" value="rozijnen"> Rozijnen</label>
    <label><input type="checkbox" name="ingredient[]" value="bladerdeeg"> Bladerdeeg</label>
    <button type="submit">Filter</button>
  </form>

  <?php
    $args = array('post_type' => 'recept');
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query->the_post(); ?>
      <article class="mb-4 p-3 bg-light border rounded">
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
      </article>
  <?php endwhile; wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>
