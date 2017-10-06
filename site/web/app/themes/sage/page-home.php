<?php 
/**
* Template Name: Home Template
*/
//template
?>

<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part("templates/components/banner"); ?>
        <?php get_template_part("templates/components/projects"); ?>
        <?php get_template_part("templates/components/skills"); ?>
        <?php get_template_part("templates/components/contact"); ?>
    <?php endwhile; ?>
<?php endif; ?>

