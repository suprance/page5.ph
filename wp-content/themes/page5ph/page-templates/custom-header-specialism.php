<?php
/*
Template Name: Custom Header Template - Specialism
*/

get_header('unified-navbar');

while ( have_posts() ) : the_post(); ?>

	<?php if( $post->post_parent != 0 ) { ?>
		<style>
			.site-header{background-color: #4d4843;}
			header.site-header {background-position: center center;}
			.container{padding-left: 15px; padding-right: 15px;}
			.row{margin-left: -15px; margin-right: -15px;}
			[class*="col-"]{padding-left: 15px; padding-right: 15px;}
			.descriptions p:last-of-type{margin-bottom:0; text-align: left;}
			h3:last-of-type{margin-bottom:0;}
			.subsection{text-align: left;}
			.container-sub{margin-top: 35px;}
			.container-sub .row{display: flex; flex-wrap: wrap;}
			.container-sub .title{font-weight: 700; margin-bottom: 20px;}
			.container-sub .descriptions{margin-bottom: 50px;}
			.image-holder .img-full{width: 100%;height: auto;}
			.clvmid{float: none; vertical-align: middle; display: inline-block; margin: 0 -2px;}
			.box-padding-layout{margin-top: 50px;}
			.box-padding-layout img{ margin:0 auto 30px; }
			.box-padding-layout > .row{margin-bottom: 60px; margin-left: -13px; margin-right: -13px;}
			.box-padding-layout p{text-align: center;}
			.section-grey h3{text-align: center;}

			@media (min-width: 768px){
				.section-grey h3{text-align: left;}
				.box-padding-layout .description-holder{border-left: 1px solid #9b9b9b; padding-left: 45px;}
				.box-padding-layout img{max-width: 160px;height: auto; margin: 0;}
				.box-padding-layout > .row{margin-bottom: 30px;}
				.box-padding-layout p{text-align: left;}
			}

			@media (min-width: 992px) {
			#ecom-1{margin-top:45px}
			#ecom-2{margin-top:65px}
			#ecom-3{margin-top:65px}
			.box-padding-layout .description-holder{padding-left: 60px;}
			}

			@media (min-width: 1200px){
			  .box-padding-layout .description-holder{padding-left: 90px;}
			}
		</style>
	<?php } ?>

	<?php
	  remove_filter ('the_content', 'wpautop');
	  the_content();

	?>

<?php endwhile;

// end of the loop.
get_footer();
