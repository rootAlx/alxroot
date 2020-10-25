<?php get_header(); ?>
<div class="row">
  <?php
  
  $primeiroParallaxpage =get_post_meta( $post->ID ,'pageParallaxImg',true);
  $primeiroParallaxColorText =get_post_meta( $post->ID ,'textoColorParallax',true);
  $sloganParallax2 = get_post_meta( $post->ID ,'sloganParallaxpage',true);
  $sloganParallaxColor = get_post_meta( $post->ID ,'sloganColorSlogan',true);
  

  ?>
  <section class="col s12 m12 xl12 parallax-container " style="position: relative; margin-top: -66px;">
   
    <div class="parallax"><?php  echo wp_get_attachment_image( $primeiroParallaxpage, 'full', 'responsive-img',array(  'class' => 'responsive-img ParallaxPageCroll', )  );?></div>

    <div class="col s12 m12 xl12" style="margin-top: 13em;">    	 
      <h1 class="center pageTituloCroll"style="color: <?php echo $primeiroParallaxColorText; ?>;"><?php echo get_the_title(); 
      

      ?></h1>
    </div>
    

  </section>

  

</div>



<!-- COMEÇO DO CONTEÚDO -->

<?php  
$parallaxHome =get_theme_mod( 'set_parallaxInicioImage');
$parallaxHomeColorText = get_post_meta( $post->ID,'textoColorParallax', true);
?>

<div class="row">

  <section class=" col s12 m12 l12">

    <div class="" style="padding: 4em;">
      <div class="center">
       <?php echo get_the_post_thumbnail('medium_large ',array( 1700, 1700,) , array(  'class' => 'circle responsive-img' ) ); ?>
     </div>
     
     <?php get_template_part('loop/loop','pagina'); ?>
   </div>



 </section>
 <section class="col s12 m12 xl12  parallax-container">
  <?php 
  $segundoParallaxpage =get_post_meta( $post->ID ,'pageParallaxImg2',true);
  ?>
  <div class="parallax">
    <?php  echo wp_get_attachment_image( $segundoParallaxpage, 'full', 'responsive-img',array(  'class' => 'responsive-img pageTituloCroll2', )  );?>
  </div>
  <div class="col s12 m12 xl12" style="margin-top: 13em;">    	 
    <h3 class="center"style="color: <?php echo $sloganParallaxColor; ?>;"><?php echo $sloganParallax2; ?></h3>
    
  </div>
</section>
<section class="col s12 m12 xl12">
 <?php
 $argumentos = array(
  'post_type' => 'page',
  'posts_per_page' =>300,
  'order'=>'ASC'


);

 query_posts($argumentos); while (have_posts()) { 
  
  the_post(); get_template_part( 'loop/loop', 'page' ); 
  
  
}wp_reset_query();


?>  
</section>


</div>


<?php get_footer()?>

