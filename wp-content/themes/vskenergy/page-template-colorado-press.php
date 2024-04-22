<?php
/*
Template Name: Colorado Press Page
Template Post Type: post, page
*/
?>

<?php get_header();?>

<?php if(!empty(get_field('banner_heading')) || !empty(get_field('banner_image'))){ ?>
<section class="banner press fax">
		<div class="slider">
			<div class="bantxt">
			    <?php if(!empty(get_field('banner_heading'))){ ?>
				<h1><?php echo get_field('banner_heading');?></h1>
				<?php }?>
			</div>
			<!-- <video loop autoplay muted>
  			<source src="video/home-banner.mp4" type="video/mp4">
  				<source src="video/home-banner.ogg" type="video/ogg">
			</video> -->
			<?php if(!empty(get_field('banner_heading'))){ ?>
			<img src="<?php echo get_field('banner_image');?>">
			<?php }?>
		</div>
</section>
<?php }?>

<?php if(!empty(get_field('date')) || !empty(get_field('paragraph')) || !empty(get_field('button_name'))){ ?>
<section class="predes">
	<div class="container">
		<div class="row">
		    <div class="Pressbtn">
			        <a href="https://www.vskenergy.com/home#wtnews">< ALL PRESS</a>
			    </div>
			<div class="col-md-12">
			    
				<div class="headh paradets">
				    <?php if(!empty(get_field('date'))){ ?>
					<p><b><?php echo get_field('date');?></b></p>
					<?php }?>
					<?php if(!empty(get_field('paragraph'))){ ?>
					<p><?php echo get_field('paragraph');?></p>
					<?php }?>
					<?php if(!empty(get_field('button_name'))){ ?>
					<p class="prean"><a target="_blank" href="<?php echo get_field('button_link');?>"><?php echo get_field('button_name');?></a></p>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>

<?php get_footer();?>