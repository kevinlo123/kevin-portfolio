
<?php 
//Instantiate WordPress Query Object for Projects
$arguments = array("post_type" => "skill");
$skills_query = new WP_Query($arguments);
?>
<?php if ($skills_query->have_posts()):?>
    <?php while($skills_query->have_posts()):?>
        <?php $skills_query->the_post('skills'); ?>
        <section class="skills">
            <h1>Skills</h1>
            <img class="pic" src="<?php the_field("html5"); ?>" />
            <img class="picC" src="<?php the_field("css3"); ?>" />
            <img class="picSass" src="<?php the_field("sass"); ?>" />
            <img class="picjs" src="<?php the_field("javascript"); ?>" />
            <img class="pic" src="<?php the_field("jquery"); ?>" />
            <img class="picb" src="<?php the_field("bootstrap"); ?>" />
            <img class="picGit" src="<?php the_field("git"); ?>" />   
            <button class="resume_Button">Resume</a></button>       
        </section>       
    <?php endwhile; ?>
<?php endif; ?>
