<?php $filetype = url('assets/images/'.$upload->file()->type().'.png'); ?>

<div class="col-sm-4 col-lg-4 col-md-4 item">
    <div class="thumbnail">
       <a href="<?php echo $upload->url(); ?>"> <img src="<?php echo url($filetype) ?>" alt=""></a>
        <div class="caption">
        
       
           
            <p><a href="<?php echo $upload->url(); ?>"><?php echo $upload->title(); ?></a></p>
            <p class="date"><?php echo $upload->sharedate(); ?></p>
        </div>
    </div>
</div>

