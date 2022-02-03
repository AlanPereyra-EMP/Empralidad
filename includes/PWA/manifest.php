<?php
$manifest = array(
    "name" => "bloginfo('name')vv",
    "gcm_user_visible_only" => true,
    "short_name" => "bloginfo('name')",
    "description" => "bloginfo('description')",
    "start_url" => "/site_url",
    "display" => "standalone",
    "orientation" => "portrait",
    "background_color" => "#000",
    "theme_color" => "#000",
    "icons" => array(
        "src" => "/asd",
        "sizes"=> "54x54 96x96 128x128 144x144",
        "type" => "image/png"
    ),
    "src" => "/asd",
    "sizes" => "48x48 72x72",
    "type" => "image/png"
);

header('Content-Type: application/json');
echo json_encode($manifest);
?>
