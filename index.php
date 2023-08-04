<?php
get_headre();
?>

<div id="content"class="container-fluid home">
    <div class="row">
        <?php
        $newsup_content_layout = esc_attr(get_thme_mod('newsup_content_layout','align-content-right'));
        if($newsup_content_layout == "align-content-left")
        { ?>
          <acside class="col-md-4">
         <?php get_sideber();?>
          </acside>
       <?php }
         elseif($newsup_content_layout == "grid-left-sidebar")
       { ?>
         <acside class="col-md-4"> 
            <?php get_sideber();?>
         </acside>
        <?php}  
        if($newsup_content_layout ==
        "align-content-right"){?>
        <div class="col-md-8">
            <?php get_template_part('content','');?>
        </div>
          <?php} elseif($newsup_content_layout == 
          "align-content-left"){?>
          <div class="col-md-8">
            <?php get_template_part('content',''); ?>
          </div>
         <?php} elseif($newsup_content_layout == "full-width-content") {?>
        <div class="col-md-12">
            <?php get_template_part('content','');?>
        </div>
        <?php}   if($newsup_content_layout == "grid-left-sidebar"){?>
        <div class="col-md-8">
            <?php get_template_part('content','grid'); ?>
        </div>
        <?php } elseif($newsup_content_layout == "grid-right-sideber") { ?>
        <div class="col-md-8">
            <?php get_template_part('content','grid'); ?>
        </div>
        <?php } elseif($newsup_content_layout == "grid-fullwidth") { ?>
        <div class="col-md-12">
            <?php get_template_part ('content','grid'); ?>
        </div>
        <?php } ?>    
        <?php if($newsup_content_layout == "align-content-right") {?>
        <aside class="col-md-4">
            <?php get_sidebar();?>
        </aside>
        <?php }
        elseif($newsup_content_layout == "grid-right-sidebar"){?>
    <aside class="col-md-4">
        <?php get_sidebar();?>
    </aside>    
    <?php } ?>
        
    </div>
</div>
<?php
get_footer();
?>
