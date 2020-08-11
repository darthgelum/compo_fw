<?php
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
$file = "./".$uri;
if(file_exists($file) && $uri != "/")
{
    header('Content-Type: text/javascript');

    echo file_get_contents($file);
    exit();

}
echo file_get_contents("examples/web.html");