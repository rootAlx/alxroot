<?php get_header(); ?>
<div class="row">
  <?php
  $parallaxPrincipal  = get_theme_mod( 'set_parallaxPrincipalImage');
  $parallaxPrincipalTitulo  = get_theme_mod( 'set_tituloParallaxPrincipal');
  $parallaxPrincipalColor = get_theme_mod( 'set_parallaxPrincipalColorText','black');
  $parallaxPrincipalIcone = get_theme_mod( 'set_IconeParallaxPrincipal');
  $parallaxPrincipalTexto = get_theme_mod( 'set_textoParallaxPrincipal');


  ?>
  <section class="col s12 m12 xl12 parallax-container " style="position: relative; margin-top: -66px;">
   
    <div class="parallax" ><?php echo wp_get_attachment_image( $parallaxPrincipal, 'full', 'responsive-img', array(  'class' => 'responsive-img' )  ); ?>
    
  </div>
  <?php //get_header(); ?>
  <div class="col s12 m6 xl6" style="margin-top: 45px; height: auto;">




   
    
    
    
    <h3 class="center flow-text"style="color: <?php echo $parallaxPrincipalColor; ?>;"><?php echo $parallaxPrincipalTitulo; ?></h3>
    <h3 class="center" style="color: <?php echo $parallaxPrincipalColor; ?>;"><i class="<?php echo $parallaxPrincipalIcone;?> fa-lg"> </i></h3>
    <p class="center flow-text pHomeCroll"style="color: <?php echo $parallaxPrincipalColor; ?>;"><?php echo $parallaxPrincipalTexto; ?></p>

    
    
    
    <?php 
    $parallaxPrincipalLink = get_theme_mod( 'set_linkBtnParallaxPrincipal');
    $parallaxPrincipalBtn  = get_theme_mod( 'set_parallaxPrincipalColorBtnFundo','#3f85f4');
    if (get_theme_mod( 'set_tituloBtnParallaxPrincipal') !='') {
      $parallaxBtnNomePrincipal =get_theme_mod( 'set_tituloBtnParallaxPrincipal');
      echo "<div class='center'><a  href='{$parallaxPrincipalLink}' class='btn btn-large waves-effect btnCroll' style='background-color:  $parallaxPrincipalBtn;'>{$parallaxBtnNomePrincipal}</a></div>";
    }

    ?>
    

  </div>
  

</section>



</div>



<!-- COMEÇO DO CONTEÚDO -->

<?php  
$parallaxHome =get_theme_mod( 'set_parallaxInicioImage');
?>

<div class="row">

  <section class=" col s12 m12 l12 parallax-container cardpage" style="height: auto;">

    <div class="parallax"><?php echo wp_get_attachment_image( $parallaxHome, 'full', 'responsive-img', array(  'class' => 'responsive-img' )  ); ?></div>

    <?php

    
//  $qtdPg = intval(get_theme_mod( 'set_parallaxInicioPage',6));
//'post__in' =>array(2,17,23),

// $pages = get_theme_mod( 'set_parallaxInicioPage2');
// $permitidos = array_map('intval', explode(',', $pages));;
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
  <section class="col s12 m12 l12 xl12">
    <!-- <article class=""> -->
     <?php get_sidebar('sidebar');?>
     <!-- </article> -->
   </section>
 </div>
 <div class="row">
   <section class="col s12 m12 l12">

    <?php

    $argumentos = array(
      'post_type' => 'post',
      'posts_per_page' =>100,
      'order'=>'ASC'
// 'post__in' =>array(109,29,1),

    );

    query_posts($argumentos); while (have_posts()) { the_post(); get_template_part( 'loop/loop', 'post' ); } wp_reset_query();
    

    ?> 

    
  </section>

</div>
<div class="row">
  <section class="col s12 m12 l12">
    <?php get_sidebar('home');?>
  </section>

