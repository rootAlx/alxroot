<?php


function alxroot_customizer( $alxroot_customize ){






  $alxroot_customize->add_section(
    'sec_corFundoMenu', array(
      'title'=> __('Configurações  do menu.','alxroot'),
      'description'=> __('Defina a cor de fundo do menu.','alxroot')
    )
  );

  $alxroot_customize->add_setting(
    'set_corFundoMenu', array(

      'default'=>'#3f85f4',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_corFundoMenu', array(
      'label'=>'Menu',
      'description'=> __('Selecione uma cor.','alxroot'),
      'section'=>'sec_corFundoMenu',
      'type'=>'color'
    )
  );

  $alxroot_customize->add_setting(
    'set_corLinksMenu', array(

      'default'=>'black',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_corLinksMenu', array(
      'label'=>'Menu cor links',
      'description'=> __('Selecione uma cor.','alxroot'),
      'section'=>'sec_corFundoMenu',
      'type'=>'color'
    )
  );

  $alxroot_customize->add_setting(
    'set_corHoverMenu', array(

      'default'=>'black',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_corHoverMenu', array(
      'label'=>'Menu cor hover',
      'description'=> __('Selecione uma cor ao rolar o mouse.','alxroot'),
      'section'=>'sec_corFundoMenu',
      'type'=>'color'
    )
  );










  







//principal parallax

  $alxroot_customize->add_section(
    'sec_parallaxPrincipalImage', array(
      'title'=>__('Parallax home 1° imagem','alxroot'),
      'description'=>__('Selecione uma imagem padrão para o 1° parallax da home.','alxroot')
    )
  );

  $alxroot_customize->add_setting(
    'set_parallaxPrincipalImage', array(
      'sanitize_callback' => 'absint',
      'validate_callback'=>'themeslug_validate_image'
    )
  );

  $alxroot_customize->add_control(
    new WP_Customize_Media_Control($alxroot_customize,'set_parallaxPrincipalImage', array(
      'label'=>'Imagem',
      'default'=>'', 
      'section'=>'sec_parallaxPrincipalImage',
      
      'mime_type' => 'image',
    ))
  );

  $alxroot_customize->add_setting(
    'set_tituloParallaxPrincipal', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloParallaxPrincipal', array(
      'label'=>__('Defina um titulo para o 1° parallax','alxroot'),
      'description'=>__('Escreva o titulo.','alxroot'),
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'text'

    )
  );


  $alxroot_customize->add_setting(
    'set_IconeParallaxPrincipal', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_IconeParallaxPrincipal', array(
      'label'=>__('Defina um icone para o 1° parallax','alxroot'),
      'description' => sprintf( 
       __( 'Acesse escolha um icone <a target="_blank" href="%s">Clique aqui</a>', 'alxroot' ),
       'https://fontawesome.com/icons?d=gallery' 
     ),
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'text'

    )
  );


  $alxroot_customize->add_setting(
    'set_textoParallaxPrincipal', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_textoParallaxPrincipal', array(
      'label'=>__('Defina um texto para o 1° parallax','alxroot'),
      
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'textarea'

    )
  );



