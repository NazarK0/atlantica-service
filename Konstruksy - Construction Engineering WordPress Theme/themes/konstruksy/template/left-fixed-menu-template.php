<?php
/**
 * left-fixed-menu-template.php
 *
 * Template Name: Left Fixed Menu 
 * Template Post Type: page,ts-projects,ts-service
 */
get_header();
?>
<header class="elementskit-header   home-four xs-side-nav-open">
    <div class="container">
        <div class="navbar">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img  src="<?php
                echo esc_url(
                    konstruksy_src(
                        'general_main_logo',
                        KONSTRUKSY_IMG . '/logo/logo.png'
                    )
                );
                ?>" alt="<?php bloginfo('name'); ?>">
            </a><!-- end navbar brand -->
            <div class="ml-auto">
                <div class="open-sidemenu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- end open sidemenu -->
            </div>
        </div>
    </div><!-- .container END -->
</header>
<!-- Preloder End -->
<div class="xs-wrapper">
    <!-- sidenav -->
    <?php get_template_part('template-parts/navigations/sidenav'); ?>
    <!-- Sidenav End -->
    <div class="xs-content">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div><!-- end xs  content -->
    <?php get_footer(); ?>
</div><!-- end page wrapper -->


