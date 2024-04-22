<?php
/*
Template Name: Home Page
Template Post Type: post, page
*/
?>

<?php get_header();?>

<?php if(!empty(get_field('banner_heading')) || !empty(get_field('banner_image'))){ ?>
<section class="line3">
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

<?php if(!empty(get_field('section_1_heading')) || !empty(get_field('section_1_paragraph')) || !empty(get_field('section_1_button_name'))){ ?>
<section class="sec02" id="leading-the-new-tomorrow">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="sec2">
				</div>
			</div>
			<div class="col-md-4">
				<div class="headh parabtn">
					<?php if(!empty(get_field('section_1_heading'))){ ?>
					<h2 class="mb-3"><?php echo get_field('section_1_heading');?></h2>
					<?php }?>
					<?php if(!empty(get_field('section_1_paragraph'))){ ?>
					<p class="mb-5"><?php echo get_field('section_1_paragraph');?></p>
					<?php }?>
					<?php if(!empty(get_field('section_1_button_name'))){ ?>
					<p><a href="<?php echo get_field('section_1_button_link');?>"><?php echo get_field('section_1_button_name');?></a></p>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>	


<?php if(!empty(get_field('section_2_heading'))){ ?>
<section class="sec03 revo" id="our-revolution-in-numbers">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="sec2">
					<svg>
						<text x="20%" y="27%" dy=".35em" text-anchor="middle">
						s
						</text>
					</svg>
				</div>
			</div>
			<div class="col-md-6">
				<div class="headh">
					<?php if(!empty(get_field('section_2_heading'))){ ?>
					<h2><?php echo get_field('section_2_heading');?></h2>
					<?php }?>
					<?php if ( have_rows('revolution_numbers')): ?>
					<ul>
						<?php while (have_rows('revolution_numbers')): the_row(); ?>
						<li class="hveff">
							<img src="<?php echo get_sub_field('revolution_image');?>">
							<div class="revicon"><?php echo get_sub_field('revolution_heading');?>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>

<?php if(!empty(get_field('section_3_heading'))){ ?>
<section class="clenry" id="bringing-clean-energy-to-you">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headh wtheadh">
				    <?php if(!empty(get_field('section_3_heading'))){ ?>
					<h2><?php echo get_field('section_3_heading');?></h2>
					<?php }?>
				</div>
			</div>
			<?php if ( have_rows('bringing_energy')): ?>
		  <?php while (have_rows('bringing_energy')): the_row(); ?>
			<div class="col-md-6">
				<div class="brwht">
					<img src="<?php echo get_sub_field('bringing_energy_image');?>">
				<h3><?php echo get_sub_field('bringing_energy_heading');?></h3>
				<p><?php echo get_sub_field('bringing_energy_paragraph');?></p>
			</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>
<?php }?>

<?php if(!empty(get_field('section_4_heading_1')) || !empty(get_field('section_4_heading_2'))){ ?>
<section class="modles" id="broad-range-of-solar-modules">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="letter headh">
				    <?php if(!empty(get_field('section_4_heading_1'))){ ?>
					<h2><?php echo get_field('section_4_heading_1'); ?></h2>
					<?php }?>
				</div>
			</div>
				<div class="col-md-12">
					<div class="headh clr">
					<?php if(!empty(get_field('section_4_heading_2'))){ ?>
					<h2><a href="https://www.vikramsolar.us/portfolio-based/" target="_blank"><?php echo get_field('section_4_heading_2'); ?></a></h2>
					<?php }?>
				</div>
				</div>
				<div class="col-md-12">
					<div class="wrapper">
					    <?php if ( have_rows('solar_modules')): ?>
  <div class="my-slider">
      <?php while (have_rows('solar_modules')): the_row(); ?>
      		<div class="card">
      			<div class="pro myDIV">
						  <img src="<?php echo get_sub_field('solar_modules_image_1');?>" class="brlogo">
						  <img src="<?php echo get_sub_field('solar_modules_image_2');?>">						 
						  <div class="hide">
						  	<h4><?php echo get_sub_field('solar_modules_heading');?></h4>
						  	<p><?php echo get_sub_field('solar_modules_paragraph_1');?></p>
						  	<p><?php echo get_sub_field('solar_modules_paragraph_2');?></p>
						  	<p><?php echo get_sub_field('solar_modules_paragraph_3');?></p>
						  	<p><a href="<?php echo get_sub_field('solar_modules_button_link');?>" target="_blank"><?php echo get_sub_field('solar_modules_button_name');?></a>
						  </div>
					 </div>
      	 </div>
   <?php endwhile; ?>	
   <?php endif; ?>
</div>
				</div>
				
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>

<?php if(!empty(get_field('section_5_heading'))){ ?>
<section class="applica">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headh clr mb-4">
					<?php if(!empty(get_field('section_5_heading'))){ ?>
					<h2><a href="https://www.vikramsolar.us/application-based" target="_blank"><?php echo get_field('section_5_heading');?></a></h2>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php if ( have_rows('application')): ?>
		<div class="row">
			<?php while (have_rows('application')): the_row(); ?>
			<div class="col-md-4">
			   

			    <a href="<?php echo get_sub_field('link');?>" target="_blank">
				<div class="appli img-wrapper01">
					<h3><?php echo get_sub_field('application_heading');?></h3>
				<img src="<?php echo get_sub_field('application_image');?>">
				</div></a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php }?>


<section class="news" id="whats-new">

	<div class="container">
  <div class="row">
    <div class="col-md-12">
    	<div class="headh wtheadh">
      <h2><span>WHATS <b>NEW</b></span></h2>
    </div>
    </div>
  </div>
</div>


    <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
        <div class="post-slide">

          <div class="post-slide2">
            <div class="slicon">
              <p>Phalanx Impact Partners Launches as Premier Private Equity Firm Focused on Environmental Impact Investing and Sustainable Industries</p>
               <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/phalanx/" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phalanx.png" alt="">

          </div>

          <div class="post-slide2">
            <div class="slicon">
              <p>$250 million solar panel plant headed for Brighton, bringing up to 900 high-paying jobs</p>
               <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/the-denver-gazette/" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/denverg.png" alt="">

          </div>
          <div class="post-slide2">
            <div class="slicon">
              <p>Vikram Solar forms JV to build vertically integrated solar manufacturing in the US</p>
              <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/pv-tech/" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pv.png" alt="">

          </div>

        </div>


        <div class="post-slide">

          <div class="post-slide2">
            <div class="slicon">
              <p>Vikram Solar picks Colorado for 2-GW solar panel factory</p>
               <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/solar-power-world/" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/solar.png" alt="">

          </div>

          <div class="post-slide2">
            <div class="slicon">
              <p>Exclusive: Group backed by India's Vikram Solar to invest $1.5 billion in new US factories</p>
               <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/reuters/" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reuters.png" alt="">

          </div>
          <div class="post-slide2">
            <div class="slicon">
              <p>Advancing CleanTech in Colorado: Solar Manufacturer Selects Colorado for Expansion and Over 900 New Jobs</p>
              <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/colorado" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/colorado.png" alt="">

          </div>

        </div>

        <div class="post-slide">

          <div class="post-slide2">
            <div class="slicon">
              <p>Vikram Solar, Phalanx Impact Partners, and Das & Co. Announce Joint Venture to Invest Up to $1.5 Billion to Scale Vertically Integrated Production of American-Made Solar</p>
               <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.vskenergy.com/businesswire/" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/businesswire.png" alt="">

          </div>

          <div class="post-slide2">
            <div class="slicon">
              <p>Solar panel factory to bring 900 jobs to Denver metro area, governor's office says</p>
               <span class="post-date">Thursday, June 22, 2023</span><span><a href="https://www.bizjournals.com/denver/news/2023/06/22/colorado-brighton-solar-panel-factory-vsk-energy.html" class="read-more">Readmore <img
               	src="<?php echo get_template_directory_uri(); ?>/assets/img/rt-arw.svg"></a></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/denver.png" alt="">

          </div>
          <!-- <div class="post-slide2">
            <div class="slicon">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium</p>
              <span class="post-date">Saturday . september 2, 2023</span><span><a href="#" class="read-more">Readmore <img
               	src="img/rt-arw.svg"></a></span>
            </div>
            <img src="img/colorado.png" alt="">

          </div> -->

        </div>
      </div>
    </div>
  </div>
</div>
	
</section>

<section class="nwsltr">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="letter headh wtheadh">
					<h2>Subscribe to our <b>Newsletter</b></h2>
					<div class="from">
					    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]');
?>


					<!--	<input type="mail" name="Email-id" placeholder="Email-id"> <button>submit</button>-->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- <?php if(!empty(get_field('section_7_heading')) || !empty(get_field('section_7_button_name'))){ ?>
<section class="nwsltr">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="letter headh wtheadh">
					<?php if(!empty(get_field('section_7_heading'))){ ?>
					<h2><?php echo get_field('section_7_heading');?></h2>
					<?php }?>
					<div class="from">
						<?php if(!empty(get_field('section_7_button_name'))){ ?>
						<input type="mail" name="Email-id" placeholder="Email-id"> <button><?php echo get_field('section_7_button_name');?></button>
						<?php }?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php }?> -->

</main>

<?php get_footer();?>