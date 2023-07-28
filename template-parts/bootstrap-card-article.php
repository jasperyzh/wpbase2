<div id="post-<?php the_ID(); ?>" <?php post_class("card card-article h-100"); ?>>

    <!-- <h3 class="mb-0">Featured post</h3> -->
    <div class="card-body">
        <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
        <h3 class="mb-0"><?= the_title() ?></h3>
        <div class="mb-1 text-body-secondary"><?= the_date() ?></div>
        <p class="card-text mb-auto"><?= the_excerpt() ?></p>
        <a href="<?= get_the_permalink() ?>" class="btn btn-secondary">
            Find Out More
        </a>
    </div>

    <?php wpbase2_post_thumbnail(NULL, ""); ?>

</div>

<style>
    .card-article {
        display: flex;

        .post-thumbnail {
            order: -1;
        }

        .post-thumbnail img {
            object-fit: cover;
            width: 100%;
            height: 100%;

            aspect-ratio: 4/3;
        }
    }

    @media only screen and (min-width: 768px) {

        .card-article {
            flex-direction: row;

            .post-thumbnail {
                order: 2;

                flex: 0 0 240px;
            }

            .post-thumbnail img {
                aspect-ratio: 3/4;
            }
        }

    }
</style>