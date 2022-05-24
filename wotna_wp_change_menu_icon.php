<?php 
/*let put in functions.php of your WordPress theme */
function wotna_wp_change_menu_icon($slug,$icon_url=''){
	global $menu;
	foreach($menu as $order=>$m)
		if($m[2]==$slug){
			$menu[$order][6]=$icon_url;
			return true;
		}
	return false;
}
?> 
