<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--IE-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--responsive mobile-->
    
	 <title>RECIPE</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/pic/logoo.png" />
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.css" rel="stylesheet"/>
     <link href="<?php echo get_stylesheet_directory_uri() ?>/css/style.css" rel="stylesheet"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <!--let IE read html5 tags-->
 
	
</head>

<header style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/banner.png);">
  <div class="container">
    <div class="row">
      <a href="#" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/pic/logoo.png"></a>  
      <nav>
        <ul class="list-unstyled">
          <li><a href="#">LOG IN</a></li>
          <li><a href="#">SIGN UP</a></li>
          <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/pic/nav.png"></a></li>
        </ul>
      </nav>




    </div>


    <div class="content text-center">
   <ul>
     <li>
       <h4>Find your Favorite</h4>
       <h1>RECIPES</h1>
       <a href="" class="btn btn-first">GET STARTED</a>
       <p>OR SEND US YOUR OWN RECIPES AND <a href="#">GET REWARDED!</a></p>
     </li>
   </ul>

 </div>


  </div>
 </header>