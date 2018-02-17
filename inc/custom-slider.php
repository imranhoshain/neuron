
<?php 

//Slider register function
function neuron_custom_slide(){
register_post_type('slide', array(
	'label' => 'slides',
	'labels' => array(
		'name' => 'Slides',
		'singular_name' => 'slide',
	),
	'public' => true,
	'menu_icon' => 'dashicons-images-alt',
	'supports' => array('title','editor','thumbnail','custom-fields','excerpt','page-attributes' ),


));

}
add_action('init', 'neuron_custom_slide');