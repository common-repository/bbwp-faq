<?php
// AÑADIR El LISTADO DE FAQ (Custom Post)
//[bbwp-faq]
function bbwp_faq_shortcode()
{
	// Obtener el listado de FAQ
	$args = array(
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'post_type' => 'faq',
				'post_parent'=> ''
			);
	
	$faqList = get_posts( $args );
	
	// Organizar el contenido de las FAQ
	$faqShow = '';
	foreach ($faqList as $faq){
		$faqShow .= '<div class="faqShow">';
		$faqShow .= '<div class="faqTitle" onClick="toggle('.$faq->ID.')">'.$faq->post_title.'</div>';
		$faqShow .= '<div class="faqContent" id="'.$faq->ID.'">'.$faq->post_content.'</div>';
		$faqShow .= '</div>';
	}
	
	// Incluir el Show/Hide de las FAQ
	$faqShow .= '<script>';
	$faqShow .= '
	function toggle(id) {
		var element = document.getElementById(id);

		if (element) {
			var display = element.style.display;

			if (display == "block") {
				element.style.display = "none";
			} else {
				element.style.display = "block";
			}
		}
	}
	';
	$faqShow .= '</script>';

	
	return $faqShow;
}
add_shortcode( 'bbwp-faq', 'bbwp_faq_shortcode' );
?>