</div>
<?php  
$parallaxHome2          = get_theme_mod( 'set_parallaxInicioImage2');
$parallaxHome2Texto     = get_theme_mod( 'set_parallaxTexto');
$parallaxhome2ColorText = get_theme_mod( 'set_parallaxColorText'); 
?>
<div class="row">
 <section class="col s12 m12 l12 parallax-container">
  <div class="parallax"><?php echo wp_get_attachment_image( $parallaxHome2, 'full', 'responsive-img', array(  'class' => 'responsive-img' )  ); ?></div>

  <div class="left" style="margin-top:4em;">
    
    <h3  class="flow-text"style="color: <?php echo $parallaxhome2ColorText; ?>; padding: 3em;"><?php echo $parallaxHome2Texto; ?></h3> 
    
  </div>
  <div class="center">
    <?php 
    $parallax3UrlBtn = get_theme_mod( 'set_parallax3UrlBtn');
    $parallax3CorBtn = get_theme_mod( 'set_parallax3colorBtn','#3f85f4');

    if (get_theme_mod( 'set_parallax3NomeBtn')!='') {
      $parallax3NomeBtn = get_theme_mod( 'set_parallax3NomeBtn');
      echo "<a  href='{$parallax3UrlBtn}' class='btn btn-large waves-effect' style='background-color:  $parallax3CorBtn;'>{$parallax3NomeBtn}</a>";
    }

    ?>
    


  </div>
  
</section>


</div>
<div class="row">
 <section class="col s12 m12 l12 ">
  <?php 
  $parallaxMiniHome   = get_theme_mod( 'set_miniParallaxHome');
  $parallaxMiniTitulo = get_theme_mod( 'set_tituloMiniParallax');
  $parallaxMiniTexto  = get_theme_mod( 'set_textMiniParallax');
  $parallaxMiniTituloBtn  = get_theme_mod( 'set_tituloMiniParallaxbtn');
  $parallaxMinilinkBtn  = get_theme_mod( 'set_tituloMiniParallaxLinkbtn');


  ?>      
  <div class="col s12 l6 m12 parallax-container cardpage">
   <div class="parallax"><?php echo wp_get_attachment_image( $parallaxMiniHome, 'full', 'responsive-img', array(  'class' => 'responsive-img' )  ); ?></div>
   <h4 class="center"><?php echo $parallaxMiniTitulo; ?></h4>
   <p  class="flow-text" style=" margin: 40px; text-align: justify;"><?php echo $parallaxMiniTexto; ?>
   
 </p>
 <div class="center">
  <h5 class="center"><?php echo $parallaxMiniTituloBtn; ?></h5>
  <!--  <a class="btn btn-large waves-effect pulse" style="background-color: #3f85f4;">(85) 3013.5505</a> -->
  <?php
  $parallaxMiniBtnCor = get_theme_mod( 'set_MiniparallaxcolorBtn','#3f85f4');
  if (get_theme_mod( 'set_tituloMiniParallaxNomebtn') !='') {
   $parallaxMiniNomeBtn  = get_theme_mod( 'set_tituloMiniParallaxNomebtn');
                 //echo "<div class='btnT'>";
   echo "<a  href='{$parallaxMinilinkBtn}' class='btn btn-large waves-effect  pulse ' style='background-color: $parallaxMiniBtnCor;'>{$parallaxMiniNomeBtn}</a>";
 }
//echo "</div>";
 ?>
</div>

</div>
 <!--     <div class="col s12 l6 m12">
     	
     	  		<form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix red">Nome</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telefone</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="icon_mail" type="tel" class="validate">
          <label for="icon_mail">E-mail</label>
        </div> 
             <div class="input-field col s12">
          <i class="material-icons prefix">comment</i>
          <input id="icon_assunto" type="tel" class="validate">
          <label for="icon_assunto">Assunto</label>
        </div> 
         <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Mensagem</label>
        </div> 
        <div class="center">
        	          <a class="btn btn-large waves-effect" style="background-color: #3f85f4">enviar</a>      

        </div>   
      </div>
    </form>
  </div> -->
  <?php get_sidebar('parallax');?>
  
</section>
</div>
<br>
<?php get_footer()?>

