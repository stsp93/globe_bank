<?php
require_once('../../../private/initialize.php');


if (is_post_request()) {
    $menu_name = htmlspecialchars($_POST['menu_name'] ?? '');
    $position = htmlspecialchars($_POST['position'] ?? '');
    $visible = htmlspecialchars($_POST['visible'] ?? '');


    echo "Form parameters <br />";
    echo "Menu name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
} else {
    redirect_to(url_to('/subjects/new.php'));
}




?>