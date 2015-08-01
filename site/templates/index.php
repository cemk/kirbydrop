<?php snippet('header') ?>



<div class="row titleRow">
<div class="filetitle col-lg-12 col-md-12 col-sm-12 text-center">

  <?php echo $page->title(); ?>
  
  </div>
 </div>
 
 <div class="row downloadRow">
	 <div class="col-lg-12 col-md-12 col-sm-12 text-center">
 		 <a href="<?=$page->file()->url();?>" download class="btn btn-default btn" role="button">Download</a>
  	</div>

</div>

<?php if($page->file()->type()=="image") { ?>
<div class="row">
    <div class="col-md-12 col-xs-12 col-lg-12">
    
    
    <img class="img-responsive center-block" src="<?=$page->file()->url();?>" alt="<?php echo $page->title(); ?>" />
    
          
      
      
      </div>
      </div>
  
    
   <?php } ?>
    


<?php snippet('footer') ?>