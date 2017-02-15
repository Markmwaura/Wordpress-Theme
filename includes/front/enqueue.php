<?php
function ju_enqueue(){
  //register style sheet
  wp_register_style('ju_bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
  wp_register_style('ju_animate',get_template_directory_uri().'/assets/css/animate.min.css');
  wp_register_style('ju_fontawesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
  wp_register_style('ju_owltheme',get_template_directory_uri().'/assets/css/owl.theme.css');
  wp_register_style('ju_owlcarousel',get_template_directory_uri().'/assets/css/owl.carousel.css');
  wp_register_style('ju_style',get_template_directory_uri().'/assets/css/style.css');
  wp_register_style('ju_googleapifonts','https://fonts.googleapis.com/css?family=Open+Sans:400,700');

  wp_enqueue_style('ju_bootstrap');
  wp_enqueue_style('ju_animate');
  wp_enqueue_style('ju_fontawesome');
  wp_enqueue_style('ju_owltheme');
  wp_enqueue_style('ju_owlcarousel');
  wp_enqueue_style('ju_style');
  wp_enqueue_style('ju_googleapifonts');
  //register script
  wp_register_script('ju_jqueryjs',get_template_directory_uri().'/assets/js/jquery.js',array(),false,true);
  wp_register_script('ju_bootstrapjs',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),false,true);
  wp_register_script('ju_smoothscroll',get_template_directory_uri().'/assets/js/smoothscroll.js',array(),false,true);
  wp_register_script('ju_jquerynav',get_template_directory_uri().'/assets/js/jquery.nav.js',array(),false,true);

  wp_register_script('ju_jqueryparallax',get_template_directory_uri().'/assets/js/jquery.parallax.js',array(),false,true);
  wp_register_script('ju_owlcarouseljs',get_template_directory_uri().'/assets/js/owl.carousel..js',array(),false,true);

  wp_register_script('ju_isotopeminjs',get_template_directory_uri().'/assets/js/isotope.min.js',array(),false,true);
  wp_register_script('ju_wowminjs',get_template_directory_uri().'/assets/js/wow.min.js',array(),false,true);

  wp_register_script('ju_counterjs',get_template_directory_uri().'/assets/js/counter.js',array(),false,true);
  wp_register_script('ju_customjs',get_template_directory_uri().'/assets/js/custom.js',array(),false,true);


  wp_enqueue_script('ju_jqueryjs');
  wp_enqueue_script('ju_bootstrapjs');
  wp_enqueue_script('ju_smoothscroll');
  wp_enqueue_script('ju_jquerynav');
  wp_enqueue_script('ju_jqueryparallax');
  wp_enqueue_script('ju_owlcarouseljs');
  wp_enqueue_script('ju_isotopeminjs');
  wp_enqueue_script('ju_wowminjs');
  wp_enqueue_script('ju_counterjs');
  wp_enqueue_script('ju_customjs');



}
 ?>
