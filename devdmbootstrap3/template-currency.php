<?php
/**
 * Template Name: Currency
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-part', 'topnav'); ?>
<section class="container sidebar">
<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>

    <div class="col-md-12 dmbs-main">

		<?php

				   $args = array('category_name' => 'currencies');
				   $category_posts = new WP_Query($args);

				   if($category_posts->have_posts()) : 
				      while($category_posts->have_posts()) : 
				         $category_posts->the_post();
				?>

		         <?php 
					// if ( in_category( 'currencies' ) ) : 
					$title= str_ireplace('"', '', trim(get_the_title()));  
					$desc= str_ireplace('"', '', trim(get_the_content()));
				?>
				<a href="<?php the_permalink(); ?>" class="col-md-3">
					<div class="item-coin">
	                    <div class="avatar">
	                        <img src="<?php the_field('cp_img'); ?>" alt="" />
	                    </div>
	                    <div class="title">
	                        <p><?php echo $title; ?></p>
	                    </div>
	                </div>    
				</a>
				<?php
				      endwhile;
				   else : 
				?>

				      <!-- NO POSTS -->

				<?php
				   endif;
				?>

    </div>


</div>
</section>
<!-- end content container -->

<?php get_footer(); ?>
