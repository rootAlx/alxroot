<?php
require get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/class-metabox.php';
require_once get_template_directory() . '/inc/class-materialize-walker-nav-menu.php';
function carregarEstilo(){
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
  wp_enqueue_style( 'materialize', get_template_directory_uri() . '/assets/css/materialize.css', array(), 'v0.100.2', 'all');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
  // wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js',null, true );
  wp_enqueue_style( 'animate.css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css' ); 

}
add_action( 'wp_enqueue_scripts', 'carregarEstilo' );


function jquery(){

  return "<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>";

}

function materializev01002(){

  return "<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>";

}


function fontAwesome(){

  return "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>";


}

function myCss(){
  $menuCorFundo = get_theme_mod( 'set_corFundoMenu','#3f85f4' );    
  $estilo="<style>


  .main-navigation ul li a{
   color: ". get_theme_mod( 'set_corLinksMenu','black' ).";

 }
 .main-navigation{background-color:".$menuCorFundo.";}
 .corDrop{background-color:".$menuCorFundo."!important;}
 .corDrop, a{color:".get_theme_mod( 'set_corLinksMenu','black' )."!important;}
 .cardpage{height: auto;}
 .cardT{width: 50%;}
 .cardfonteP{padding-left: 1.2em;padding-right: 1.2em;}
 .cardTfonte p{text-align: justify;}
 .page-footer a{color:".get_theme_mod( 'set_corLinksFooter','white').";}
 .hover{background-color:".get_theme_mod( 'set_corHoverMenu','black').";}
 @media only screen and (max-width : 992px){.submenuMaterialize{background-color:".$menuCorFundo.";}}
 @media only screen and (max-width : 1024px) {.cardfonteP{padding: 10px;}.parallax-container {height: 650px;}.cardpage{height: auto;}}
 @media only screen and  (max-width : 834px) {.cardfonteP{padding: 5%;margin-right: 5%;margin-top: -40px;font-size: 12px;}}
 @media only screen and  (max-width : 700px) {.cardfonteP{padding: 5%;margin-right: 5%;margin-top: -40px;font-size: 10px;}}
 @media only screen and  (max-width : 600px) {.cardfonteP{padding: 5%;margin-right: 5%;margin-top: -40px;font-size: 18px;}.cardT{width: 100%;}.cardT img{display: none;}}
 @media only screen and  (max-width : 602px) {.cardfonteP{padding: 2%;margin-right: 5%;}.cardT{width:100%;}.cardT img{display: none;}.parallax-container{height: auto;}.cardpage{height: auto;}}
 @media only screen and  (max-width : 564px){.cardpage{height: auto;}}

 </style>";
 return $estilo;
}
function meuEstiloJs(){
 require_once( dirname(__FILE__). '/assets/js/init.php');
 //return $jsPersonalizado;

}

function alxroot_config(){
	//registrado menu
  register_nav_menus(
    array(
      'menu1'=>'Menu1'
    )
  );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo', array( 
   'height'      => 64,
   'width'       => 140,
   'flex-height' => true,
   'flex-width'  => false,
   'header-text' => array( 'site-title', 'site-description' ),
 ) );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( "custom-background", $args );


}
add_action( 'after_setup_theme', 'alxroot_config', 0 );
add_action( 'wp_footer' , 'materialize_nav_walker_dropdown_init' );



if( ! function_exists('materialize_nav_walker_dropdown_init') ) {

  function materialize_nav_walker_dropdown_init() { 

  }

} 
$icone = new Odin_Metabox(
    'icone', // Slug/ID do Metabox (obrigatório)
    'Icone Font Awesome para página', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)

  );


$icone->set_fields(
  array(
    array(
      'id'          => 'icone',
      'label'       => __( 'Nome do icone. ', 'alxroot' ),
      'type'        => 'text',
      'description' => __( 'Selecione  um icone<a target="_blank" href="https://fontawesome.com/icons?d=gallery">clique aqui para copiar o código do icone.</a>', 'alxroot')

    )


  )

);

