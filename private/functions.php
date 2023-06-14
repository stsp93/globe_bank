<?php
function url_to($url) {
    return '/public/staff' . $url;
}

function error_404() {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    exit();
}

function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . " 501 Internal Server Error");
    exit();
}
?>
