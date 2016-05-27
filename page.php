<?php get_header(); ?>

<section class="content">
	<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    		<?php if(function_exists('bcn_display'))
    		{
        		bcn_display();
    		}?>
        </div>
	<?php get_template_part('parts/page-title'); ?>
	
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
		
			<article <?php post_class('group'); ?>>
				
				<div class="entry themeform">
					<?php the_content(); ?>
					<div class="clear"></div>
				</div><!--/.entry-->
				
			</article>
			<div class="pagelink"><?php wp_link_pages('pagelink=Page %'); ?></div>
                        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			<?php if ( hu_is_checked('page-comments') ) { comments_template('/comments.php',true); } ?>
			
		<?php endwhile; ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
