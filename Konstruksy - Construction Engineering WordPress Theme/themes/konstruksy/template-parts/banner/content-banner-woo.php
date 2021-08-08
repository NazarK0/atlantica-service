<?php
$banner_image    = '';
$banner_title    = '';
$banner_style    = 'full';
$header_style    = 'standard';

if ( defined( 'FW' ) ) {

    $banner_settings          = konstruksy_option('konstruksy_shop_banner_setting');
    $banner_image             = konstruksy_meta_option( get_the_ID(), 'konstruksy_shop_banner_image' );

    //title
    if(konstruksy_meta_option( get_the_ID(), 'konstruksy_shop_banner_page_title' ) != ''){
        $banner_title = konstruksy_meta_option( get_the_ID(), 'konstruksy_shop_banner_page_title' );
    }elseif($banner_settings['konstruksy_shop_banner_page_title'] != ''){
        $banner_title = $banner_settings['konstruksy_shop_banner_page_title'];
    }else{
        $banner_title   = get_the_title();
    }

    //image
    if(is_array($banner_image) && $banner_image['url'] != '' ){
        $banner_image = $banner_image['url'];
    }elseif( is_array($banner_settings['konstruksy_shop_banner_image']) && $banner_settings['konstruksy_shop_banner_image']['url'] != ''){
        $banner_image = $banner_settings['konstruksy_shop_banner_image']['url'];
    }else{

        $banner_image = KONSTRUKSY_IMG.'/banner/bredcumbs-1.png';
    }

    $show = (isset($banner_settings['konstruksy_shop_page_show_banner'])) ? $banner_settings['konstruksy_shop_page_show_banner'] : 'yes';
    // breadcumb
    $show_breadcrumb =  (isset($banner_settings['konstruksy_shop_page_show_breadcrumb'])) ? $banner_settings['konstruksy_shop_page_show_breadcrumb'] : 'yes';


}else{
    //default
    $page_sub_menu             = '';
    $banner_image             = '';
    $banner_title             = get_the_title();
    $show                     = 'yes';
    $show_breadcrumb          = 'no';

}
if( $banner_image != ''){
    $banner_image = 'style="background-image:url('.esc_url( $banner_image ).');"';
}
$banner_heading_class = '';
if($header_style=="transparent"):
    $banner_heading_class     = "mt-80";


endif;

?>

<?php if(isset($show) && $show == 'yes'): ?>

    <section class="xs-breadcrumb breadcrumb-height">
        <div class="breadcrumb-bg <?php echo esc_attr($banner_image == ''?'banner-solid':'banner-bg'); ?>" <?php echo wp_kses_post( $banner_image ); ?>></div>
        <div class="container">
            <div class="row breadcrumb-height align-items-center">
                <?php if(isset($show_breadcrumb) && $show_breadcrumb == 'yes'): ?>
                    <?php konstruksy_get_breadcrumbs(" . "); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif;
