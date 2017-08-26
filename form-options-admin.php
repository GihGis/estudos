<h1><?php bloginfo('name'); ?></h1>
 <?php settings_errors();?>
 
<form method="post" action="options.php">
	<?php settings_fields ('tema-setting-group'); ?>

	
	<?php do_settings_sections (
	'opcoes_do_tema_pagina_inicial'//string $page
	
	); ?>
	
	<?php submit_button (
	//string $text
	//string $type
	//string $name
	//bool $wrap
	//mixed $other_atributes

	); 
	
	?>
	
 </form>
