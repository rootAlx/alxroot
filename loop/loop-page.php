<?php 
$corIcone = get_post_meta( $post->ID,'iconeColor', true);
$corTexto = get_post_meta( $post->ID,'textoColor', true);
if (get_post_meta( $post->ID,'pageNaHome', true) =="1"){
  if (get_post_meta( $post->ID,'cardColor', true) ==null) {
    $corCard ="blue-grey";
  }else{
    $corCard  = get_post_meta( $post->ID,'cardColor', true);
  }
  ?>

  <article class="col s12 m6 l6 xl4">
   <div class="card <?php echo $corCard; ?>" style="background-color:<?php echo $corCard; ?>;">
    
    <div class="card-content ">
      
      <div class="center">
       <h2 class="center" style="color: <?php  echo $corIcone; ?>"><i class="<?php echo get_post_meta( $post->ID,'icone', true );?> fa-lg iconCroll"> </i> </h2>
       <span class="card-title flow-text" style="color:<?php echo $corTexto;?> "><?php the_title();?></span>
     </div>
     <div style="color:<?php echo $corTexto;?> ">
      <p class="flow-text"><?php the_excerpt();?></p>
    </div>
  </div>
  <div class="card-action center">
    <a href="<?php  echo get_permalink(); ?>">acessar</a>
    
  </div>
</div>
</article>

<?php } ?>
