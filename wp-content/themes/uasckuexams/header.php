<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

   <style>
    body{
      font-family: "Roboto", Helvetica, Arial, sans-serif;
    }
    #site-navigation{
      display: inline-block;
    width: 100%;
    background-color: #233654;
   
    color: white;
    }
    #secondary-menu ul li a{
      color:white!important;
      
  
    }
    .secondary li {
    display: inline-block;
    list-style: none;
   }
  /* #right-sidebar{
	  background-color: #233654;
	
  }*/
  #right-sidebar li a{
color:#233654 !important;
 }
 #main-nav{
	 background-color:#008BBB;
	 
 }
 #main-nav li a{
	 color:white;
 }
 #main-nav li a:hover {
    background-color: rgba(0,0,0,.7);
}
/* .widget-title4{
  background: #1c529b;
  color: #fff;
    border-color: #16427c;
    padding-left: 8%;
    padding:7%;

.widget-title3{
    
    background: #2790d9;
    color: #fff;
    border-left: 5px solid #1f73ae;
    padding:7%;
} */
.widget-title4 {
  background: #1c529b;
  color: #fff;
  border-left: 10px solid #1f73ae;
    border-color: #16427c;
    padding-left: 8%;
    padding:3%;}
    li{
      list-style: none;
    }

.widget-title2 h4{
     background: #2790d9!important;
    color: #fff;
    border-left: 5px solid #1f73ae;
    padding:5%;
}
.h4, h4 {
    font-size: 1.5rem;
    background: #2790d9!important;
    color: #fff;
    border-left:10px solid #1f73ae;
    padding:3%;
  
}
.w4_post_list-9{
  
    padding-top: 7%;
}
#wrapper-footer-full {
     background-color: #1c529b ; 
     color:#fff;

}
#wrapper-footer-full li{
  list-style: none!important;
}
#wrapper-footer-full li a{
  color:#fff;
  list-style: none!important;
  text-decoration:none;
} 
 .rtbs_menu  {
    list-style: none;
    /* padding: 0!important; */
    padding-left: 25% !important;
    /* margin: 0!important; */
}
.w4pl-inner ul {
list-style: none;
text-decoration:none;
color: black, i !important;
}
.w4pl-inner a {
list-style: none;
text-decoration:none;
color: black  !important;
}
a{
  text-decoration:none;
  color:black;
}
.menu-item-271{
  background: #f3f7f9;
    border-bottom: solid 1px #dbdee0;
    padding:3%;
    background-image: url(https://existing.dev.cc/wp-content/uploads/2022/06/sidemenu_icon.png);
    position: relative;
    background-repeat: no-repeat;
    background-position: 10px 50%;
    padding-left: 40px;
    font-size: 15px;
    font-weight: 600;
    padding: 9px 10px;

}
.menu-item-284{
  background: #f3f7f9;
    border-bottom: solid 1px #dbdee0;
    padding:3%;
    background-image: url(https://existing.dev.cc/wp-content/uploads/2022/06/sidemenu_icon.png);
    position: relative;
    background-repeat: no-repeat;
    background-position: 10px 50%;
    padding-left: 40px;
    font-size: 15px;
    font-weight: 600;
    padding: 9px 10px;

}
.menu-item-278{
  background: #f3f7f9;
    border-bottom: solid 1px #dbdee0;
    padding:3%;
    background-image: url(https://existing.dev.cc/wp-content/uploads/2022/06/sidemenu_icon.png);
    position: relative;
    background-repeat: no-repeat;
    background-position: 10px 50%;
    padding-left: 40px;
    font-size: 15px;
    padding: 9px 10px;

    font-weight: 600;
}
.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    color: rgba(0,0,0,.5);
    border-color: rgba(0,0,0,.1);
}
.navbar-toggler:hover {
    
    color: rgba(0,0,0,.5);
 
}
.bg-primary,h6{
margin-bottom:0;
padding:2%;
background-color: #2593d8!important;
color:white;
}
</style>
	
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<?php get_template_part( 'widgets',  'Top Full' ); ?> 
	<nav id="site-navigation" class="secondary">
			<!-- <?php esc_html_e( 'Secondary Menu', 'uasckuexams' ); ?> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'secondary',
					'menu_id'        => 'secondary-menu',
				)
			);
			?>
		</nav>

    
<img src="https://existing.dev.cc/wp-content/uploads/2022/06/cropped-cropped-cropped-cropped-cropped-uascku-header-png-1-1.png" alt="logo" width="100%" height="50%">


		
		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->
		
	