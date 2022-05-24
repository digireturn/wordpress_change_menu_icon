# wordpress_change_menu_icon
Function PHP for change icon on WordPress defualt menu (post, page, media, etc)

Add in functions.php the wotna_wp_change_menu_icon() function and call it with slug menu item and url icon.
wotna_wp_change_menu_icon return false if it don't found slug, otherwase return true.

bool wotna_wp_change_menu_icon(string:slug,string:icon_url)
