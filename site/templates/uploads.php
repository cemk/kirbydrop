<?php snippet('header') ?>

  <main class="main" role="main">


    <?php snippet('filetypes') ?>
    
    
	  <?php 
	  	$list=page('uploads');
	  	$uploads = page('uploads')->children()->invisible()->sortBy('modified', 'desc');
	  	
	  	if($type = param('type')) {
		
				switch ($type) {
					case 'audio':
						$uploads = $uploads->filter(function($child) {
				  			  return $child->hasAudio();
				  			});
						break;
					
					case 'image':
						$uploads = $uploads->filter(function($child) {
								  return $child->hasImages();
								});
						break;
					
					case 'archive':
						$uploads = $uploads->filter(function($child) {
								  return $child->hasArchives();
								});
						break;
					
					case 'document':
						$uploads = $uploads->filter(function($child) {
								  return $child->hasDocuments();
								});
						break;
					
					case 'video':
						$uploads = $uploads->filter(function($child) {
								  return $child->hasVideos();
								});
						break;
						
					case 'code':
						$uploads = $uploads->filter(function($child) {
								  return $child->file()->type() == 'code';
								});
						break;
				}
		
	  	
	  	}
	  	

	  	
	  		  	
	  	foreach($uploads as $upload): 
	  
	  
	   
	   if($upload->file()->type() == "image"){
	   	snippet('files/image', array('upload' => $upload)); } 
	   else { 
	   	snippet('files/everythingelse', array('upload' => $upload)); }
	   
	   ?>
	
	   <?php 
	   		
	   		
	   		
	   	?>
	   
	   
	   <?php endforeach ?>
	
	
	
	</div>

  </main>

<?php snippet('footer') ?>