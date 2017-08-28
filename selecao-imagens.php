<input id="my_upl_button" type="button" value="Escolher Imagens" /><br/>
	<div class="row">
			<div id="exibe" class="sortable">		
			
			<?php			
			$urlsForeach  = json_decode($UrlsSavedInDB , true);
				if ($urlsForeach  != '' ) {
				foreach ($urlsForeach  as $url) { 
			 ?>			 
				<div class="remove_this_image col-md-3">
					<span class="dashicons dashicons-no" style='float: right;'></span>
					<img src="<?php echo $url;?>"  class="img-responsive img-thumbnail " />
					<input name="my_image_URL[]" value="<?php echo $url;?>"/>
				</div>				 
			<?php
				 };
				}
			?>
	</div>
</div>
