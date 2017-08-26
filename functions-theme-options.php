
// REGISTER
function tema_custom_settings(){   	   
	  	   
	    register_setting(
			'tema-setting-group',//string $option_group
			'imagens_home' //string $option_name
			//calback $sanitize_calback		 
		);
    
 }
 --------
 
 //FIELD
 
 add_settings_field(
		 'home-imagens-top',//string $id
		 'Imagens do Slider',//String $title
		 'tema_home_imgs',//string $calback
		 'opcoes_do_tema_pagina_inicial',//string $page	
		 'tema-home-options'//string $section
		 //string $args			 
		 );
     
 -------
 
//CREATE PAGE
  function theme_create_page(){
	     require_once( get_template_directory() . '/inc/templates/form-options-admin.php');
   }


------
 //CALBACK
 
 function tema_home_imgs($urlsparasalvar){	 
	    $urlsSalvas  = esc_attr( get_option( 'imagens_home' ) );
	   
	   	include( get_template_directory() . '/inc/templates/selecao-imagens.php');

	  	if ( isset( $_POST['my_image_URL'] ) ) {
			$urlsparasalvar  = htmlspecialchars(json_encode($_POST['my_image_URL']));
			
		     echo '<input name="imagens_home" value="'.$urlsparasalvar .'" style="width:300px"/>';
		}	
 }
 
 
