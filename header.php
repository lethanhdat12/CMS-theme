<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="topbar">
            <div class="container">
                <div class="row">
                    <div class="col slogan">MUA ĐỒ THỂ THAO - BAO TEST THOẢI MÁI</div>
                    <div class="col topbar-email text-right">
                        <div class="shopcart">
                            <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>"
                                title="<?php _e( 'Giỏ hàng ' ); ?>">
                                <?php echo sprintf (_n( 'Giỏ hàng (%d)', 'Giỏ hàng (%d)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <?php 
                    if(get_theme_mod( 'custom_logo' )){
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img class="logo" src="' . esc_url( $custom_logo_url ) . '" alt="">';
                    }else{
                        echo '<img class="logo" src="'.  get_template_directory_uri()  .' /assets/images/logo.jpg" alt="Logo"> ';
                    }
                    ?>
                </a>
                <?php   
                wp_nav_menu([
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'main-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ]);
			?>
            </div>
        </nav>
    </header>