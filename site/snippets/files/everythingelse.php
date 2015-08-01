<?php 


$filetype = $upload->file()->type();

if(empty($upload->file()->type())) {$filetype = "other";}

$imageAddress = url('assets/images/'.$filetype.'.png'); 

?>

<div class="col-sm-4 col-lg-4 col-md-4 item">
    <div class="thumbnail">
       <a href="<?php echo $upload->url(); ?>"> <img src="<?php echo url($imageAddress) ?>" alt=""></a>
        <div class="caption">
        
       
           
            <p><a href="<?php echo $upload->url(); ?>"><?php echo $upload->title(); ?></a></p>
            <p class="date"><?php echo $upload->sharedate()->relative(); ?></p>
        </div>
    </div>
</div>

