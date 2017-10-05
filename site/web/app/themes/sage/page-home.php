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


<?php 
//Instantiate WordPress Query Object for Projects
$arguments = array("post_type" => "project");
$projects_query = new WP_Query($arguments);
?>
<!-- 
<?php if ($projects_query->have_posts()):?>
    <?php while($projects_query->have_posts()):?>
        <?php $projects_query->the_post(); ?>
        <h1><?php the_field("client"); ?></h1>
        <h2><?php the_field("client"); ?></h2>
        <img src="<?php the_field("thumbnail"); ?>" />
        <?php if(have_rows("tech_stack")): ?>
            <?php while(have_rows("tech-stack")): ?>
                <?php the_row(); ?>
                    <p><?php the_sub_field("languages"); ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?> -->