

            <div class="col-md-3">
                
                <div class="list-group">
                
                	 <a href="<?php echo $page->url();?>/" class="list-group-item<?php if(param('type') == "") echo ' active'; ?>">All</a>
                    <a href="<?php echo $page->url();?>/type:image" class="list-group-item<?php if(param('type') == "image") echo ' active'; ?>">Images</a>
                    <a href="<?php echo $page->url();?>/type:document" class="list-group-item<?php if(param('type') == "document") echo ' active'; ?>">Documents</a>
                    <a href="<?php echo $page->url();?>/type:archive" class="list-group-item<?php if(param('type') == "archive") echo ' active'; ?>">Archives</a>
                    <a href="<?php echo $page->url();?>/type:audio" class="list-group-item<?php if(param('type') == "audio") echo ' active'; ?>">Audio</a>
                    <a href="<?php echo $page->url();?>/type:video" class="list-group-item<?php if(param('type') == "video") echo ' active'; ?>">Video</a>
                    <a href="<?php echo $page->url();?>/type:code" class="list-group-item<?php if(param('type') == "code") echo ' active'; ?>">Code</a>
                    <a href="<?php echo $page->url();?>/type:other" class="list-group-item<?php if(param('type') == "other") echo ' active'; ?>">Other</a>
                    
                </div>
            </div>
 <div class="col-md-9">

  