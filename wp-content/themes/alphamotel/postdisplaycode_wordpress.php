<!--post type area. -->
<?php

 $wp_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish'));

if($wp_all_query -> have_posts()):
?> 
<ul>
   ?php while($wp_all_query -> have_posts()): 
           $wp_all_query -> the_post();
    ?>  
    <li>
         <a href="<?php the_permalink();?>">
        <?php the_title(); ?>
        <?php the_content(); ?>
         <?php the_author(); ?>
        <?php the_author_email(); ?>

         </a>
    </li>
    <?php endwhile; ?>

 </ul>
 <?php else :?>
     <p><?php _e('Sorry, No match found.');?></p>
 <?php endif; ?>
<!--post type area ends. -->