<?php
/**
 * Custom functions
 */

// Show less info to users on failed login for security. (Won't let a valid username be known)
function show_less_login_info()
{ 
	return "<strong>ERROR</strong>: What's wrong, don't remember? Try again...";
}

// Don't generate and display WordPress version
function no_generator() 
{ 
	return ''; 
}

add_filter( 'the_generator', 'no_generator' );	
add_filter( 'login_errors', 'show_less_login_info' );


if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#show_links').click(function() {
  		jQuery('.hidden').fadeToggle(400);
	});
	
	if (jQuery('#show_links:checked').val() !== undefined) {
		jQuery('.hidden').show();
	}
	
});
</script>
 
<?php
}


?>