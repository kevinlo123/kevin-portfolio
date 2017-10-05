<section class="home-banner">
    <?php // always start your WP loop ?>
      <?php // can use this for my banner image ?>
      <?php //the featured image attached to all posts / pages are rendered using usnt the post_thumbail ?>
      <?php the_post_thumbnail(); ?>
      <?php //the content in the WYSIWYG Editor ?>
      <img class="logo" src="https://files.slack.com/files-tmb/T067WE06B-F7CUGCQ4S-85b1024e09/kevin_360.png">
      <h1 class="my_Name">Kevin Lopez</h1>
      <h2 class="front_End_Text"><?php the_field("front_end_web_developer"); ?></h2>
      <input class="look_At_Work_Btn" type="button" value="Have a look at my work.">
      <i class="fa fa-arrow-down fa-2x"  aria-hidden="true"></i>
</section>
