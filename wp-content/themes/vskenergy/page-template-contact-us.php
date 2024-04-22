<?php
/*
Template Name: Contact us
Template Post Type: post, page
*/
?>

<?php get_header();?>

<?php if(!empty(get_field('banner_heading')) || !empty(get_field('banner_image'))){ ?>
<section class="banner line2">
		<div class="slider">
			 <div class="bantxt">
				<h1>GET IN <b>TOUCH</b</h1>
			</div>
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



<section class="ctfrm">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="cntfrm">
				<?php
echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="false"]');
?>
</div>
			</div>
			<div class="col-md-1">
			</div>
			
		</div>
	</div>
</section>

<?php get_footer();?>