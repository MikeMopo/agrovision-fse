<?php
/**
 * Add Theme info Page
 */

function agrovision_fse_menu() {
	add_theme_page( esc_html__( 'AgroVision  FSE', 'agrovision-fse' ), esc_html__( 'About AgroVision  FSE', 'agrovision-fse' ), 'edit_theme_options', 'about-agrovision-fse', 'agrovision_fse_theme_page_display' );
}
add_action( 'admin_menu', 'agrovision_fse_menu' );

function agrovision_fse_admin_theme_style() {
	wp_enqueue_style('agrovision-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'agrovision_fse_admin_theme_style');

/**
 * Display About page
 */
function agrovision_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'agrovision-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The AgroVision FSE is a free green farm WordPress theme design for organic food, agriculture, organic food store, organic agriculture, farmer.', 'agrovision-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'agrovision-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'agrovision-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'agrovision-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'agrovision-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'agrovision-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'agrovision-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'agrovision-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'agrovision-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'agrovision-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Agrovision PRO', 'agrovision-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'agrovision-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/farming-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'agrovision-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'agrovision-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/agrovision/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'agrovision-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/agrovision/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'agrovision-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'agrovision-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'agrovision-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with AgroVision  FSE, please give your feedback.', 'agrovision-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/agrovision-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'agrovision-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>