////////xxxxxxxxxx///////////////////////////

  $alxroot_customize->add_setting(
    'set_parallaxPrincipalColorText', array(

      'default'=>'black',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_parallaxPrincipalColorText', array(
      'label'=>'Cor do texto e icone',
      'description'=> __('Selecione uma cor para os textos e icone.','alxroot'),
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'color'
    )
  );


  $alxroot_customize->add_setting(
    'set_tituloBtnParallaxPrincipal', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloBtnParallaxPrincipal', array(
      'label'=>__('Defina um nome  para o botão','alxroot'),
      'description'=>__('Escreva o nome.','alxroot'),
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'text'

    )
  );
  $alxroot_customize->add_setting(
    'set_linkBtnParallaxPrincipal', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_linkBtnParallaxPrincipal', array(
      'label'=>__('Defina um link para o botão','alxroot'),
      'description'=>__('Escreva o link.','alxroot'),
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'text'

    )
  );

  $alxroot_customize->add_setting(
    'set_parallaxPrincipalColorBtnFundo', array(

      'default'=>'#3f85f4',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_parallaxPrincipalColorBtnFundo', array(
      'label'=>'Cor do Botão',
      'description'=> __('Selecione uma cor para o botão.','alxroot'),
      'section'=>'sec_parallaxPrincipalImage',
      'type'=>'color'
    )
  );



  $alxroot_customize->add_section(
   'sec_parallaxInicioImage', array(
    'title'=>__('Parallax home 2° imagem','alxroot'),
    'description'=>__('Selecione uma imagem padrão para o 2° parallax da home.','alxroot')
  )
 );

  $alxroot_customize->add_setting(
   'set_parallaxInicioImage', array(
    'sanitize_callback' => 'absint',
    'validate_callback'=>'themeslug_validate_image'
  )
 );

  $alxroot_customize->add_control(
   new WP_Customize_Media_Control($alxroot_customize,'set_parallaxInicioImage', array(
    'label'=>'Imagem',
    'default'=>'', 
    'section'=>'sec_parallaxInicioImage',
    
    'mime_type' => 'image',
  ))
 );



  $alxroot_customize->add_section(
    'sec_parallaxInicioImage2', array(
      'title'=>__('Parallax home 3° imagem','alxroot'),
      'description'=>__('Selecione uma imagem padrão para o 3° parallax da home.','alxroot')
    )
  );

  $alxroot_customize->add_setting(
    'set_parallaxInicioImage2', array(
      'sanitize_callback' => 'absint',
      'validate_callback'=>'themeslug_validate_image'
    )
  );

  $alxroot_customize->add_control(
    new WP_Customize_Media_Control($alxroot_customize,'set_parallaxInicioImage2', array(
      'label'=>'Imagem',
      'default'=>'', 
      'section'=>'sec_parallaxInicioImage2',
      
      'mime_type' => 'image',
    ))
  );


  $alxroot_customize->add_setting(
    'set_parallaxTexto', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_parallaxTexto', array(
      'label'=>__('Defina o texto para o 3°parallax.','alxroot'),
      'description'=>__('Escreva o texto.','alxroot'),
      'section'=>'sec_parallaxInicioImage2',
      'type'=>'textarea'

    )
  );
  $alxroot_customize->add_setting(
    'set_parallaxColorText', array(

      'default'=>'black',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );

  
  $alxroot_customize->add_control(
    'set_parallaxColorText', array(
      'label'=>'Cor do texto',
      'description'=> __('Selecione uma cor.','alxroot'),
      'section'=>'sec_parallaxInicioImage2',
      'type'=>'color'
    )
  );

  $alxroot_customize->add_setting(
    'set_parallax3NomeBtn', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_parallax3NomeBtn', array(
      'label'=>__('Defina o nome do botão.','alxroot'),
      'description'=>__('Escreva o nome.','alxroot'),
      'section'=>'sec_parallaxInicioImage2',
      'type'=>'text'

    )
  );
  $alxroot_customize->add_setting(
    'set_parallax3UrlBtn', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_parallax3UrlBtn', array(
      'label'=>__('Defina o link do botão.','alxroot'),
      'description'=>__('Escreva o link.','alxroot'),
      'section'=>'sec_parallaxInicioImage2',
      'type'=>'text'

    )
  );

  $alxroot_customize->add_setting(
    'set_parallax3colorBtn', array(

      'default'=>'#3f85f4',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );

  
  $alxroot_customize->add_control(
    'set_parallax3colorBtn', array(
      'label'=>'Cor do botão',
      'description'=> __('Selecione a cor do  botão.','alxroot'),
      'section'=>'sec_parallaxInicioImage2',
      'type'=>'color'
    )
  );






  $alxroot_customize->add_section(
    'sec_miniParallaxHome', array(
      'title'=>__('Mini parallax home','alxroot'),
      'description'=>__('Selecione uma imagem padrão para o mini parallax da home.','alxroot')
    )
  );

  $alxroot_customize->add_setting(
    'set_miniParallaxHome', array(
      'sanitize_callback' => 'absint',
      'validate_callback'=>'themeslug_validate_image'
    )
  );

  $alxroot_customize->add_control(
    new WP_Customize_Media_Control($alxroot_customize,'set_miniParallaxHome', array(
      'label'=>'Imagem',
      'default'=>'', 
      'section'=>'sec_miniParallaxHome',
      
      'mime_type' => 'image',
    ))
  );

  $alxroot_customize->add_setting(
    'set_tituloMiniParallax', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloMiniParallax', array(
      'label'=>__('Defina um titulo para o mini parallax','alxroot'),
      'description'=>__('Escreva o titulo.','alxroot'),
      'section'=>'sec_miniParallaxHome',
      'type'=>'text'

    )
  );

  $alxroot_customize->add_setting(
    'set_textMiniParallax', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_textMiniParallax', array(
      'label'=>__('Defina um texto para o mini parallax','alxroot'),
      'description'=>__('Escreva o texto.','alxroot'),
      'section'=>'sec_miniParallaxHome',
      'type'=>'textarea'

    )
  );

  $alxroot_customize->add_setting(
    'set_tituloMiniParallaxbtn', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloMiniParallaxbtn', array(
      'label'=>__('Defina um titulo para o botão do mini parallax','alxroot'),
      'description'=>__('Escreva o titulo do botão.','alxroot'),
      'section'=>'sec_miniParallaxHome',
      'type'=>'text'

    )
  );

  $alxroot_customize->add_setting(
    'set_tituloMiniParallaxNomebtn', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloMiniParallaxNomebtn', array(
      'label'=>__('Defina um nome para o botão do mini parallax','alxroot'),
      'description'=>__('Escreva o nome do botão.','alxroot'),
      'section'=>'sec_miniParallaxHome',
      'type'=>'text'

    )
  );
  $alxroot_customize->add_setting(
    'set_tituloMiniParallaxLinkbtn', array(
      'type'=>'theme_mod',
      'default'=>'',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloMiniParallaxLinkbtn', array(
      'label'=>__('Defina um link  para o botão do mini parallax','alxroot'),
      'description'=>__('Escreva o link do botão.','alxroot'),
      'section'=>'sec_miniParallaxHome',
      'type'=>'text'

    )
  );


  $alxroot_customize->add_setting(
    'set_MiniparallaxcolorBtn', array(

      'default'=>'#3f85f4',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );

  
  $alxroot_customize->add_control(
    'set_MiniparallaxcolorBtn', array(
      'label'=>'Cor do botão',
      'description'=> __('Selecione a cor do  botão.','alxroot'),
      'section'=>'sec_miniParallaxHome',
      'type'=>'color'
    )
  );





  $alxroot_customize->add_section(
    'sec_corFundoFooter', array(
      'title'=> __('Configurações do footer.','alxroot'),
      'description'=> __('Defina a cor de fundo do menu.','alxroot')
    )
  );

  $alxroot_customize->add_setting(
    'set_corFundoFooter', array(

      'default'=>'#3f85f4',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_corFundoFooter', array(
      'label'=>'Cor do footer',
      'description'=> __('Selecione uma cor.','alxroot'),
      'section'=>'sec_corFundoFooter',
      'type'=>'color'
    )
  );


  $alxroot_customize->add_setting(
    'set_corTextoFooter', array(

      'default'=>'white',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_corTextoFooter', array(
      'label'=>'Cor dos textos no footer',
      'description'=> __('Selecione uma cor.','alxroot'),
      'section'=>'sec_corFundoFooter',
      'type'=>'color'
    )
  );
  $alxroot_customize->add_setting(
    'set_corLinksFooter', array(

      'default'=>'white',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color'
    )
  );
    //personalizacao efeito hover links do menu 1
  $alxroot_customize->add_control(
    'set_corLinksFooter', array(
      'label'=>'Cor dos links no footer',
      'description'=> __('Selecione uma cor.','alxroot'),
      'section'=>'sec_corFundoFooter',
      'type'=>'color'
    )
  );  
  $alxroot_customize->add_setting(
    'set_tituloFooter', array(
      'type'=>'theme_mod',
      'default'=>'Copyright Todos direitos reservados',
      'sanitize_callback'=>'wp_filter_nohtml_kses'
    )
  );

  $alxroot_customize->add_control(
    'set_tituloFooter', array(
      'label'=>__('Defina o copyright do footer. ','alxroot'),
      'description'=>__('Escreva o copyright do footer.','alxroot'),
      'section'=>'sec_corFundoFooter',
      'type'=>'text'

    )
  );


}
add_action( 'customize_register', 'alxroot_customizer' );





function alxroot_sanitize_select( $input, $setting ){

    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
  $input = sanitize_key($input);

    //get the list of possible select options
  $choices = $setting->manager->get_control( $setting->id )->choices;

    //return input if valid or return default option
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}


function themeslug_validate_image( $validity, $value ) {

  // Get the url of the image
  $image = wp_get_attachment_image_src( $value )[0];

  /*
  * Array of valid image file types.
  *
  * The array includes image mime types that are included in wp_get_mime_types()
  */
  $mimes = array(
    ''             =>'',
    'jpg|jpeg|jpe' => 'image/jpeg',
    'gif'          => 'image/gif',
    'png'          => 'image/png',
    'bmp'          => 'image/bmp',
    'tif|tiff'     => 'image/tiff',
    'ico'          => 'image/x-icon',

  );
  // Return an array with file extension and mime_type.
  $file = wp_check_filetype( $image, $mimes );
  
  if( !$value ) {
    // If no image has been chosen, instruct user to choose an image
    $validity->add( 'required', __( 'Please choose an image' ) );
  } elseif ( !$file['ext'] ) {
    // If a valid image file extension is not found, instruct user to choose appropriate image
    $validity->add( 'not_valid', __( 'Please choose a valid image type' ) );
  }
  return $validity;
}