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

 get_header();
?>
<section class="features text-center">
  <div class="container">
   
     <div class="row">
      <div class="col-lg-4">
        <div class="feat">

              <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/pic1.png">
              <h4>GET INSPIRED</h4>
              <hr>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. .</p>
        </div>
      </div>
    <div class="col-lg-4">
        <div class="feat">
           <img class="pic2" src="<?php echo get_stylesheet_directory_uri() ?>/pic/pic2.png">
              <h4> GET REWARDED</h4>
              <hr>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. .</p>
        </div>
      </div>      
 <div class="col-lg-4">
        <div class="feat">
           <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/pic3.png">
              <h4> GET SOCIAL</h4>
              <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. .</p>
        </div>
      </div> 
                  
     </div>
 </div>
</section>                                      


 <section class="intro">
 <div class="container">
   
     <div class="row">
      <div class="col-lg-6">
        <div class="menu" id="parent">

              <img class="iphone" src="<?php echo get_stylesheet_directory_uri() ?>/pic/iphone.png">
              <img class="mini" src="<?php echo get_stylesheet_directory_uri() ?>/pic/mini.png">
        </div>
      </div>

      <div class="col-md-5 col-md-offset-1">
        <div class="menu">

              <h4>INTRODUCING THE FUDI APP</h4>
              
              <hr>
                 <p>Morbi eget posuere dolor. Pellentesque cursus aliquet aliquet. Aeneanet felis sit amet diam mollis ullamcorper. Nullam consequat sem a antevestibulum tristique. Suspendisse tristique lacus ac mattis porta. <br><br><br>
                 Vivamus ligula quam, vehicula non lacinia sed, faucibus sit amet libero. In libero dui, eleifend eu nisi id, egestas fringilla odio. In varius quam a massa hendrerit ullamcorper a eu justo. Suspendisse porta mattis convallis. Aenean tempus ligula ac odio rhoncus, quis aliquam dolor accumsan. <br><br><br>
                 Suspendisse aliquet felis consectetur libero congue, sed pulvinar diam malesuada. Duis vehicula a nibh id hendrerit. Donec sit amet ultrices ante, a mattis massa. </p>
                 <ul>
                   <li><img src="<?php echo get_stylesheet_directory_uri() ?>/pic/appstore.png"></li>
                   <li><img src="<?php echo get_stylesheet_directory_uri() ?>/pic/googleplay.png"></li>
                 </ul>
        </div>
      </div>

      </div>
 </section>
              <!-- /********************/ -->   <!-- /********************/ -->   <!-- /********************/ -->

   
 <section class="clients text-center">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    
  </ol>


  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/p.png" alt="a">
      <div class="carousel-caption visible-md-block visible-lg-block">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/client.png">
        <h3>“I am so happy because I found this recipe, and it just made my life easier. <br><br>Thanks  so much for sharing!”</h3>
        <p>-Michael Dawsor,San Fransisco,CA-</p>
      </div>
    </div>

 
    <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/p.png" alt="a">
      <div class="carousel-caption visible-md-block visible-lg-block">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/client.png">
        <h3>“I am so happy because I found this recipe, and it just made my life easier. <br><br>Thanks  so much for sharing!”</h3>
        <p>-Michael Dawsor,San Fransisco,CA-</p>
      </div>
    </div>
 
  

  
    <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/p.png" alt="a">
      <div class="carousel-caption visible-md-block visible-lg-block">
       <img src="<?php echo get_stylesheet_directory_uri() ?>/pic/client.png">
        <h3>“I am so happy because I found this recipe, and it just made my life easier. <br><br>Thanks  so much for sharing!”</h3>
        <p>-Michael Dawsor,San Fransisco,CA-</p>
      </div>
    </div>

   
    
</div>
  
</div>
</section>

 <!-- /********************/ -->   <!-- /********************/ -->   <!-- /********************/ -->
 <section class="cuisine">
  <h3 class="text-center">BROWSE BY CUISINES</h3><hr>
  <div class="par">
     
        
        
      
        <div class="feat italian" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/italian.png);">
            <p>327 Recipes</p>
            <h2>ITALIAN</h2>
                 
        </div>
      

      
        <div class="feat indian" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/indian.png);">

             <p>856 Recipes</p>
            <h2>INDIAN</h2>
                 
        </div>
     

      
        <div class="feat french" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/french.png);">

              <p>27 Recipes</p>
            <h2>FRENCH</h2>
                 
        </div>
      
        <div class="feat steakhouse" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/steakhouse.png);">

              <p>174 Recipes</p>
            <h2>STEAKHOUSE</h2>
                 
        </div>




      
        <div class="feat seafood" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/seafood.png);">

             <p>731 Recipes</p>
            <h2>SEAFOOD</h2>
                 
        </div>
      
               <!------>

</div>

<div class="parr">     
        
         
      
        <div class="feat sushi" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/sushi.png);">
            <p>237 Recipes</p>
            <h2>SUSHI</h2>
                 
        </div>
      
        <div class="feat mexicain" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/mexicain.png);">
            <p>529 Recipes</p>
            <h2>MEXICAIN</h2>
                 
        </div>
      
        <div class="feat chinese" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/chinese.png);">
            <p>145 Recipes</p>
            <h2>CHINESE</h2>
                 
        </div>
      
        <div class="feat pizza" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/pizza.png);">
            <p>327 Recipes</p>
            <h2>PIZZA</h2>
                 
        </div>
      
        <div class="feat americain" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/americain.png);">
            <p>1437 Recipes</p>
            <h2>AMERICAIN</h2>
                 
        </div>
     
     </div>
    
<!-------------------------->

<div class="row">
        
         
      <div class="col-lg-2 col-md-offset-1">
        <div class="numbers">
            <h2>23,567</h2>
            <p>Recipes Avaibles</p>
                 
        </div>
      </div>

      <div class="col-lg-2">
        <div class="numbers">
            <h2>431,729</h2>
            <p>Active Users</p>
                 
        </div>
      </div>

      <div class="col-lg-2">
        <div class="numbers">
            <h2>56,581</h2>
            <p>Photos & Videos</p>
                 
        </div>
      </div>
    <div class="col-lg-2">
        <div class="numbers">
            <h2>892,173</h2>
            <p>Positive reviews</p>
                 
        </div>
      </div>

      <div class="col-lg-2">
        <div class="numbers">
            <h2>3,182</h2>
            <p>Soice and Herbs</p>
                 
        </div>
      </div>

      </div>
 </section>

<?php get_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-3.1.1.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script> 


</body>
</html>