<?php get_header();?>
<div class="mainContainer">
    <?php if ( have_posts() ) { ?>
        <?php while(have_posts()) { ?>
            <?php the_post(); ?>
            <!-- <h1 clas=""> <?php the_title(); ?> </h1> -->
            <?php the_content(); ?>
        <?php } ?>
    <?php } ?>
</div>
<?php get_footer();?>