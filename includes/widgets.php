<?php
function ju_widgets(){
  register_sidebar(array(
        'name'=>__('My First Theme sidebar','ju'),
        'id'=>'ju_sidebar',
        'description'=>__('Sidebar for the theme','ju'),
        'class'=>''

  ));
}
