<?php
/**
 * Template part for displaying the sitebar
 * Used on Content Pages and Internal Landing Pages
 *
 * @package uri-modern
 */

?>


<div id="sitebanner" 
<?php
if ( get_option( 'site_header_text_color' ) ) {
	echo ' class="light"'; }
?>
>
	
	<div id="sb-backdrop">
		<div id="sb-background-image" 
		<?php
		if ( get_header_image() ) {
			echo ' style="background-image:url(' . get_header_image() . ')"';
		};
?>
></div>
		<div id="sb-screen"></div>
	</div>
	
	<div id="sitebranding">

		<?php get_template_part( 'header-parts/site-identity' ); ?>
		
		<div id="sitesocial">
			<?php
			if ( function_exists( 'uri_cl_shortcode_social' ) ) {
				$socials = array(
					'facebook'  => get_option( 'department_facebook_URL' ),
					'instagram' => get_option( 'department_instagram_URL' ),
					'twitter'   => get_option( 'department_twitter_URL' ),
					'youtube'   => get_option( 'department_youtube_URL' ),
					'snapchat'  => get_option( 'department_snapchat_URL' ),
					'linkedin'  => get_option( 'department_linkedin_URL' ),
				);

				$style = 'dark';

				if ( get_option( 'site_header_text_color' ) ) {
					$style = 'light';
				}

				echo do_shortcode( '[cl-social style="' . $style . '" facebook="' . $socials['facebook'] . '" instagram="' . $socials['instagram'] . '" twitter="' . $socials['twitter'] . '" youtube="' . $socials['youtube'] . '" snapchat="' . $socials['snapchat'] . '" linkedin="' . $socials['linkedin'] . '"]' );
			}
			?>
		</div>
		
	</div><!-- #sitebranding -->

</div><!-- #sitebanner -->
