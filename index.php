<?php get_header(); ?>

<?php $post = get_post(); ?>

    <section id="welcome" class="top-background">

        <section class="page-content">

            <div class="container special-width">

                <?php echo $post->post_content; ?>

            </div>

        </section>


    </section>

<?php get_footer(); ?>