<h1 class="done_Text">What i've done</h1>
<p class="about_Text">I program & develop interactive websites, embedded interfaces and web applications. To get a better feel of what I do, have a look at my work below.</p> 
<?php 
//Instantiate WordPress Query Object for Projects
$arguments = array("post_type" => "project");
$projects_query = new WP_Query($arguments);
?>
<?php if ($projects_query->have_posts()):?>
    <?php while($projects_query->have_posts()):?>
        <?php $projects_query->the_post(); ?>
        <section class="projects">
            <h1 class="projectName"><?php the_field("client"); ?></h1>
            <img class="projectsImg" src="<?php the_field("thumbnail"); ?>" />
            <p class="projectName"><?php the_field("lorem_ipsum_p"); ?></p>
            <?php if(have_rows("tech_stack")): ?>
                <?php while(have_rows("tech-stack")): ?>
                    <?php the_row(); ?>
                        <p><?php the_sub_field("languages"); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
