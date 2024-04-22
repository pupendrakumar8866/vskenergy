<?php
/*
Template Name: Leading The New Tomorrow Page
Template Post Type: post, page
*/
?>

<?php get_header();?>


<?php if(!empty(get_field('banner_heading')) || !empty(get_field('banner_image'))){ ?>
<section class="banner">
		<div class="slider">
			<div class="bantxt">
				<?php if(!empty(get_field('banner_heading'))){ ?>
				<h1><?php echo get_field('banner_heading');?></h1>
				<?php }?>
			</div>
			<?php if(!empty(get_field('banner_image'))){ ?>
			<img src="<?php echo get_field('banner_image');?>">
			<?php }?>
			<!-- <video loop autoplay muted>
  			<source src="video/home.mp4" type="video/mp4">
  				<source src="video/home.ogg" type="video/ogg">
			</video> -->
		</div>
</section>
<?php }?>


<?php if(!empty(get_field('heading')) || !empty(get_field('details_content'))){ ?>
<section class="lead01 rshs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headh parabtn">
				    	<?php if(!empty(get_field('heading'))){ ?>
					<h2><span><?php echo get_field('heading');?></h2>
					    	<?php }?>
						<?php if(!empty(get_field('details_content'))){ ?>
					<p><?php echo get_field('details_content');?></p>
				    	<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>


<?php get_footer();?>