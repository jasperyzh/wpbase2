<article class="blog-post">

    <h2 class="display-5 link-body-emphasis mb-1"><?= the_title(); ?></h2>

    <p class="blog-post-meta"><?= get_the_date(); ?> by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?= get_the_author(); ?></a></p>

    <?php the_content(); ?>

</article>

<!-- 
<nav class="blog-pagination" aria-label="Pagination">
<a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
<a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
</nav>
-->

<nav class="blog-pagination" aria-label="Pagination">
    <?php
    // Older posts link
    previous_posts_link('<span class="btn btn-outline-primary rounded-pill">Older</span>');

    // Newer posts link
    next_posts_link('<span class="btn btn-outline-secondary rounded-pill">Newer</span>');
    ?>
</nav>