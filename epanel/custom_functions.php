<?php 

/*this function controls the meta titles display*/
function ck_titles() {
	 if (function_exists('is_tag') && is_tag()) {
			single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
			} elseif (is_archive()) {
			wp_title(''); echo ' Archive - ';
			} elseif (is_search()) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
			} elseif (!(is_404()) && (is_single()) || (is_page())) {
			wp_title(''); echo ' - ';
			} elseif (is_404()) {
			echo 'Not Found - ';
			}
			if (is_home()) {
			bloginfo('name'); echo ' - '; bloginfo('description');
			} else {
			bloginfo('name');
			}
			if ($paged > 1) {
			echo ' - page '. $paged;
			} 
		}

		



?>
