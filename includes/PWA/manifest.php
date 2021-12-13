<?php

$site_name = bloginfo('name');
$site_url = bloginfo('url');
$site_short_name = 'bar';
$site_description = bloginfo('description');
$site_nav_color = get_theme_mod('emp_components_nav_background');
$site_icon = get_site_icon_url();

$manifest = [
    "name" => $site_name,
    "gcm_user_visible_only" => true,
    "short_name" => $short_name,
    "description" => $site_description,
    "start_url" => $site_url,
    "display" => "standalone",
    "orientation" => "portrait",
    "background_color" => $darkblue,
    "theme_color" => $site_nav_color,
    "icons" => [
        "src" => $site_icon,
        "sizes"=> "54x54 96x96 128x128 144x144",
        "type" => "image/png"
    ],
    "src" => $site_icon,
    "sizes" => "48x48 72x72",
    "type" => "image/png"
];

header('Content-Type: application/json');
echo json_encode($manifest);
?>
