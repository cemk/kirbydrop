<?php
$notThumbable = array("psd", "ps", "eps", "ai", "sketch");


if(in_array($upload->file()->extension(), $notThumbable) == true) {
$imageUrl = url('assets/images/image.png'); }
else {

$image = thumb($upload->file(), array('width'=>300));

$imageUrl = $image->url();

}
?>

<div class="col-sm-4 col-lg-4 col-md-4 item">
    <div class="thumbnail">
        <a href="<?php echo $upload->url(); ?>"><div class="imagethumb"><img src="<?php echo $imageUrl; ?>" alt=""></div></a>
        <div class="caption">
        
      
           
            <p><a href="<?php echo $upload->url(); ?>"><?php echo $upload->title(); ?></a></p>
            <p class="date"><?php echo $upload->sharedate()->relative(); ?></p>
         </div>
    </div>
</div>