$parallaxPageColor = new Odin_Metabox(
    'iconeColor', // Slug/ID do Metabox (obrigatório)
    'Cor de icone', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
      'id'          => 'iconeColor',
      'label'       => __( 'Defina a cor do icone. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'white',
      'description' => __( 'cor.', 'alxroot' )
    )


  )

);

$parallaxPageColor = new Odin_Metabox(
    'textoColor', // Slug/ID do Metabox (obrigatório)
    'Cor do texto', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
      'id'          => 'textoColor',
      'label'       => __( 'Defina a cor do texto. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'white',
      'description' => __( 'cor.', 'alxroot' )
    )


  )

);

$parallaxPageColor = new Odin_Metabox(
    'cardColor', // Slug/ID do Metabox (obrigatório)
    'Cor de fundo do card', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
      'id'          => 'cardColor',
      'label'       => __( 'Defina a cor de fundo do card. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'',
      'description' => __( 'cor fundo card.', 'alxroot' )
    )


  )




);



$parallaxPageColor = new Odin_Metabox(
    'pageNaHome', // Slug/ID do Metabox (obrigatório)
    'Exibição de página na home', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
      'id'          => 'pageNaHome',
      'label'       => __( 'Exibir página na home? ', 'alxroot' ),
      'type'        => 'radio',
      'default'     =>1,
      'description' => __( 'Exibe a página na home.', 'alxroot' ),
      'options'  => array(
       1=>'exibir',
       2=>' não exibir'
     )
    )


  )




);
$parallaxPageimage = new Odin_Metabox(
    'pageParallaxImg', // Slug/ID do Metabox (obrigatório)
    'Imagem  para o 1° parallax página.', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageimage->set_fields(
  array(
    array(
      'id'          => 'pageParallaxImg',
      'label'       => __( 'Escolha uma imagem para o primeiro parallax da página ', 'alxroot' ),
      'type'        => 'image',
      'default'=>'',
      'description' => __( 'Selecione a imagem.', 'alxroot' )

    )


  )




);

$parallaxColorParallaxText = new Odin_Metabox(
    'textoColorParallax', // Slug/ID do Metabox (obrigatório)
    'Cor do titulo  do 1° parallax.', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxColorParallaxText->set_fields(
  array(
    array(
      'id'          => 'textoColorParallax',
      'label'       => __( 'Defina uma cor para o titiulo do primeiro parallax. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'black',
      'description' => __( 'cor.', 'alxroot' )
    )


  )

);


$parallaxPageimage2 = new Odin_Metabox(
    'pageParallaxImg2', // Slug/ID do Metabox (obrigatório)
    'Imagem paro o  2° parallax da página.', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageimage2->set_fields(
  array(
    array(
      'id'          => 'pageParallaxImg2',
      'label'       => __( 'Escolha uma imagem para o segundo parallax página ', 'alxroot' ),
      'type'        => 'image',
      'default'=>'',
      'description' => __( 'Selecione a imagem.', 'alxroot' )

    )


  )




);
$parallaxSloganPage = new Odin_Metabox(
    'sloganParallaxpage', // Slug/ID do Metabox (obrigatório)
    'Defina um slogan para o 2° parallax.', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxSloganPage->set_fields(
  array(
    array(
      'id'          => 'sloganParallaxpage',
      'label'       => __( 'Defina o slogan para o 2º parallax. ', 'alxroot' ),
      'type'        => 'text',
      'default'     =>'',
      'description' => __( 'Slogan.', 'alxroot' )
    )


  )

);
$parallaxSloganTextColorPage = new Odin_Metabox(
    'sloganColorSlogan', // Slug/ID do Metabox (obrigatório)
    'Defina uma cor  para o  slogan  do 2° parallax.', // Nome do Metabox  (obrigatório)
    'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxSloganTextColorPage->set_fields(
  array(
    array(
      'id'          => 'sloganColorSlogan',
      'label'       => __( 'Defina uma cor para  o slogan. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'black',
      'description' => __( 'Slogan.', 'alxroot' )
    )


  )

);



$parallaxPageColor = new Odin_Metabox(
    'postIcon', // Slug/ID do Metabox (obrigatório)
    'Icone do post.', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
      'id'          => 'postIcon',
      'label'       => __( 'Defina o icone. ', 'alxroot' ),
      'type'        => 'text',
      'default'     =>'',
      'description' => __( 'Selecione  um icone<a target="_blank" href="https://fontawesome.com/icons?d=gallery">clique aqui para copiar o código do icone.</a>', 'alxroot')
    )


  )


  

);


$parallaxPageColor = new Odin_Metabox(
    'positionPost', // Slug/ID do Metabox (obrigatório)
    'Posição do post.', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
    'id'            => 'positionPost', // Obrigatório
    'label'         => __( 'Text Example', 'alxroot' ), // Obrigatório
    'type'          => 'select', // Obrigatório
    // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
    'default'       => 'three', // Opcional
    'description'   => __( 'Descrition Example', 'alxroot' ), // Opcional
    'options'       => array( // Obrigatório (adicione aque os ids e títulos)
      1   => 'Esquerda',
      2   => 'Direita',

    ),
  )


  )


  

);


$parallaxPageColor = new Odin_Metabox(
    'postNaHome', // Slug/ID do Metabox (obrigatório)
    'Exibição de Post na home', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPageColor->set_fields(
  array(
    array(
      'id'          => 'postNaHome',
      'label'       => __( 'Exibir post na home? ', 'alxroot' ),
      'type'        => 'radio',
      'default'     =>1,
      'description' => __( 'Exibe o post na home.', 'alxroot' ),
      'options'  => array(
       1=>'exibir',
       2=>' não exibir'
     )
    )


  )




);

$parallaxPostParallax = new Odin_Metabox(
    'postParallaxImg', // Slug/ID do Metabox (obrigatório)
    'Primeira imagem do parallax', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPostParallax->set_fields(
  array(
    array(
      'id'          => 'postParallaxImg',
      'label'       => __( 'Primeira imagem do parallax ', 'alxroot' ),
      'type'        => 'image',
      'default'     =>'',
      'description' => __( 'selecione a imagem.', 'alxroot' ),
      
    )


  )




);
$parallaxSloganTextColorPost = new Odin_Metabox(
    'TextoColorTituloParallax', // Slug/ID do Metabox (obrigatório)
    'Defina uma cor  para o  titulo  do 1° parallax.', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxSloganTextColorPost->set_fields(
  array(
    array(
      'id'          => 'TextoColorTituloParallax',
      'label'       => __( 'Defina uma cor para  o titulo. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'black',
      'description' => __( 'Selecione a cor.', 'alxroot' )
    )


  )

);

$parallaxPostImage2 = new Odin_Metabox(
    'parallaxpost2imagem', // Slug/ID do Metabox (obrigatório)
    'Defina uma  imagem para  o 2° parallax.', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxPostImage2->set_fields(
  array(
    array(
      'id'          => 'parallaxpost2imagem',
      'label'       => __( 'Defina uma imagem para o 2°parallax. ', 'alxroot' ),
      'type'        => 'image',
      'default'     =>'',
      'description' => __( 'Selecione a imagem.', 'alxroot' )
    )


  )

);


$parallaxSloganPost = new Odin_Metabox(
    'sloganParallaxpost', // Slug/ID do Metabox (obrigatório)
    'Defina um slogan para o 2° parallax.', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxSloganPost->set_fields(
  array(
    array(
      'id'          => 'sloganParallaxpost',
      'label'       => __( 'Defina o slogan para o 2º parallax. ', 'alxroot' ),
      'type'        => 'text',
      'default'     =>'',
      'description' => __( 'Slogan.', 'alxroot' )
    )


  )

);
$parallaxSloganTextColorPost = new Odin_Metabox(
    'sloganColorSloganPost', // Slug/ID do Metabox (obrigatório)
    'Defina uma cor  para o  slogan  do 2° parallax.', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'default' // Prioridade (opções: high, core, default ou low) (opcional)

  );
$parallaxSloganTextColorPost->set_fields(
  array(
    array(
      'id'          => 'sloganColorSloganPost',
      'label'       => __( 'Defina uma cor para  o slogan. ', 'alxroot' ),
      'type'        => 'color',
      'default'     =>'black',
      'description' => __( 'Slogan.', 'alxroot' )
    )


  )

);

function new_excerpt_more( $more ) {
  return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


add_action('widgets_init', 'alxroot_sidebars');
function alxroot_sidebars(){
  register_sidebar(
   array(
    'name'=>__(' 1° Sidebar da Home.', 'alxroot'),
    'id'=>'sidebar',
    'description'=> __('Sidebar para a home','alxroot'),

    'before_widget'=>'<article class="col s12 m6 l6 xl4 center"><div class="card"><div class="card-content "><div class="center">',
    'after_widget'=>'</div></div></div></article>',
    'before_title'=>'<p class="flow-text">',
    'after_title'=>'</p>'

  )
 );

  register_sidebar(
    array(
      'name'=>__(' 2° Sidebar da Home.', 'alxroot'),
      'id'=>'sidebar2',
      'description'=> __('2º Sidebar para a home','alxroot'),

      'before_widget'=>'<article class="col s12 m6 l6 xl4 center"><div class="card"><div class="card-content "><div class="center">',
      'after_widget'=>'</div></div></div></article>',
      'before_title'=>'<p class="flow-text">',
      'after_title'=>'</p>'

    )
  );

  register_sidebar(
    array(
      'name'=>__(' 3° Sidebar da Home.', 'alxroot'),
      'id'=>'sidebar3',
      'description'=> __('3º Sidebar para a home','alxroot'),

      'before_widget'=>'<article class="col s12 l6 m12"><div class=""><div class="card-content "><div class="">',
      'after_widget'=>'</div></div></div></article>',
      'before_title'=>'<p class="flow-text">',
      'after_title'=>'</p>'

    )
  );  

  register_sidebar(
    array(
      'name'=>__(' 1° Sidebar do footer.', 'alxroot'),
      'id'=>'sidebar4',
      'description'=> __('1º Sidebar para o footer','alxroot'),

      'before_widget'=>'<div class="col s12 m6 l4 xl4 center" style="padding:20px;">',
      'after_widget'=>'</div>',
      'before_title'=>'<p class="flow-text">',
      'after_title'=>'</p>'

    )
  );  
  register_sidebar(
    array(
      'name'=>__(' 2° Sidebar do footer.', 'alxroot'),
      'id'=>'sidebar5',
      'description'=> __('2º Sidebar para o footer','alxroot'),

      'before_widget'=>'<div class="col s12 m6 l4 xl4 center" style="padding:20px;">',
      'after_widget'=>'</div>',
      'before_title'=>'<p class="flow-text">',
      'after_title'=>'</p>'

    )
  );  

  register_sidebar(
    array(
      'name'=>__(' 3° Sidebar do footer.', 'alxroot'),
      'id'=>'sidebar6',
      'description'=> __('3º Sidebar para o footer','alxroot'),

      'before_widget'=>'<div class="col s12 m6 l4 xl4 center" style="padding:20px;">',
      'after_widget'=>'</div>',
      'before_title'=>'<p class="flow-text">',
      'after_title'=>'</p>'

    )
  );

}



function servicos() {

  $labels = array(
    'name'          => __( 'Serviços', 'mt-textdomain' ),
    'singular_name' => __( 'Serviço', 'mt-textdomain' ),
    'add_new'       => __( 'Adicionar novo serviço', 'mt-textdomain' ),
    'add_new_item'  => __( 'Adicionar novo serviço', 'mt-textdomain' ),
    'edit_item'     => __( 'Editar serviço', 'mt-textdomain' ),
    'featured_image' => __( 'Imagem do serviço', 'mt-textdomain' ),
  );

  $args = array(
    'labels'    => $labels,
    'public'    => true,
    'supports'  => array( 'title', 'editor', 'thumbnail' ),
    'has_archive' => true,
    'show_ui'   => true,
    'show_in_menu'   => true,
    'menu_position' => 25
  );

  register_post_type( 'servicos', $args );

  flush_rewrite_rules();

}
add_action( 'init',  'servicos');
