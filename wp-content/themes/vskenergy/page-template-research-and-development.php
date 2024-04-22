<?php
/*
Template Name: Research And Development Page
Template Post Type: post, page
*/
?>

<?php get_header();?>

<?php if(!empty(get_field('banner_heading')) || !empty(get_field('banner_image'))){ ?>
<section class="banner">
		<div class="slider">
			<!-- <div class="bantxt">
				<h1>BRINGING<b>CLEAN ENERGY<br></b>TO YOU</h1>
			</div> -->
			<!-- <video loop autoplay muted>
  			<source src="video/home-banner.mp4" type="video/mp4">
  				<source src="video/home-banner.ogg" type="video/ogg">
			</video> -->
			<?php if(!empty(get_field('banner_image'))){ ?>
			<img src="<?php echo get_field('banner_image');?>">
			<?php }?>



		</div>
</section>
<?php }?>

<?php if(!empty(get_field('heading_1')) || !empty(get_field('details_content')) || !empty(get_field('heading_2')) || !empty(get_field('details_content_2'))){ ?>
<section class="lead01 rshs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headh parabtn">
				    	<?php if(!empty(get_field('heading_1'))){ ?>
					<h2><span><?php echo get_field('heading_1');?></span></h2>
					<?php }?>
						<?php if(!empty(get_field('details_content'))){ ?>
						<p><?php echo get_field('details_content');?></p>
						<?php }?>
							<?php if(!empty(get_field('heading_2'))){ ?>
					<h2><span><?php echo get_field('heading_2');?></span></h2>
					<?php }?>
					
					<?php if(!empty(get_field('details_content_2'))){ ?>
						<p><?php echo get_field('details_content_2');?></p>
						<?php }?>
                 <div class="unrav mbdn">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/unrav-3-svg.svg">
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>

<?php get_footer();?>