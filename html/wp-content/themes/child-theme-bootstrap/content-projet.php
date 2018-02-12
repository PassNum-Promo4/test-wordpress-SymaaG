<?php

if(!function_exists("get_field")) return;
?>
 <div class="w-100 row col-12 d-flex justify-content-center">
 <div class="row col-12 d-flex justify-content-center ">
   <h1 class="text-center"><?php the_field('titre'); ?></h1>
 </div>
   <div class="col-6">
     <strong class="col-12">Descriptif :</strong>
     <p class="col-12" ><?php the_field('descriptif'); ?></p>
   </div>
   <div class="col-6">
     <img class="col-12"  src="<?php the_field('img'); ?>"/>
   </div>

 </div>
 