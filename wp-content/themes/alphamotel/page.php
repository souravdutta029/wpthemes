<?php 
get_header();
?>
<style>
	.title{
		margin: 12px;
		padding: 10px;
		text-align: center;
	}
	.para{
		margin: 6px;
		padding: 0 10px 0 10px;
		text-align: justify;
	}
	
</style>
<?php

	if(have_posts()){
		while(have_posts()){
			the_post();
?>
			<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			<p class="para"><?php the_content(); ?></p>

<?php	
		}
	}
?>


<?php 
get_footer();
?>