<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script>
	// Minified version of isMobile included in the HTML since it's small
    !function(a){var b=/iPhone/i,c=/iPod/i,d=/iPad/i,e=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,f=/Android/i,g=/(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,h=/(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,i=/IEMobile/i,j=/(?=.*\bWindows\b)(?=.*\bARM\b)/i,k=/BlackBerry/i,l=/BB10/i,m=/Opera Mini/i,n=/(CriOS|Chrome)(?=.*\bMobile\b)/i,o=/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,p=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),q=function(a,b){return a.test(b)},r=function(a){var r=a||navigator.userAgent,s=r.split("[FBAN");return"undefined"!=typeof s[1]&&(r=s[0]),s=r.split("Twitter"),"undefined"!=typeof s[1]&&(r=s[0]),this.apple={phone:q(b,r),ipod:q(c,r),tablet:!q(b,r)&&q(d,r),device:q(b,r)||q(c,r)||q(d,r)},this.amazon={phone:q(g,r),tablet:!q(g,r)&&q(h,r),device:q(g,r)||q(h,r)},this.android={phone:q(g,r)||q(e,r),tablet:!q(g,r)&&!q(e,r)&&(q(h,r)||q(f,r)),device:q(g,r)||q(h,r)||q(e,r)||q(f,r)},this.windows={phone:q(i,r),tablet:q(j,r),device:q(i,r)||q(j,r)},this.other={blackberry:q(k,r),blackberry10:q(l,r),opera:q(m,r),firefox:q(o,r),chrome:q(n,r),device:q(k,r)||q(l,r)||q(m,r)||q(o,r)||q(n,r)},this.seven_inch=q(p,r),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window?this:void 0},s=function(){var a=new r;return a.Class=r,a};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=r:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=s():"function"==typeof define&&define.amd?define("isMobile",[],a.isMobile=s()):a.isMobile=s()}(this);
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>	
	
	<?php if( get_option( 'reedwan_code_allow_google' ) ) : ?>
	<?php echo get_option( 'reedwan_code_allow_google' ) ?>
	<?php endif; ?>
</head>

<?php 
	global $url_images; 
	$url_images = get_stylesheet_directory_uri() . '/images/'; 

	$url = site_url();
?>
<body <?php body_class(); ?>>
	<div id="outer-wrap">
	<div id="inner-wrap">

			<header class="header row expanded">
			  	<div class="row">

			  		<div class="medium-3 show-for-medium-only columns">
				  		<a class="nav-btn" id="nav-open-btn-tablet" href="#nav">Book Navigation</a>
				  	</div>
			  		<div class="small-2 show-for-small-only columns">
			  			<a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
				  	</div>
				  	<div class="small-8 hide-for-medium-only medium-3 large-3 columns">
						<div class="logo centered">
							<a href="<?php echo home_url(); ?>" class="header__logo small-6 small-offset-3 medium-12 large-12 columns">

								<?php if( get_option( 'travelmed_logo' ) ) : ?>
								<img src="<?php echo get_option( 'alma_logo' ); ?>" alt="Travel Medicine">	
								<?php else: ?>
								<img src="<?php echo $url_images; ?>header/logo-travel.png" alt="Travel Medicine">
								<?php endif; ?>
							</a>
						</div>

						<!-- <div class="phone small-12 show-for-small-only columns text-center">
				  			<span><?php echo get_option( 'contact_cellphone' ); ?></span>
				  		</div> -->
					</div>
					<div class="small-2 show-for-small-only columns">
			  			<a href="tel:<?php echo get_option( 'contact_cellphone' ); ?>" class="i-phone" style="margin-top: 30px; height: 30px !important; width: 30px !important;"></a>
				  	</div>
					<div class="medium-6 large-6 columns">
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary', 
							'menu_class' => 'menu medium-12 large-12 columns'
						)); ?>
				  	</div>
				  	<div class="medium-6 large-3 columns hide-for-small-only">

<?php echo do_shortcode('[gtranslate]'); ?>
				  		
				  		<div class="redes hide-for-small-only hide-for-medium-only large-12 columns text-right">
				  			<a href="http://<?php echo get_option('redes_fb'); ?>" target="_blank" class="redes-icon fb"></a>
				  			<a href="http://<?php echo get_option('redes_it'); ?>" target="_blank" class="redes-icon it"></a>
				  			<a href="http://<?php echo get_option('redes_in'); ?>" target="_blank" class="redes-icon in"></a>
				  		</div>
				  		<div class="redes show-for-medium-only medium-12 columns text-center" style="margin-top: 2.4rem;">
				  			<a href="http://<?php echo get_option('redes_fb'); ?>" target="_blank" class="redes-icon fb"></a>
				  			<a href="http://<?php echo get_option('redes_it'); ?>" target="_blank" class="redes-icon it"></a>
				  			<a href="http://<?php echo get_option('redes_in'); ?>" target="_blank" class="redes-icon in"></a>
				  			<a href="tel:<?php echo get_option( 'contact_cellphone' ); ?>" class="redes-icon phone"></a>
				  		</div>
				  		<div class="phone hide-for-small-only hide-for-medium-only columns text-right" style="margin-top: 1rem;">
				  			Contáctanos <span><?php echo get_option( 'contact_cellphone' ); ?></span><br/>
				  			estaremos contentos de atenderte.
				  		</div>
				  		<div class="phone small-12 medium-12 show-for-small-only columns text-center">
				  			<span><?php echo get_option( 'contact_cellphone' ); ?></span>
				  		</div>
				  	</div>

				  	<div class="show-for-medium-only medium-3 columns">
						<div class="logo centered">
							<a href="" class="header__logo medium-8 medium-offset-4 columns">
								<?php if( get_option( 'travelmed_logo' ) ) : ?>
								<img src="<?php echo get_option( 'alma_logo' ); ?>" alt="Travel Medicine">	
								<?php else: ?>
								<img src="<?php echo $url_images; ?>header/logo-travel.png" alt="Travel Medicine">
								<?php endif; ?>
							</a>
						</div>

						<!-- <div class="phone small-12 show-for-small-only columns text-center">
				  			<span><?php echo get_option( 'contact_cellphone' ); ?></span>


				  		</div> -->
					</div>
			  	</div>
			</header>