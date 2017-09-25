<?php 
/**
* Template Name: Home Template
*/
//template
?>
<section class="home-banner">
    <?php // always start your WP loop ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php // can use this for my banner image ?>
        <?php //the featured image attached to all posts / pages are rendered using usnt the post_thumbail ?>
        <?php the_post_thumbnail(); ?>
        <?php //the content in the WYSIWYG Editor ?>
        <?php the_content(); ?>
        <h1 class="my_Name">Kevin Lopez</h1>
        <h2 class="front_End_Text">Front-end web developer</h2>
        <input class="look_At_Work_Btn" type="button" value="Have a look at my work.">
        <i class="fa fa-arrow-down fa-3x"  aria-hidden="true"></i>
    <?php endwhile; ?>
</section>

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